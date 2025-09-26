<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Blog ana sayfası - yayınlanmış blogları listele
     */
    public function index(Request $request)
    {
        $query = Blog::published();

        // Arama özelliği
        if ($request->has('search') && $request->search) {
            $query->search($request->search);
        }

        $blogs = $query->paginate(8);
        $featuredBlogs = Blog::published()->featured()->take(3)->get();
        $recentBlogs = Blog::published()->recent(5)->get();

        return view('blogs.blog_index', compact('blogs', 'featuredBlogs', 'recentBlogs'));
    }

    /**
     * Blog detay sayfası
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
                   ->where('status', 'published')
                   ->firstOrFail();

        // Görüntülenme sayısını artır
        $blog->incrementViews();

        // İlgili bloglar
        $relatedBlogs = $blog->getRelatedBlogs(4);

        return view('blogs.blog_show', compact('blog', 'relatedBlogs'));
    }

    /**
     * Admin: Blog listesi
     */
    public function adminIndex(Request $request)
    {
        $query = Blog::query();

        // Status filtreleme
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        // Arama
        if ($request->has('search') && $request->search) {
            $query->search($request->search);
        }

        // Sıralama
        $sortBy = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');
        $query->orderBy($sortBy, $sortOrder);

        $blogs = $query->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Admin: Blog ekleme sayfası
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Admin: Blog kaydetme
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'excerpt' => 'nullable|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:500',
            'keywords' => 'nullable|max:500',
            'status' => 'required|in:draft,published,archived',
            'featured' => 'boolean'
        ]);

        $data = $request->all();

        // Slug oluştur
        $data['slug'] = Str::slug($request->title);

        // Slug benzersizliği kontrol et
        $originalSlug = $data['slug'];
        $counter = 1;
        while (Blog::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Görsel yükleme
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->extension();
            $image->storeAs('public/blog_images', $imageName);
            $data['image'] = $imageName;
        }

        // Yayınlanma tarihi
        if ($request->status === 'published' && !$request->published_at) {
            $data['published_at'] = now();
        }

        // Meta title yoksa title'ı kullan
        if (!$request->meta_title) {
            $data['meta_title'] = $request->title;
        }

        // Meta description yoksa excerpt'i kullan
        if (!$request->meta_description && $request->excerpt) {
            $data['meta_description'] = $request->excerpt;
        }

        // Featured checkbox handling
        $data['featured'] = $request->has('featured') ? 1 : 0;

        $blog = Blog::create($data);

        // Redirect based on button clicked
        if ($request->has('save_and_continue')) {
            return redirect()->route('admin.blogs.edit', $blog->id)
                           ->with('success', 'Blog başarıyla oluşturuldu! Düzenlemeye devam edebilirsiniz.');
        }

        return redirect()->route('admin.blogs.index')
                       ->with('success', 'Blog başarıyla oluşturuldu!');
    }

    /**
     * Admin: Blog düzenleme sayfası
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Admin: Blog güncelleme
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'excerpt' => 'nullable|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:500',
            'keywords' => 'nullable|max:500',
            'status' => 'required|in:draft,published,archived',
            'featured' => 'boolean'
        ]);

        $data = $request->all();

        // Slug güncelle (sadece title değiştiyse)
        if ($blog->title !== $request->title) {
            $data['slug'] = Str::slug($request->title);

            // Slug benzersizliği kontrol et (mevcut blog hariç)
            $originalSlug = $data['slug'];
            $counter = 1;
            while (Blog::where('slug', $data['slug'])->where('id', '!=', $blog->id)->exists()) {
                $data['slug'] = $originalSlug . '-' . $counter;
                $counter++;
            }
        }

        // Yeni görsel yüklendiyse
        if ($request->hasFile('image')) {
            // Eski görseli sil
            if ($blog->image) {
                Storage::delete('public/blog_images/' . $blog->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->extension();
            $image->storeAs('public/blog_images', $imageName);
            $data['image'] = $imageName;
        }

        // Yayınlanma tarihi (ilk kez published oluyorsa)
        if ($request->status === 'published' && $blog->status !== 'published' && !$blog->published_at) {
            $data['published_at'] = now();
        }

        // Featured checkbox handling
        $data['featured'] = $request->has('featured') ? 1 : 0;

        $blog->update($data);

        // Redirect based on button clicked
        if ($request->has('save_and_continue')) {
            return redirect()->route('admin.blogs.edit', $blog->id)
                           ->with('success', 'Blog başarıyla güncellendi!');
        }

        return redirect()->route('admin.blogs.index')
                       ->with('success', 'Blog başarıyla güncellendi!');
    }

    /**
     * Admin: Blog silme
     */
    public function destroy(Blog $blog)
    {
        // Görseli sil
        if ($blog->image) {
            Storage::delete('public/blog_images/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')
                       ->with('success', 'Blog başarıyla silindi!');
    }

    /**
     * AJAX: Blog status güncelleme
     */
    public function updateStatus(Request $request, Blog $blog)
    {
        $request->validate([
            'status' => 'required|in:draft,published,archived'
        ]);

        $blog->update([
            'status' => $request->status,
            'published_at' => $request->status === 'published' && !$blog->published_at ? now() : $blog->published_at
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Blog durumu güncellendi!'
        ]);
    }

    /**
     * AJAX: Featured durumu güncelleme
     */
    public function toggleFeatured(Blog $blog)
    {
        $blog->update(['featured' => !$blog->featured]);

        return response()->json([
            'success' => true,
            'featured' => $blog->featured,
            'message' => $blog->featured ? 'Blog öne çıkarıldı!' : 'Blog öne çıkarılmaktan çıkarıldı!'
        ]);
    }

    /**
     * API: Son blogları getir
     */
    public function getRecentBlogs(Request $request)
    {
        $limit = $request->get('limit', 5);
        $blogs = Blog::published()->recent($limit)->get();

        return response()->json([
            'success' => true,
            'data' => $blogs
        ]);
    }

    /**
     * API: Popüler blogları getir
     */
    public function getPopularBlogs(Request $request)
    {
        $limit = $request->get('limit', 10);
        $blogs = Blog::published()->popular($limit)->get();

        return response()->json([
            'success' => true,
            'data' => $blogs
        ]);
    }

    /**
     * API: Blog arama
     */
    public function searchBlogs(Request $request)
    {
        $term = $request->get('term');
        $limit = $request->get('limit', 10);

        if (!$term) {
            return response()->json([
                'success' => false,
                'message' => 'Arama terimi gerekli'
            ], 400);
        }

        $blogs = Blog::published()
                    ->search($term)
                    ->limit($limit)
                    ->get();

        return response()->json([
            'success' => true,
            'data' => $blogs,
            'count' => $blogs->count()
        ]);
    }

    /**
     * Blog istatistikleri (Admin dashboard için)
     */
    public function getStats()
    {
        $stats = [
            'total' => Blog::count(),
            'published' => Blog::where('status', 'published')->count(),
            'draft' => Blog::where('status', 'draft')->count(),
            'archived' => Blog::where('status', 'archived')->count(),
            'featured' => Blog::where('featured', true)->count(),
            'total_views' => Blog::sum('views'),
            'most_viewed' => Blog::orderBy('views', 'desc')->first(),
            'recent_blogs' => Blog::orderBy('created_at', 'desc')->take(5)->get()
        ];

        return response()->json([
            'success' => true,
            'data' => $stats
        ]);
    }

    /**
     * Bulk actions (Admin için)
     */
    public function bulkAction(Request $request)
    {
        $request->validate([
            'action' => 'required|in:publish,draft,archive,delete,feature,unfeature',
            'blog_ids' => 'required|array',
            'blog_ids.*' => 'exists:blogs,id'
        ]);

        $blogs = Blog::whereIn('id', $request->blog_ids);
        $action = $request->action;
        $count = 0;

        switch ($action) {
            case 'publish':
                $count = $blogs->update([
                    'status' => 'published',
                    'published_at' => now()
                ]);
                break;

            case 'draft':
                $count = $blogs->update(['status' => 'draft']);
                break;

            case 'archive':
                $count = $blogs->update(['status' => 'archived']);
                break;

            case 'feature':
                $count = $blogs->update(['featured' => true]);
                break;

            case 'unfeature':
                $count = $blogs->update(['featured' => false]);
                break;

            case 'delete':
                // Görselleri de sil
                $blogsToDelete = $blogs->get();
                foreach ($blogsToDelete as $blog) {
                    if ($blog->image) {
                        Storage::delete('public/blog_images/' . $blog->image);
                    }
                }
                $count = $blogs->delete();
                break;
        }

        return response()->json([
            'success' => true,
            'message' => "{$count} blog için işlem tamamlandı!",
            'count' => $count
        ]);
    }
}

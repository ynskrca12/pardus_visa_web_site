<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'keywords',
        'status',
        'views',
        'featured',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'featured' => 'boolean',
        'views' => 'integer'
    ];

    // Slug otomatik oluşturma
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Yayınlanmış blogları getir
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now())
                    ->orderBy('published_at', 'desc');
    }

    // Öne çıkan blogları getir
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    // Görüntülenme sayısını artır
    public function incrementViews()
    {
        $this->increment('views');
    }

    // Yayınlanma tarihini formatla
    public function getFormattedPublishedAtAttribute()
    {
        return $this->published_at ? $this->published_at->format('d M Y') : null;
    }

    // Kısa açıklama yoksa content'ten al
    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }

        return Str::limit(strip_tags($this->content), 150);
    }

    // Görsel URL'si
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/blog_images/' . $this->image);
        }

        return asset('images/default-blog.jpg');
    }

    // Reading time hesaplama (ortalama 200 kelime/dakika)
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $readingTime = ceil($wordCount / 200);

        return $readingTime . ' dk okuma';
    }

    // Arama scope'u
    public function scopeSearch($query, $term)
    {
        return $query->where(function($q) use ($term) {
            $q->where('title', 'like', '%' . $term . '%')
              ->orWhere('content', 'like', '%' . $term . '%')
              ->orWhere('excerpt', 'like', '%' . $term . '%')
              ->orWhere('keywords', 'like', '%' . $term . '%');
        });
    }

    // Status scope'ları
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopeArchived($query)
    {
        return $query->where('status', 'archived');
    }

    // Popüler bloglar (view sayısına göre)
    public function scopePopular($query, $limit = 10)
    {
        return $query->orderBy('views', 'desc')->limit($limit);
    }

    // Son bloglar
    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('created_at', 'desc')->limit($limit);
    }

    // İlgili bloglar (benzer keyword'lere sahip)
    public function getRelatedBlogs($limit = 4)
    {
        if (!$this->keywords) {
            return collect([]);
        }

        $keywords = explode(',', $this->keywords);
        $keywords = array_map('trim', $keywords);

        return Blog::published()
                  ->where('id', '!=', $this->id)
                  ->where(function($query) use ($keywords) {
                      foreach ($keywords as $keyword) {
                          $query->orWhere('keywords', 'like', '%' . $keyword . '%');
                      }
                  })
                  ->limit($limit)
                  ->get();
    }

    // Blog status badge rengi
    public function getStatusBadgeAttribute()
    {
        switch ($this->status) {
            case 'published':
                return 'success';
            case 'draft':
                return 'warning';
            case 'archived':
                return 'secondary';
            default:
                return 'light';
        }
    }

    // Blog status adı
    public function getStatusNameAttribute()
    {
        switch ($this->status) {
            case 'published':
                return 'Yayınlanmış';
            case 'draft':
                return 'Taslak';
            case 'archived':
                return 'Arşivlenmiş';
            default:
                return 'Bilinmiyor';
        }
    }

    // URL oluşturma
    public function getUrlAttribute()
    {
        return route('blog.show', $this->slug);
    }

    // Admin URL oluşturma
    public function getAdminUrlAttribute()
    {
        return route('admin.blogs.edit', $this->id);
    }

    // SEO title (meta_title varsa onu, yoksa title'ı kullan)
    public function getSeoTitleAttribute()
    {
        return $this->meta_title ?: $this->title;
    }

    // SEO description (meta_description varsa onu, yoksa excerpt'i kullan)
    public function getSeoDescriptionAttribute()
    {
        return $this->meta_description ?: $this->excerpt;
    }
}

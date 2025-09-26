@extends('layouts.app')

@section('title', $blog->meta_title ?: $blog->title)
@section('meta_description', $blog->meta_description ?: $blog->excerpt)
@section('keywords', $blog->keywords)

@section('content')

<!-- Hero Section -->
<div class="hero-wrap" style="background-image: url('{{ $blog->image_url }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <h1 class="mb-4 bread">{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Content -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate order-md-last">
                <!-- Blog Meta -->
                {{-- <div class="blog-meta mb-4 p-3">
                    <div class="d-flex align-items-center">
                        <div class="mr-3">
                            <i class="icon-calendar mr-2"></i>{{ \Carbon\Carbon::parse($blog->published_at)->locale('tr')->translatedFormat('d F Y') }}                        </div>
                        <div class="mr-3">
                            <i class="icon-clock-o mr-2"></i>{{ $blog->reading_time }}
                        </div>
                        <div>
                            <i class="icon-eye mr-2"></i>{{ $blog->views }} görüntülenme
                        </div>
                    </div>
                </div> --}}

                <!-- Blog Content -->
                <div class="blog-content">
                    {!! $blog->content !!}
                </div>

                <!-- Tags -->
                @if($blog->keywords)
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        @foreach(explode(',', $blog->keywords) as $tag)
                        <a href="{{ route('blog.index', ['search' => trim($tag)]) }}" class="tag-cloud-link">{{ trim($tag) }}</a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 sidebar ">

                  <div class="contact-card" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                    <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                        <i class="icon-headphones mr-2" style="color: #2c3e50;"></i>Uzman Desteği
                    </h5>
                    <div class="contact-methods">
                        <div class="contact-item mb-3 py-3" style="">
                            <div class="d-flex align-items-center">
                                <i class="icon-phone mr-3" style="color: #2c3e50; font-size: 1.3em;"></i>
                                <div>
                                    <strong style="color: #2c3e50;"> (0212) 211 52 34</strong>
                                    <small class="d-block text-muted">7/24 Acil Destek</small>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item mb-3 py-3" style="">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope mr-3" style="color: #2c3e50; font-size: 1.3em;"></i>
                                <div>
                                    <strong style="color: #2c3e50;">info@pardusvize.com</strong>
                                    <small class="d-block text-muted">E-posta Desteği</small>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item py-3" style="">
                            <div class="d-flex align-items-center">
                                <i class="icon-map-pin mr-4" style="color: #2c3e50; font-size: 1.3em;"></i>
                                <div>
                                    <strong style="color: #2c3e50;">Kuştepe, Mecidiyeköy Yolu Cd. No:16, Daire:4, 34381 Şişli/İstanbul</strong>
                                    <small class="d-block text-muted">Merkez Ofisimizi Ziyaret Edin</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Posts -->
                <div class="sidebar-box ftco-animate">
                    <h3>Son Yazılar</h3>
                    @php
                        $recentBlogs = \App\Models\Blog::published()->where('id', '!=', $blog->id)->take(3)->get();
                    @endphp
                    @foreach($recentBlogs as $recent)
                    <div class="block-21 mb-4 d-flex">
                        <a href="{{ route('blog.show', $recent->slug) }}" class="blog-img mr-4"
                           style="background-image: url('{{ $recent->image_url }}');"></a>
                        <div class="text">
                            <h3 class="heading">
                                <a href="{{ route('blog.show', $recent->slug) }}">{{ Str::limit($recent->title, 60) }}</a>
                            </h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($recent->published_at)->locale('tr')->translatedFormat('d F Y') }}</div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>




            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
@if($relatedBlogs->count() > 0)
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-3">İlgili Yazılar</h2>
                <p>Bu konuda sizi ilgilendirebilecek diğer blog yazılarımız</p>
            </div>
        </div>

        <div class="row">
            @foreach($relatedBlogs as $related)
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="{{ route('blog.show', $related->slug) }}" class="block-20"
                       style="background-image: url('{{ $related->image_url }}');"></a>
                    <div class="text mt-3">
                        <h3 class="heading">
                            <a href="{{ route('blog.show', $related->slug) }}">{{ Str::limit($related->title, 50) }}</a>
                        </h3>
                        <p>{{ Str::limit($related->excerpt, 80) }}</p>
                        <p><a href="{{ route('blog.show', $related->slug) }}" class="btn btn-primary">Devamını Oku</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

@push('styles')
<style>
.blog-meta {
    border-left: 4px solid #007bff;
}

.blog-content h2,
.blog-content h3 {
    color: #2c3e50;
    margin: 30px 0 20px;
}

.blog-content ul,
.blog-content ol {
    margin: 20px 0;
    padding-left: 25px;
}

.share-section .btn {
    border-radius: 20px;
}

.sidebar-box {
    background: white;
    padding: 25px;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.block-21 .blog-img {
    width: 80px;
    height: 60px;
    background-size: cover;
    background-position: center;
    border-radius: 5px;
}

.categories li {
    border-bottom: 1px solid #f1f1f1;
    padding: 10px 0;
}

.categories li:last-child {
    border-bottom: none;
}

.tagcloud .tag-cloud-link {
    display: inline-block;
    background: #f8f9fa;
    color: #495057;
    padding: 5px 12px;
    margin: 2px;
    border-radius: 15px;
    font-size: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.tagcloud .tag-cloud-link:hover {
    background: #007bff;
    color: white;
    text-decoration: none;
}
</style>
@endpush

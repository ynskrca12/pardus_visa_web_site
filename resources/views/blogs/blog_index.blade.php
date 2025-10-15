@extends('layouts.app')

@section('title', 'Blog - Vize Rehberi ve Seyahat İpuçları | Travellines Turizm')
@section('meta_description', 'Vize başvuru süreçleri, seyahat rehberleri ve güncel vize haberleri. Uzman ekibimizden faydalı bilgiler ve ipuçları.')
@section('keywords', 'vize rehberi, seyahat blog, vize haberleri, ülke rehberleri, seyahat ipuçları, vize başvuru rehberi')

@section('content')

    <!-- Hero Section -->
    <div class="hero-wrap" style="background-image: url('{{ asset('images/visa_banner.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}">Anasayfa</a></span>
                            <span>Blog</span>
                        </p>
                        <h1 class="mb-4 bread">Vize Rehberi & Blog</h1>
                        <p class="mb-4">Vize başvuru süreçleri, seyahat rehberleri ve güncel bilgiler</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All Blogs Section -->
    <section class="ftco-section {{ $featuredBlogs->count() > 0 ? '' : 'bg-light' }}">
        <div class="container">
            @if(request('search'))
            <div class="row mb-4">
                <div class="col-12">
                    <div class="alert alert-info">
                        <i class="icon-search mr-2"></i>
                        "<strong>{{ request('search') }}</strong>" için {{ $blogs->total() }} sonuç bulundu.
                        <a href="{{ route('blog.index') }}" class="btn btn-sm btn-outline-info ml-3">Aramayı Temizle</a>
                    </div>
                </div>
            </div>
            @endif

        <div class="row d-flex align-items-stretch">
            @forelse($blogs as $blog)
            <div class="col-md-4 d-flex ftco-animate align-items-stretch">
                <div class="blog-entry d-flex flex-column w-100" style="border:1px solid #dcdcdc;border-radius:12px;">
                    <a href="{{ route('blog.show', $blog->slug) }}" class="block-20"
                    style="background-image: url('{{ $blog->image_url }}'); height:220px; background-size:cover; background-position:center;
                      border-top-left-radius: 12px; border-top-right-radius: 12px;">
                    </a>

                    <div class="text mt-3 d-flex flex-column flex-grow-1" style="padding:10px 15px;">
                        <div class="posted mb-3 d-flex">
                            <div class="desc pl-3">
                                <span>{{ \Carbon\Carbon::parse($blog->published_at)->locale('tr')->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>

                        <h3 class="heading mt-3">
                            <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                        </h3>

                        <p class="mb-0">{{ $blog->excerpt }}</p>

                        <p class="mt-auto pt-3">
                            <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary bg-white" style="color: #2c3e50;border-color:#2c3e50;">Devamını Oku</a>
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <!-- ... -->
            @endforelse
        </div>


            <!-- Pagination -->
            @if($blogs->hasPages())
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if ($blogs->onFirstPage())
                                <li class="disabled"><span>&lt;</span></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}">&lt;</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                @if ($page == $blogs->currentPage())
                                    <li class="active"><span>{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
            @if ($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}">&gt;</a></li>
                            @else
                                <li class="disabled"><span>&gt;</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>

@endsection

@push('styles')
<style>
    .featured-blog {
        position: relative;
    }

    .featured-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: linear-gradient(45deg, #f8b600, #ff6b35);
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        z-index: 2;
        box-shadow: 0 2px 10px rgba(248, 182, 0, 0.3);
    }

    .featured-badge i {
        margin-right: 5px;
    }

    .search-form .form-group {
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-radius: 50px;
        overflow: hidden;
        background: white;
    }

    .search-form input {
        border: none;
        padding: 15px 25px;
        border-radius: 50px 0 0 50px;
    }

    .search-form button {
        border-radius: 0 50px 50px 0;
        padding: 15px 25px;
        border: none;
    }

    .blog-entry {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        background: white;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .blog-entry:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .block-20 {
        height: 200px;
        position: relative;
        overflow: hidden;
    }

    .desc span {
        font-size: 13px;
        color: #666;
    }

    .img.author {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .heading a {
        color: #333;
        text-decoration: none;
    }

    .heading a:hover {
        color: #007bff;
    }

    .alert-info {
        border-left: 4px solid #17a2b8;
    }

    .alert-warning {
        border-left: 4px solid #ffc107;
    }

    .btn-outline-info:hover {
        background: #17a2b8;
        border-color: #17a2b8;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .col-md-3 {
            margin-bottom: 30px;
        }

        .search-form input {
            padding: 12px 20px;
        }

        .search-form button {
            padding: 12px 20px;
        }

        .featured-badge {
            top: 10px;
            right: 10px;
            padding: 3px 8px;
            font-size: 10px;
        }
    }

    /* Animation on scroll */
    .ftco-animate {
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Stagger animation for blog entries */
    .blog-entry:nth-child(1) { animation-delay: 0.1s; }
    .blog-entry:nth-child(2) { animation-delay: 0.2s; }
    .blog-entry:nth-child(3) { animation-delay: 0.3s; }
    .blog-entry:nth-child(4) { animation-delay: 0.4s; }
    .blog-entry:nth-child(5) { animation-delay: 0.5s; }
    .blog-entry:nth-child(6) { animation-delay: 0.6s; }
    .blog-entry:nth-child(7) { animation-delay: 0.7s; }
    .blog-entry:nth-child(8) { animation-delay: 0.8s; }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Search form auto-submit on enter
    $('.search-form input').on('keypress', function(e) {
        if (e.which === 13) {
            $(this).closest('form').submit();
        }
    });

    // Clear search functionality
    if ($('.search-form input').val()) {
        $('.search-form').append('<button type="button" class="btn btn-secondary ml-2 clear-search">Temizle</button>');
    }

    $(document).on('click', '.clear-search', function() {
        $('.search-form input').val('');
        $('.search-form').submit();
    });

    // Smooth scroll to search results
    if (window.location.search.includes('search=')) {
        $('html, body').animate({
            scrollTop: $('.ftco-section:not(.bg-light)').offset().top - 100
        }, 1000);
    }

    // Lazy loading for images
    $('img').each(function() {
        $(this).on('load', function() {
            $(this).addClass('loaded');
        });
    });

    // Blog entry click tracking (optional analytics)
    $('.blog-entry a').on('click', function() {
        const blogTitle = $(this).closest('.blog-entry').find('.heading a').text();
        // Google Analytics tracking example
        // gtag('event', 'blog_click', {
        //     'blog_title': blogTitle
        // });
    });
});
</script>
@endpush

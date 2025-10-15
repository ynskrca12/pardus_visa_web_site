@extends('layouts.app')

@section('title', 'Profesyonel Vize Danışmanlığı | Travellines Turizm')

@section('content')
    <!-- Hero Slider -->
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{ asset('images/bg_1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate text-center">
                        <div class="text mb-5 pb-3">
                            <h1 class="mb-3">Kurumsal Seyahat ve Vize Hizmetleri</h1>
                            <h2>Profesyonel Ekibimiz ile Yanınızdayız</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{ asset('images/bg_2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate text-center">
                        <div class="text mb-5 pb-3">
                            <h1 class="mb-3">Vize & Uçak Bileti ve Konaklama Hizmetleri</h1>
                            <h2>Profesyonel Ekibimiz ile Yanınızdayız</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hakkımızda -->
    <section class="ftco-section ftc-no-pb ftc-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img d-flex justify-content-center align-items-center"
                     style="background-image: url({{ asset('images/img1.jpg') }});">
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section pt-md-5 pl-md-5 mb-5">
                        <span class="subheading">Pardus Turizm | Travellines</span>
                        <h2 class="mb-4">Neden Biz?</h2>
                        <p>20 yıllık tecrübemizle, dünyanın birçok ülkesine vize danışmanlığı hizmeti sunuyoruz.
                            Profesyonel ekibimizle evrak hazırlama, randevu alma ve süreç takibi aşamalarında
                            %100 destek veriyoruz.</p>
                        <p>Amacımız, seyahatinizin ilk adımı olan vize işlemlerinde süreci sizin için en kolay hale getirmek.</p>
                        <ul class="ftco-social d-flex">
                            <li class="ftco-animate"><a href="https://www.facebook.com/travellinesturizm"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/travellinesturizm/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hizmetler -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Hizmetlerimiz</span>
                    <h2 class="mb-4">Vize Sürecinde Yanınızdayız</h2>
                    <p>Profesyonel ekibimizle vize başvurularınızın her adımında size özel çözümler sunuyoruz.</p>
                </div>
            </div>
            <div class="row">
              {{-- @foreach($visaTypes as $visaType)
                <div class="col-md-3 mb-3 d-flex align-self-stretch ftco-animate">
                    <div class="service-card d-flex flex-column text-center p-4 shadow-sm">
                        <div class="icon mb-3">
                            <span class="flaticon-passport"></span>
                        </div>
                        <h3 class="heading mb-3">{{ $visaType['title'] }}</h3>
                        <p>{{ $visaType['description_summary'] }}</p>
                        <a href="{{ route($visaType['route']) }}" class="btn btn-sm btn-outline-detail mt-auto">Detaylı Bilgi</a>
                    </div>
                </div>
              @endforeach --}}
              @foreach($visaTypes as $visaType)
                <div class="col-lg-4 col-md-6 ftco-animate mb-4">
                    <div class="visa-card" style="background: white; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                        <div class="visa-image" style="position: relative; height: 200px; overflow: hidden;">
                            <img src="{{ asset($visaType['image']) }}" alt="{{ $visaType['title'] }}"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            <div class="visa-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(248,182,0,0.8), rgba(248,182,0,0.6)); opacity: 0; transition: opacity 0.3s ease;">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <a href="{{ route($visaType['route']) }}" class="btn btn-light btn-lg">
                                        <i class="icon-eye mr-2"></i>İncele
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="visa-content p-4" style="flex: 1; display: flex; flex-direction: column;">
                            <h3 class="mb-3" style="color: #333; font-weight: 600;">
                                {{ $visaType['title'] }}
                            </h3>
                            <p class="mb-3 text-muted" style="font-size: 14px; line-height: 1.6;">
                                {{ $visaType['description'] }}
                            </p>

                            <div class="visa-details mb-3">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="detail-item">
                                            <i class="fas fa-calendar" style="color: #2c3e50; font-size: 1.2em;"></i>
                                            <small class="d-block mt-1 text-muted">{{ $visaType['duration'] }}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="detail-item">
                                            <i class="icon-calendar" style="color: #2c3e50; font-size: 1.2em;"></i>
                                            <small class="d-block mt-1 text-muted">{{ $visaType['processing_time'] }}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="detail-item">
                                            <i class="icon-check" style="color: #2c3e50; font-size: 1.2em;"></i>
                                            <small class="d-block mt-1 text-muted">{{ $visaType['validity'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="visa-features mb-4" style="flex: 1;">
                                @foreach($visaType['features'] as $index => $feature)
                                    @if($index < 3)
                                    <span class="feature-badge" style="display: inline-block; background: #f8f9fa; color: #666; padding: 4px 10px; border-radius: 15px; font-size: 12px; margin: 2px;">
                                        <i class="icon-check-circle mr-1" style="color: #28a745;"></i>{{ $feature }}
                                    </span>
                                    @endif
                                @endforeach
                                @if(count($visaType['features']) > 3)
                                <span class="text-muted" style="font-size: 12px;">+{{ count($visaType['features']) - 3 }} özellik</span>
                                @endif
                            </div>

                            <div class="text-center mt-auto">
                                <a href="{{ route($visaType['route']) }}" class="btn btn-primary btn-block" style="background: #2c3e50; border: none; padding: 12px; border-radius: 6px; font-weight: 500;">
                                    Detaylı Bilgi Al <i class="icon-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Özel CSS -->
    <style>
        .service-card {
            background: #fff;
            border-radius: 12px;
            transition: all 0.3s ease-in-out;
            border: 1px solid #eee;
            min-height: 100%; /* tüm kartlar eşit yükseklikte */
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
            border-color: #2c3e50;
        }
        .service-card .icon {
            font-size: 40px;
            color: #2c3e50;
            transition: all 0.3s ease;
        }
        .service-card h3 {
            font-weight: 600;
        }
        .service-card p {
            font-size: 14px;
            color: #555;
            flex-grow: 1; /* açıklama alanı esneyip boşluğu doldursun */
        }
        .btn-outline-detail{
            color: #2c3e50;
            background-color: transparent;
            background-image: none;
            border-color: #2c3e50;
        }
    </style>

<section class="ftco-section ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Mutlu Müşteri</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>ülke</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>Yıllık Tecrübe</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Başarılı Vize</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <div class="container">
        <div class="row d-flex align-items-stretch my-4">
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
    </div>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection

<style>
      .btn-primary:hover {
        background: #fff !important;
        border-color: #2c3e50 !important;
        color: #2c3e50 !important;
    }
</style>

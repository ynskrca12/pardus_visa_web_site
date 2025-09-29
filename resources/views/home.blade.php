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
                            <h1 class="mb-3">Profesyonel Vize Danışmanlığı</h1>
                            <h2>30+ Ülke için Güvenilir Çözüm</h2>
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
                            <h1 class="mb-3">Hızlı & Güvenli Vize İşlemleri</h1>
                            <h2>Yanınızdayız</h2>
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
                <!-- 1 -->
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="service-card d-flex flex-column text-center p-4 shadow-sm">
                        <div class="icon mb-3">
                            <span class="flaticon-passport"></span>
                        </div>
                        <h3 class="heading mb-3">Schengen Vizesi</h3>
                        <p>Avrupa seyahatleriniz için eksiksiz evrak hazırlığı ve hızlı başvuru desteği.</p>
                        <a href="#" class="btn btn-sm btn-outline-detail mt-auto">Detaylı Bilgi</a>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="service-card d-flex flex-column text-center p-4 shadow-sm">
                        <div class="icon mb-3">
                            <span class="flaticon-airplane"></span>
                        </div>
                        <h3 class="heading mb-3">Amerika Vizesi</h3>
                        <p>ABD turistik, öğrenci ve iş vizelerinde profesyonel danışmanlık ve randevu desteği.</p>
                        <a href="#" class="btn btn-sm btn-outline-detail mt-auto">Detaylı Bilgi</a>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="service-card d-flex flex-column text-center p-4 shadow-sm">
                        <div class="icon mb-3">
                            <span class="flaticon-global"></span>
                        </div>
                        <h3 class="heading mb-3">Asya & Uzak Doğu</h3>
                        <p>Çin, Japonya, Dubai ve diğer ülkeler için güvenilir ve hızlı işlem desteği.</p>
                        <a href="#" class="btn btn-sm btn-outline-detail mt-auto">Detaylı Bilgi</a>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="service-card d-flex flex-column text-center p-4 shadow-sm">
                        <div class="icon mb-3">
                            <span class="flaticon-support"></span>
                        </div>
                        <h3 class="heading mb-3">Danışmanlık</h3>
                        <p>Tüm süreç boyunca birebir takip, evrak kontrolü ve profesyonel yönlendirme.</p>
                        <a href="#" class="btn btn-sm btn-outline-detail mt-auto">Detaylı Bilgi</a>
                    </div>
                </div>
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

    <!-- Müşteri Yorumları -->
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Müşteri Yorumları</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5">
                                <div class="text text-center">
                                    <div class="team-img mb-3 d-flex justify-content-center">
                                        <img src="{{ asset('images/person1.jpg') }}" class="img-fluid rounded-circle" alt="Mehmet Yılmaz" style="width: 150px; height: 150px; object-fit: cover;">
                                    </div>
                                    <p class="mb-4">Schengen vizem için çok hızlı destek aldım. Evraklarımı kontrol edip
                                        süreci kolaylaştırdılar. Teşekkürler!</p>
                                    <p class="name">Ahmet K.</p>
                                    <span class="position">Müşteri</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5">
                                <div class="text text-center">
                                    <div class="team-img mb-3 d-flex justify-content-center">
                                        <img src="{{ asset('images/person1.jpg') }}" class="img-fluid rounded-circle" alt="Mehmet Yılmaz" style="width: 150px; height: 150px; object-fit: cover;">
                                    </div>
                                    <p class="mb-4">ABD öğrenci vizemde her aşamada yanımda oldular. Profesyonel bir ekip!</p>
                                    <p class="name">Elif D.</p>
                                    <span class="position">Müşteri</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5">
                                <div class="text text-center">
                                    <div class="team-img mb-3 d-flex justify-content-center">
                                        <img src="{{ asset('images/person1.jpg') }}" class="img-fluid rounded-circle" alt="Mehmet Yılmaz" style="width: 150px; height: 150px; object-fit: cover;">
                                    </div>
                                    <p class="mb-4">Dubai vizem için hızlıca işlem yaptılar, 3 günde vizem çıktı.</p>
                                    <p class="name">Murat Y.</p>
                                    <span class="position">Müşteri</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog & Duyurular -->
    {{-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <div class="container">
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

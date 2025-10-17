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
    <!-- Hizmetler bölümünden SONRA, Counter bölümünden ÖNCE ekle -->

<!-- Kurumsal Seyahat -->
<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mt-3 ftco-animate">
                <img src="{{ asset('images/blog_images/corporate_travel_blog_img-min.jpg') }}" class="img-fluid rounded shadow" alt="Kurumsal Seyahat Yönetimi">
            </div>
            <div class="col-md-6 mt-3 ftco-animate pl-md-5">
                <span class="subheading">Şirketiniz İçin</span>
                <h2 class="mb-4">Kurumsal Seyahat Yönetimi</h2>
                <p class="mb-4">İş seyahatlerinizi profesyonel ekibimizle yönetin. Şirketinize özel fiyatlandırma, öncelikli rezervasyon ve 7/24 destek hizmetlerimizle iş seyahatlerinizi kolaylaştırın.</p>

                <div class="row mb-4">
                    <div class="col-6">
                        <div class="feature-item mb-3">
                            <i class="fas fa-briefcase text-primary mr-2"></i>
                            <strong>İş Seyahatleri</strong>
                            <p class="text-muted mb-0">Toplantı ve organizasyon desteği</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item mb-3">
                            <i class="fas fa-users text-primary mr-2"></i>
                            <strong>Grup Rezervasyonları</strong>
                            <p class="text-muted mb-0">Ekip seyahatleri için özel fiyat</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item mb-3">
                            <i class="fas fa-chart-line text-primary mr-2"></i>
                            <strong>Raporlama</strong>
                            <p class="text-muted mb-0">Detaylı harcama raporları</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item mb-3">
                            <i class="fas fa-headset text-primary mr-2"></i>
                            <strong>7/24 Destek</strong>
                            <p class="text-muted mb-0">Kesintisiz müşteri hizmeti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Uçak Bileti & Konaklama -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Seyahat Çözümlerimiz</span>
                <h2 class="mb-4">Uçak Bileti ve Konaklama Hizmetleri</h2>
                <p>En uygun fiyatlı uçak biletleri ve dünya genelinde otel rezervasyonları için tek adres</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="service-box bg-white p-4 rounded shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-plane-departure fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Uçak Bileti</h4>
                    <p class="mb-3">500+ havayolu şirketi ile dünya genelinde en uygun fiyatlı uçak biletleri. Online rezervasyon ve anında bilet teslimi.</p>
                    <ul class="list-unstyled text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>En İyi Fiyat Garantisi</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Anında Onay</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Esnek İptal Seçenekleri</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>7/24 Müşteri Desteği</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="service-box bg-white p-4 rounded shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-hotel fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Otel Rezervasyonu</h4>
                    <p class="mb-3">Dünya çapında 1 milyon+ otel seçeneği. Butik otellerden lüks resort'lara kadar geniş konaklama ağımızla hizmetinizdeyiz.</p>
                    <ul class="list-unstyled text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>1M+ Otel Seçeneği</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Gerçek Müşteri Yorumları</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Ücretsiz İptal</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>En İyi Fiyat</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="service-box bg-white p-4 rounded-3 shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-suitcase-rolling fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Paket Turlar</h4>
                    <p class="mb-3">Uçak + Otel + Transfer dahil ekonomik paket turlar. Popüler destinasyonlara özel fırsatlar ve grup indirimleri.</p>
                    <ul class="list-unstyled text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>All Inclusive Paketler</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Havalimanı Transferi</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Rehber Eşliğinde</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Grup İndirimleri</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Neden Bizi Seçmelisiniz -->
  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5">
              <div class="col-md-8 text-center heading-section ftco-animate">
                  <span class="subheading">Avantajlarımız</span>
                  <h2 class="mb-4">Neden Pardus Turizm?</h2>
                  <p>20 yıllık deneyimimiz ve güçlü iş ortaklıklarımızla size en iyi hizmeti sunuyoruz</p>
              </div>
          </div>

          <div class="row">
              <div class="col-md-3 ftco-animate text-center mb-4">
                  <div class="advantage-box p-4">
                      <div class="icon-circle mb-3">
                          <i class="fas fa-shield-alt fa-2x text-white"></i>
                      </div>
                      <h5>Güvenli Ödeme</h5>
                      <p class="text-muted">SSL sertifikalı güvenli ödeme altyapısı</p>
                  </div>
              </div>

              <div class="col-md-3 ftco-animate text-center mb-4">
                  <div class="advantage-box p-4">
                      <div class="icon-circle mb-3">
                          <i class="fas fa-tags fa-2x text-white"></i>
                      </div>
                      <h5>En İyi Fiyat</h5>
                      <p class="text-muted">Fiyat farkı iade garantisi</p>
                  </div>
              </div>

              <div class="col-md-3 ftco-animate text-center mb-4">
                  <div class="advantage-box p-4">
                      <div class="icon-circle mb-3">
                          <i class="fas fa-clock fa-2x text-white"></i>
                      </div>
                      <h5>7/24 Destek</h5>
                      <p class="text-muted">Her zaman yanınızdayız</p>
                  </div>
              </div>

              <div class="col-md-3 ftco-animate text-center mb-4">
                  <div class="advantage-box p-4">
                      <div class="icon-circle mb-3">
                          <i class="fas fa-award fa-2x text-white"></i>
                      </div>
                      <h5>20 Yıl Deneyim</h5>
                      <p class="text-muted">Sektörde güven ve kalite</p>
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
                     style="background-image: url({{ asset('images/img2.jpg') }});">
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
                          style="background-image: url('{{ asset('images/blog_images/' . $blog->image) }}'); height: 220px; background-size: cover; background-position: center; border-top-left-radius: 12px; border-top-right-radius: 12px;">
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

  <!-- Özel CSS -->
    <style>
        .service-card {
            background: #fff;
            border-radius: 12px;
            transition: all 0.3s ease-in-out;
            border: 1px solid #eee;
            min-height: 100%;
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
            flex-grow: 1;
        }
        .btn-outline-detail{
            color: #2c3e50;
            background-color: transparent;
            background-image: none;
            border-color: #2c3e50;
        }
    </style>

<style>
.service-box {
    transition: all 0.3s ease;
}

.service-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15) !important;
}

.icon-circle {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.advantage-box {
    transition: all 0.3s ease;
}

.advantage-box:hover {
    transform: scale(1.05);
}

.destination-card {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    cursor: pointer;
}

.destination-card img {
    transition: transform 0.5s ease;
    height: 250px;
    object-fit: cover;
    width: 100%;
}

.destination-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 20px;
    color: white;
}

.destination-overlay h4 {
    color: white;
    font-weight: 600;
    margin-bottom: 5px;
}

.destination-card:hover img {
    transform: scale(1.1);
}

.feature-item i {
    font-size: 1.2em;
}

@media (max-width: 768px) {
    .destination-card img {
        height: 200px;
    }
}
</style>

<style>
      .btn-primary:hover {
        background: #fff !important;
        border-color: #2c3e50 !important;
        color: #2c3e50 !important;
    }
</style>

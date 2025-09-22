@extends('layouts.app')

@section('title', 'Vize Türleri | Profesyonel Vize Danışmanlığı')

@section('content')
    <div class="hero-wrap" style="background-image: url('images/visa_banner.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-10 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}">Ana Sayfa</a></span>
                            <span>Vize Türleri</span>
                        </p>
                        <h1 class="mb-4 bread">Profesyonel Vize Hizmetleri</h1>
                        <p class="mb-0" style="font-size: 18px; color: rgba(255,255,255,0.9);">
                            25 yıllık deneyimimizle güvenli seyahat çözümleri sunuyoruz
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ana Tanıtım Bölümü -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <div class="heading-section ftco-animate mb-5">
                        <span class="subheading">Vize Danışmanlığı</span>
                        <h2 class="mb-4">Hayalinizdeki Seyahati Gerçekleştirin</h2>
                        <p class="lead">
                            Uzman kadromuz ile tüm vize türlerinde %98 başarı oranı ile hizmet veriyoruz.
                            Seyahat planlarınızı güvenle bize emanet edin.
                        </p>
                    </div>
                </div>
            </div>

            <!-- İstatistikler -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #8d703b; font-size: 3em; font-weight: bold;">15000+</span>
                            <p>Başarılı Vize</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #8d703b; font-size: 3em; font-weight: bold;">98%</span>
                            <p>Başarı Oranı</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #8d703b; font-size: 3em; font-weight: bold;">25</span>
                            <p>Yıl Deneyim</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #8d703b; font-size: 3em; font-weight: bold;">50+</span>
                            <p>Ülke Vizesi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vize Türleri -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Vize Çeşitlerimiz</span>
                    <h2 class="mb-3">Size Özel Vize Çözümleri</h2>
                    <p>Her seyahat amacına uygun, özenle hazırlanmış vize paketlerimizi keşfedin</p>
                </div>
            </div>

            <div class="row">
                @foreach($visaTypes as $visaType)
                <div class="col-lg-4 col-md-6 ftco-animate mb-4">
                    <div class="visa-card" style="background: white; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                        <div class="visa-image" style="position: relative; height: 200px; overflow: hidden;">
                            <img src="images/tourist_visa.jpg" alt="{{ $visaType['title'] }}"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            <div class="visa-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(248,182,0,0.8), rgba(248,182,0,0.6)); opacity: 0; transition: opacity 0.3s ease;">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <a href="{{ route($visaType['route']) }}" class="btn btn-light btn-lg">
                                        <i class="icon-eye mr-2"></i>İncele
                                    </a>
                                </div>
                            </div>
                            <div class="visa-price" style="position: absolute; top: 15px; right: 15px; background: #8d703b; color: white; padding: 8px 15px; border-radius: 20px; font-weight: bold;">
                                ${{ $visaType['price'] }}
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
                                            <i class="icon-clock" style="color: #8d703b; font-size: 1.2em;"></i>
                                            <small class="d-block mt-1 text-muted">{{ $visaType['duration'] }}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="detail-item">
                                            <i class="icon-calendar" style="color: #8d703b; font-size: 1.2em;"></i>
                                            <small class="d-block mt-1 text-muted">{{ $visaType['processing_time'] }}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="detail-item">
                                            <i class="icon-check" style="color: #8d703b; font-size: 1.2em;"></i>
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
                                <a href="{{ route($visaType['route']) }}" class="btn btn-primary btn-block" style="background: #8d703b; border: none; padding: 12px; border-radius: 6px; font-weight: 500;">
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


    <!-- Neden Biz Bölümü -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Neden Bizi Seçmelisiniz</span>
                    <h2 class="mb-3">Güvenin ve Deneyimin Adresi</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="service-item p-4" style="border: 2px solid #f8f9fa; border-radius: 10px; height: 100%;">
                        <div class="service-icon mb-3">
                            <span style="font-size: 3em; color: #8d703b;" class="icon-shield"></span>
                        </div>
                        <h4 class="mb-3">Güvenilir Hizmet</h4>
                        <p class="text-muted">25 yıllık sektör deneyimi ile güvenilir ve profesyonel hizmet anlayışımızla yanınızdayız.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="service-item p-4" style="border: 2px solid #f8f9fa; border-radius: 10px; height: 100%;">
                        <div class="service-icon mb-3">
                            <span style="font-size: 3em; color: #8d703b;" class="icon-headphones"></span>
                        </div>
                        <h4 class="mb-3">7/24 Destek</h4>
                        <p class="text-muted">Vize sürecinizin her aşamasında uzman ekibimiz size destek olmaya hazır. Sorularınızı yanıtlıyoruz.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="service-item p-4" style="border: 2px solid #f8f9fa; border-radius: 10px; height: 100%;">
                        <div class="service-icon mb-3">
                            <span style="font-size: 3em; color: #8d703b;" class="icon-rocket"></span>
                        </div>
                        <h4 class="mb-3">Hızlı İşlem</h4>
                        <p class="text-muted">Optimize edilmiş süreçlerimiz sayesinde vize başvurunuzu en kısa sürede sonuçlandırıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Bölümü -->
    <section class="ftco-section" style="background:  #e09900; color: white;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2 class="mb-3 text-white">Vize Başvurunuz İçin Hemen Başlayın</h2>
                    <p class="mb-4" style="font-size: 18px; opacity: 0.9;">
                        Uzman kadromuzla ücretsiz ön değerlendirme almak için hemen iletişime geçin
                    </p>
                    <a href="#" class="btn btn-light btn-lg px-5 py-3" style="border-radius: 50px; font-weight: 500;">
                        <i class="icon-phone mr-2"></i>Ücretsiz Danışmanlık
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
    .visa-card:hover {
        transform: translateY(-5px);
    }
    .visa-card:hover .visa-overlay {
        opacity: 1;
    }
    .visa-card:hover img {
        transform: scale(1.1);
    }
    .service-item:hover {
        border-color: #8d703b;
        transform: translateY(-3px);
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background: #fff !important;
        border-color: #8d703b !important;
        color: #8d703b !important;
    }
    </style>
@endsection

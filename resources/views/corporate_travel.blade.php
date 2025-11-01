@extends('layouts.app')

@section('title', 'Kurumsal Seyahat Çözümleri | Uçak Bileti, Otel & Toplantı Organizasyonu')

@section('meta_description', 'Pardustur ile kurumsal seyahat yönetimi, uygun fiyatlı uçak bileti, otel rezervasyonu ve toplantı organizasyonu hizmetleri. 7/24 destek, özel indirimler ve esnek ödeme seçenekleri.')

@section('meta_keywords', 'kurumsal seyahat, iş seyahati, toplu uçak bileti, otel rezervasyonu, mice organizasyon, şirket uçak bileti, kurumsal otel anlaşmaları')

@section('content')
    <div class="hero-wrap" style="background-image: url('images/visa_banner.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-10 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}">Ana Sayfa</a></span>
                            <span>Kurumsal Seyahat</span>
                        </p>
                        <h1 class="mb-4 bread">Profesyonel Kurumsal Seyahat Yönetimi</h1>
                        <p class="mb-0" style="font-size: 18px; color: rgba(255,255,255,0.9);">
                            İş seyahatlerinizi optimize edin, maliyetleri düşürün, verimliliği artırın
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
                        <span class="subheading">Kurumsal Seyahat Hizmetleri</span>
                        <h2 class="mb-4">İş Seyahatlerinizde Güvenilir Çözüm Ortağınız</h2>
                        <p class="lead">
                            25 yıllık deneyimimiz ve sektördeki güçlü anlaşmalarımızla şirketinizin seyahat
                            ihtiyaçlarını tek noktadan yönetiyoruz. Uçak bileti, otel rezervasyonu, transfer
                            ve MICE organizasyonlarında %30'a varan tasarruf fırsatları.
                        </p>
                    </div>
                </div>
            </div>

            <!-- İstatistikler -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #2c3e50; font-size: 3em; font-weight: bold;">500+</span>
                            <p>Kurumsal Müşteri</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #2c3e50; font-size: 3em; font-weight: bold;">10000+</span>
                            <p>Yıllık Rezervasyon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #2c3e50; font-size: 3em; font-weight: bold;">%30</span>
                            <p>Maliyet Tasarrufu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center ftco-animate">
                    <div class="counter-wrap">
                        <div class="text">
                            <span class="ftco-number" style="color: #2c3e50; font-size: 3em; font-weight: bold;">7/24</span>
                            <p>Kesintisiz Destek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hizmet Kategorileri -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Hizmetlerimiz</span>
                    <h2 class="mb-3">Entegre Kurumsal Seyahat Çözümleri</h2>
                    <p>İş seyahatlerinizin tüm detaylarını profesyonel ekibimizle yönetin</p>
                </div>
            </div>

            <div class="row">
                <!-- Uçak Bileti -->
                <div class="col-lg-4 col-md-6 ftco-animate mb-4">
                    <div class="service-card" style="background: white; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                        <div class="service-image" style="position: relative; height: 220px; overflow: hidden;">
                            <img src="{{ asset('images/corporate/flight-booking.jpg') }}" alt="Kurumsal Uçak Bileti"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            <div class="service-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(44,62,80,0.85), rgba(52,73,94,0.75)); opacity: 0; transition: opacity 0.3s ease;">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <span class="badge badge-light" style="font-size: 16px; padding: 10px 20px;">En İyi Fiyat Garantisi</span>
                                </div>
                            </div>
                        </div>

                        <div class="service-content p-4" style="flex: 1; display: flex; flex-direction: column;">
                            <div class="service-icon mb-3">
                                <i class="fas fa-plane-departure" style="font-size: 2.5em; color: #2c3e50;"></i>
                            </div>
                            <h3 class="mb-3" style="color: #333; font-weight: 600; font-size: 1.5rem;">
                                Kurumsal Uçak Bileti
                            </h3>
                            <p class="mb-4 text-muted" style="font-size: 14px; line-height: 1.7;">
                                Tüm havayolları ile özel anlaşmalarımız sayesinde şirketinize özel fiyatlar,
                                esnek değişiklik hakları ve öncelikli müşteri hizmetleri.
                            </p>

                            <div class="service-features mb-4" style="flex: 1;">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Toplu rezervasyon indirimleri</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Esnek iptal ve değişiklik</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Online self-service portal</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Otomatik fatura ve raporlama</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">7/24 acil durum desteği</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="service-price mb-3 p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-size: 14px; color: #666;">Tasarruf oranı:</span>
                                    <span style="font-size: 20px; font-weight: bold; color: #2c3e50;">%20-35</span>
                                </div>
                            </div>

                            <div class="text-center mt-auto">
                                <a href="#contact-form" class="btn btn-primary btn-block scroll-link" style="background: #2c3e50; border: none; padding: 12px; border-radius: 6px; font-weight: 500;">
                                    Fiyat Teklifi Al <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Otel Rezervasyonu -->
                <div class="col-lg-4 col-md-6 ftco-animate mb-4">
                    <div class="service-card" style="background: white; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                        <div class="service-image" style="position: relative; height: 220px; overflow: hidden;">
                            <img src="{{ asset('images/corporate/hotel-booking.jpg') }}" alt="Kurumsal Otel Rezervasyonu"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            <div class="service-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(44,62,80,0.85), rgba(52,73,94,0.75)); opacity: 0; transition: opacity 0.3s ease;">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <span class="badge badge-light" style="font-size: 16px; padding: 10px 20px;">Dünya Çapında 500K+ Otel</span>
                                </div>
                            </div>
                        </div>

                        <div class="service-content p-4" style="flex: 1; display: flex; flex-direction: column;">
                            <div class="service-icon mb-3">
                                <i class="fas fa-hotel" style="font-size: 2.5em; color: #2c3e50;"></i>
                            </div>
                            <h3 class="mb-3" style="color: #333; font-weight: 600; font-size: 1.5rem;">
                                Otel & Konaklama
                            </h3>
                            <p class="mb-4 text-muted" style="font-size: 14px; line-height: 1.7;">
                                Küresel otel zincirleri ve butik otellerle özel kurumsal anlaşmalarımız ile
                                şirketinize en uygun konaklama çözümlerini sunuyoruz.
                            </p>

                            <div class="service-features mb-4" style="flex: 1;">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Kurumsal anlaşmalı oteller</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Ücretsiz iptal ve değişiklik</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Late check-out imkanı</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Toplantı salonu rezervasyonu</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Sadakat programı avantajları</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="service-price mb-3 p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-size: 14px; color: #666;">Tasarruf oranı:</span>
                                    <span style="font-size: 20px; font-weight: bold; color: #2c3e50;">%25-40</span>
                                </div>
                            </div>

                            <div class="text-center mt-auto">
                                <a href="#contact-form" class="btn btn-primary btn-block scroll-link" style="background: #2c3e50; border: none; padding: 12px; border-radius: 6px; font-weight: 500;">
                                    Otel Teklifi İste <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Transfer & VIP Hizmetler -->
                <div class="col-lg-4 col-md-6 ftco-animate mb-4">
                    <div class="service-card" style="background: white; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                        <div class="service-image" style="position: relative; height: 220px; overflow: hidden;">
                            <img src="{{ asset('images/corporate/vip-transfer.jpg') }}" alt="VIP Transfer Hizmetleri"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            <div class="service-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(44,62,80,0.85), rgba(52,73,94,0.75)); opacity: 0; transition: opacity 0.3s ease;">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <span class="badge badge-light" style="font-size: 16px; padding: 10px 20px;">Premium Konfor</span>
                                </div>
                            </div>
                        </div>

                        <div class="service-content p-4" style="flex: 1; display: flex; flex-direction: column;">
                            <div class="service-icon mb-3">
                                <i class="fas fa-car" style="font-size: 2.5em; color: #2c3e50;"></i>
                            </div>
                            <h3 class="mb-3" style="color: #333; font-weight: 600; font-size: 1.5rem;">
                                Transfer & VIP Hizmetler
                            </h3>
                            <p class="mb-4 text-muted" style="font-size: 14px; line-height: 1.7;">
                                Havalimanı karşılama, şehir içi transfer ve özel araç kiralama hizmetleri ile
                                konforlu ve güvenli yolculuklar.
                            </p>

                            <div class="service-features mb-4" style="flex: 1;">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">VIP havalimanı karşılama</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Lüks araç filosu</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Profesyonel şoför hizmeti</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Havalimanı CIP salonu</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle mr-2" style="color: #28a745;"></i>
                                        <span style="font-size: 14px;">Fast-track pasaport geçişi</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="service-price mb-3 p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-size: 14px; color: #666;">Hizmet kapsamı:</span>
                                    <span style="font-size: 16px; font-weight: bold; color: #2c3e50;">7/24 Erişim</span>
                                </div>
                            </div>

                            <div class="text-center mt-auto">
                                <a href="#contact-form" class="btn btn-primary btn-block scroll-link" style="background: #2c3e50; border: none; padding: 12px; border-radius: 6px; font-weight: 500;">
                                    Transfer Talep Et <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Kurumsal Avantajlar -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Neden Pardustur?</span>
                    <h2 class="mb-3">Kurumsal Seyahat Yönetiminde Farkımız</h2>
                    <p>Şirketinizin seyahat süreçlerini optimize etmek için sunduğumuz benzersiz avantajlar</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="advantage-item p-4" style="border: 2px solid #e8e8e8; border-radius: 12px; height: 100%; transition: all 0.3s ease;">
                        <div class="advantage-icon mb-4">
                            <div style="width: 80px; height: 80px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-piggy-bank" style="font-size: 2em; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-3" style="font-weight: 600;">Maliyet Optimizasyonu</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Havayolları, otel zincirleri ve servis sağlayıcılarla özel kurumsal anlaşmalarımız
                            sayesinde %30'a varan tasarruf sağlayın. Detaylı harcama raporları ile bütçenizi tam kontrol altında tutun.
                        </p>
                        <div class="mt-3">
                            <span class="badge badge-light p-2" style="font-size: 13px;">Yıllık %30 tasarruf</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="advantage-item p-4" style="border: 2px solid #e8e8e8; border-radius: 12px; height: 100%; transition: all 0.3s ease;">
                        <div class="advantage-icon mb-4">
                            <div style="width: 80px; height: 80px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clock" style="font-size: 2em; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-3" style="font-weight: 600;">Zaman Tasarrufu</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Tek tıkla rezervasyon, otomatik onay süreçleri ve self-service portal ile
                            çalışanlarınızın ve insan kaynakları ekibinizin zamanını verimli kullanın.
                            Ortalama %70 süreç hızlandırma.
                        </p>
                        <div class="mt-3">
                            <span class="badge badge-light p-2" style="font-size: 13px;">%70 daha hızlı işlem</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="advantage-item p-4" style="border: 2px solid #e8e8e8; border-radius: 12px; height: 100%; transition: all 0.3s ease;">
                        <div class="advantage-icon mb-4">
                            <div style="width: 80px; height: 80px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-headset" style="font-size: 2em; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-3" style="font-weight: 600;">7/24 Destek & İzleme</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Seyahat öncesi, seyahat sırasında ve sonrasında kesintisiz destek. Acil durum
                            yönetimi, uçuş değişiklikleri ve seyahat güvenliği için özel ekibimiz her zaman hazır.
                        </p>
                        <div class="mt-3">
                            <span class="badge badge-light p-2" style="font-size: 13px;">365 gün kesintisiz</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="advantage-item p-4" style="border: 2px solid #e8e8e8; border-radius: 12px; height: 100%; transition: all 0.3s ease;">
                        <div class="advantage-icon mb-4">
                            <div style="width: 80px; height: 80px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chart-line" style="font-size: 2em; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-3" style="font-weight: 600;">Gelişmiş Raporlama</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Seyahat harcamalarınızı departman, proje ve çalışan bazında analiz edin.
                            Excel entegrasyonu, özelleştirilebilir dashboard ve otomatik mali raporlar.
                        </p>
                        <div class="mt-3">
                            <span class="badge badge-light p-2" style="font-size: 13px;">Real-time analytics</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="advantage-item p-4" style="border: 2px solid #e8e8e8; border-radius: 12px; height: 100%; transition: all 0.3s ease;">
                        <div class="advantage-icon mb-4">
                            <div style="width: 80px; height: 80px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-shield-alt" style="font-size: 2em; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-3" style="font-weight: 600;">Uyumluluk & Güvenlik</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            KVKK ve GDPR uyumlu veri güvenliği, şirket seyahat politikalarına tam uyum,
                            otomatik uyarı sistemleri ve seyahat risk yönetimi çözümleri.
                        </p>
                        <div class="mt-3">
                            <span class="badge badge-light p-2" style="font-size: 13px;">ISO 27001 Sertifikalı</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center ftco-animate mb-4">
                    <div class="advantage-item p-4" style="border: 2px solid #e8e8e8; border-radius: 12px; height: 100%; transition: all 0.3s ease;">
                        <div class="advantage-icon mb-4">
                            <div style="width: 80px; height: 80px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-cogs" style="font-size: 2em; color: white;"></i>
                            </div>
                        </div>
                        <h4 class="mb-3" style="font-weight: 600;">Entegre Çözümler</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            ERP, muhasebe ve HR yazılımlarınıza sorunsuz entegrasyon. API desteği,
                            SAP/Oracle bağlantısı ve özel entegrasyon çözümleri.
                        </p>
                        <div class="mt-3">
                            <span class="badge badge-light p-2" style="font-size: 13px;">Flexible API</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Süreç Akışı -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Nasıl Çalışır?</span>
                    <h2 class="mb-3">Kurumsal Seyahat Yönetim Sürecimiz</h2>
                    <p>4 basit adımda profesyonel seyahat yönetimi</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 text-center ftco-animate mb-4">
                    <div class="process-step" style="background: white; padding: 30px 20px; border-radius: 12px; height: 100%; position: relative;">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            1
                        </div>
                        <h5 class="mb-3" style="font-weight: 600;">İhtiyaç Analizi</h5>
                        <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
                            Şirketinizin seyahat ihtiyaçlarını detaylı analiz ediyoruz. Bütçe, hedefler ve
                            mevcut süreçlerinizi değerlendiriyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 text-center ftco-animate mb-4">
                    <div class="process-step" style="background: white; padding: 30px 20px; border-radius: 12px; height: 100%; position: relative;">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            2
                        </div>
                        <h5 class="mb-3" style="font-weight: 600;">Özel Strateji</h5>
                        <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
                            Size özel seyahat politikası ve strateji geliştiriyoruz. Tedarikçi anlaşmaları ve
                            fiyatlandırma modelini oluşturuyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 text-center ftco-animate mb-4">
                    <div class="process-step" style="background: white; padding: 30px 20px; border-radius: 12px; height: 100%; position: relative;">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            3
                        </div>
                        <h5 class="mb-3" style="font-weight: 600;">Platform Kurulumu</h5>
                        <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
                            Seyahat yönetim platformunuzu kuruyoruz. Çalışanlarınıza eğitim verip sistemi
                            mevcut altyapınıza entegre ediyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 text-center ftco-animate mb-4">
                    <div class="process-step" style="background: white; padding: 30px 20px; border-radius: 12px; height: 100%; position: relative;">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; margin: 0 auto; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                            4
                        </div>
                        <h5 class="mb-3" style="font-weight: 600;">Sürekli Destek</h5>
                        <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
                            7/24 destek ekibimiz ve özel hesap yöneticinizle her zaman yanınızdayız.
                            Sürekli optimizasyon ve iyileştirme sağlıyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sektör Çözümleri -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Sektörel Uzmanlık</span>
                    <h2 class="mb-3">Her Sektöre Özel Çözümler</h2>
                    <p>Farklı sektörlerin özel ihtiyaçlarına yönelik deneyimimiz</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-industry mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Üretim & Sanayi</h5>
                        <p class="text-muted" style="font-size: 14px;">Fabrika ziyaretleri, tedarikçi toplantıları ve lojistik seyahatleri</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-laptop-code mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Teknoloji & IT</h5>
                        <p class="text-muted" style="font-size: 14px;">Konferanslar, hackathonlar ve global ekip toplantıları</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-heartbeat mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Sağlık & İlaç</h5>
                        <p class="text-muted" style="font-size: 14px;">Tıbbi kongreler, eğitimler ve hastane ziyaretleri</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-university mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Finans & Bankacılık</h5>
                        <p class="text-muted" style="font-size: 14px;">Yatırımcı toplantıları, due diligence ve finansal denetimler</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-building mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">İnşaat & Gayrimenkul</h5>
                        <p class="text-muted" style="font-size: 14px;">Şantiye ziyaretleri, proje toplantıları ve fuarlar</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-shopping-cart mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Perakende & E-ticaret</h5>
                        <p class="text-muted" style="font-size: 14px;">Mağaza açılışları, tedarikçi görüşmeleri ve moda haftaları</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-graduation-cap mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Eğitim & Danışmanlık</h5>
                        <p class="text-muted" style="font-size: 14px;">Seminerler, eğitim programları ve akademik konferanslar</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="industry-card text-center p-4" style="background: white; border: 1px solid #e8e8e8; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <i class="fas fa-globe mb-3" style="font-size: 3em; color: #2c3e50;"></i>
                        <h5 class="mb-2" style="font-weight: 600;">Diğer Sektörler</h5>
                        <p class="text-muted" style="font-size: 14px;">Her sektörden şirketlere özel çözümler üretiyoruz</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SSS Bölümü -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Sıkça Sorulan Sorular</span>
                    <h2 class="mb-3">Merak Edilenler</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="accordion ftco-animate" id="faqAccordion">
                        <div class="card mb-3" style="border: 1px solid #e8e8e8; border-radius: 8px;">
                            <div class="card-header" style="background: white; border-bottom: 1px solid #e8e8e8; border-radius: 8px 8px 0 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #333; text-decoration: none; font-weight: 500;">
                                        <i class="fas fa-plus-circle mr-2" style="color: #2c3e50;"></i>
                                        Kurumsal seyahat yönetimi hizmeti nasıl başlar?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq1" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body text-muted">
                                    İlk olarak şirketinizin ihtiyaçlarını analiz etmek için ücretsiz bir danışmanlık toplantısı yapıyoruz.
                                    Ardından size özel bir teklif hazırlıyoruz. Anlaşma sonrası, platformunuzu kuruyoruz ve
                                    çalışanlarınıza eğitim veriyoruz. Tüm süreç ortalama 2-3 hafta içinde tamamlanır.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="border: 1px solid #e8e8e8; border-radius: 8px;">
                            <div class="card-header" style="background: white; border-bottom: 1px solid #e8e8e8;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq2" style="color: #333; text-decoration: none; font-weight: 500;">
                                        <i class="fas fa-plus-circle mr-2" style="color: #2c3e50;"></i>
                                        Minimum çalışan sayısı gereksinimi var mı?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq2" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body text-muted">
                                    Hayır, minimum çalışan sayısı gereksinimi yoktur. 10 kişilik küçük işletmelerden
                                    5000+ çalışanı olan büyük kurumlar kadar her ölçekte şirkete hizmet veriyoruz.
                                    Çözümlerimizi şirketinizin büyüklüğüne göre özelleştiriyoruz.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="border: 1px solid #e8e8e8; border-radius: 8px;">
                            <div class="card-header" style="background: white; border-bottom: 1px solid #e8e8e8;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq3" style="color: #333; text-decoration: none; font-weight: 500;">
                                        <i class="fas fa-plus-circle mr-2" style="color: #2c3e50;"></i>
                                        Fiyatlandırma modeli nasıl çalışır?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq3" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body text-muted">
                                    Fiyatlandırmamız şeffaf ve esnektir. Üç farklı model sunuyoruz: (1) Rezervasyon başına
                                    sabit ücret, (2) Aylık paket abonelik, (3) Yıllık sözleşme ile indirimli hizmet.
                                    Platform kullanım ücreti yoktur. Detaylı teklif için bizimle iletişime geçin.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="border: 1px solid #e8e8e8; border-radius: 8px;">
                            <div class="card-header" style="background: white; border-bottom: 1px solid #e8e8e8;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq4" style="color: #333; text-decoration: none; font-weight: 500;">
                                        <i class="fas fa-plus-circle mr-2" style="color: #2c3e50;"></i>
                                        Mevcut ERP sistemimize entegrasyon mümkün mü?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq4" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body text-muted">
                                    Evet, platformumuz SAP, Oracle, Microsoft Dynamics ve diğer popüler ERP sistemleriyle
                                    entegre çalışabilir. REST API desteği ile özel entegrasyonlar da yapabiliriz.
                                    Entegrasyon süreci teknik ekibimiz tarafından yönetilir.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="border: 1px solid #e8e8e8; border-radius: 8px;">
                            <div class="card-header" style="background: white; border-bottom: 1px solid #e8e8e8;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq5" style="color: #333; text-decoration: none; font-weight: 500;">
                                        <i class="fas fa-plus-circle mr-2" style="color: #2c3e50;"></i>
                                        Veri güvenliği konusunda ne gibi önlemler alınıyor?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq5" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body text-muted">
                                    ISO 27001 sertifikalı veri güvenliği standartlarını uyguluyoruz. Tüm veriler
                                    Türkiye'de bulunan sunucularda şifreli olarak saklanır. KVKK ve GDPR uyumlu
                                    çalışıyoruz. Düzenli penetrasyon testleri ve güvenlik denetimleri yapılmaktadır.
                                </div>
                            </div>
                        </div>

                        <div class="card" style="border: 1px solid #e8e8e8; border-radius: 8px;">
                            <div class="card-header" style="background: white; border-bottom: 1px solid #e8e8e8;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq6" style="color: #333; text-decoration: none; font-weight: 500;">
                                        <i class="fas fa-plus-circle mr-2" style="color: #2c3e50;"></i>
                                        Acil durumlarda nasıl destek alırım?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq6" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body text-muted">
                                    7/24 acil durum destek hattımız her zaman aktiftir. Telefon, WhatsApp, e-posta ve
                                    platformdaki canlı destek ile anında ulaşabilirsiniz. Uçuş iptalleri, kayıp bagaj,
                                    otel problemleri gibi tüm acil durumlarda yanınızdayız. Ortalama yanıt süresi 5 dakikadır.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- İletişim Formu -->
    <section class="ftco-section bg-light" id="contact-form">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">İletişime Geçin</span>
                    <h2 class="mb-3">Ücretsiz Danışmanlık ve Fiyat Teklifi Alın</h2>
                    <p>Formu doldurun, kurumsal seyahat uzmanlarımız 24 saat içinde sizinle iletişime geçsin</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-form-wrap p-5" style="background: white; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                        <form action="#" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">Ad Soyad *</label>
                                        <input type="text" class="form-control" placeholder="Adınız ve soyadınız" required
                                               style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">Şirket Adı *</label>
                                        <input type="text" class="form-control" placeholder="Şirketinizin adı" required
                                               style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">E-posta *</label>
                                        <input type="email" class="form-control" placeholder="ornek@sirket.com" required
                                               style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">Telefon *</label>
                                        <input type="tel" class="form-control" placeholder="+90 (555) 555 55 55" required
                                               style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">Çalışan Sayısı</label>
                                        <select class="form-control" style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;">
                                            <option>1-10</option>
                                            <option>11-50</option>
                                            <option>51-200</option>
                                            <option>201-500</option>
                                            <option>500+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">İlgilendiğiniz Hizmet</label>
                                        <select class="form-control" style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;">
                                            <option>Uçak Bileti</option>
                                            <option>Otel Rezervasyonu</option>
                                            <option>MICE & Etkinlik</option>
                                            <option>Transfer Hizmetleri</option>
                                            <option>Vize İşlemleri</option>
                                            <option>Entegre Çözüm (Hepsi)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label style="font-weight: 500; color: #333; margin-bottom: 8px;">Mesajınız</label>
                                        <textarea class="form-control" rows="4" placeholder="Seyahat ihtiyaçlarınız ve beklentileriniz hakkında bilgi verin..."
                                                  style="border: 2px solid #e8e8e8; padding: 12px; border-radius: 6px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="gdprConsent" required>
                                            <label class="custom-control-label" for="gdprConsent" style="font-size: 14px; color: #666;">
                                                <a href="#" style="color: #2c3e50; text-decoration: underline;">KVKK Aydınlatma Metni</a>'ni okudum ve kabul ediyorum.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"
                                            style="background: linear-gradient(135deg, #2c3e50, #34495e); border: none; padding: 15px; border-radius: 8px; font-weight: 600; font-size: 16px;">
                                        <i class="fas fa-paper-plane mr-2"></i>Teklif Talep Et
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="row mt-4 pt-4" style="border-top: 1px solid #e8e8e8;">
                            <div class="col-md-4 text-center mb-3">
                                <i class="fas fa-phone-alt mb-2" style="font-size: 1.5em; color: #2c3e50;"></i>
                                <p class="mb-0" style="font-size: 14px; color: #666;">Telefon</p>
                                <strong style="color: #2c3e50;">+90 (212) 555 55 55</strong>
                            </div>
                            <div class="col-md-4 text-center mb-3">
                                <i class="fas fa-envelope mb-2" style="font-size: 1.5em; color: #2c3e50;"></i>
                                <p class="mb-0" style="font-size: 14px; color: #666;">E-posta</p>
                                <strong style="color: #2c3e50;">kurumsal@pardustur.com</strong>
                            </div>
                            <div class="col-md-4 text-center mb-3">
                                <i class="fas fa-clock mb-2" style="font-size: 1.5em; color: #2c3e50;"></i>
                                <p class="mb-0" style="font-size: 14px; color: #666;">Çalışma Saatleri</p>
                                <strong style="color: #2c3e50;">7/24 Hizmet</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Bölümü -->
    <section class="ftco-section" style="background: linear-gradient(135deg, #2c3e50, #34495e); color: white;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10">
                    <h2 class="mb-4 text-white" style="font-size: 2.5rem; font-weight: 700;">
                        Kurumsal Seyahat Maliyetlerinizi %30 Düşürmeye Hazır mısınız?
                    </h2>
                    <p class="mb-5" style="font-size: 18px; opacity: 0.95; line-height: 1.8;">
                        25 yıllık deneyimimiz, güçlü sektör ilişkilerimiz ve teknolojik altyapımızla
                        şirketinizin seyahat süreçlerini optimize ediyoruz. Bugün başvurun,
                        ücretsiz danışmanlık ve özel fiyat teklifimizi alın.
                    </p>
                    <div class="cta-buttons">
                        <a href="#contact-form" class="btn btn-light btn-lg px-5 py-3 mr-3 mb-3 scroll-link"
                           style="border-radius: 50px; font-weight: 600; font-size: 16px;">
                            <i class="fas fa-envelope mr-2"></i>Ücretsiz Teklif Al
                        </a>
                        <a href="tel:+902125555555" class="btn btn-outline-light btn-lg px-5 py-3 mb-3"
                           style="border-radius: 50px; font-weight: 600; font-size: 16px; border-width: 2px;">
                            <i class="fas fa-phone-alt mr-2"></i>Hemen Ara
                        </a>
                    </div>

                    <div class="trust-badges mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.2);">
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-6 mb-3">
                                <div class="trust-item">
                                    <i class="fas fa-shield-alt mb-2" style="font-size: 2em;"></i>
                                    <p class="mb-0" style="font-size: 14px;">ISO 27001 Sertifikalı</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="trust-item">
                                    <i class="fas fa-award mb-2" style="font-size: 2em;"></i>
                                    <p class="mb-0" style="font-size: 14px;">25 Yıl Deneyim</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="trust-item">
                                    <i class="fas fa-users mb-2" style="font-size: 2em;"></i>
                                    <p class="mb-0" style="font-size: 14px;">500+ Kurumsal Müşteri</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="trust-item">
                                    <i class="fas fa-headset mb-2" style="font-size: 2em;"></i>
                                    <p class="mb-0" style="font-size: 14px;">7/24 Kesintisiz Destek</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    /* Hover Effects */
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    .service-card:hover .service-overlay {
        opacity: 1;
    }
    .service-card:hover img {
        transform: scale(1.05);
    }

    .advantage-item:hover {
        border-color: #2c3e50;
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .industry-card:hover {
        border-color: #2c3e50;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .btn-primary:hover {
        background: #fff !important;
        color: #2c3e50 !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Smooth Scrolling for Links */
    .scroll-link {
        cursor: pointer;
    }

    /* Accordion Custom Styles */
    .card-header button:not(.collapsed) i {
        transform: rotate(45deg);
        transition: transform 0.3s ease;
    }

    .card-header button i {
        transition: transform 0.3s ease;
    }

    /* Form Focus States */
    .form-control:focus {
        border-color: #2c3e50;
        box-shadow: 0 0 0 0.2rem rgba(44,62,80,0.25);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero-wrap h1 {
            font-size: 1.8rem;
        }
        .ftco-number {
            font-size: 2em !important;
        }
    }
    </style>

    <script>
    // Smooth scroll for anchor links
    document.querySelectorAll('.scroll-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId && targetId !== '#') {
                document.querySelector(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    </script>
@endsection

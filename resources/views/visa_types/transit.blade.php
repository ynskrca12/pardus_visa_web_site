@extends('layouts.app')

@section('title', 'Transit Vizesi - Havalimanı Aktarma ve Geçiş Vizesi | Travellines Turizm')
@section('meta_description', 'Transit vizesi başvurunuzu hızlı şekilde tamamlayın. Havalimanı aktarması ve kısa süreli geçişler için 3-5 iş günü işlem süresi.')
@section('keywords', 'transit vizesi, aktarma vizesi, geçiş vizesi, havalimanı transit, stopover visa, kısa süreli vize')

@section('content')
    <!-- Hero Bölümü -->
    <div class="hero-wrap" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/visa_banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-10 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Ana Sayfa</a></span>
                            <span class="mr-2"><a href="{{ route('visa-types.visa_types_index') }}" style="color: rgba(255,255,255,0.8);">Vize Türleri</a></span>
                            <span style="color: rgba(255,255,255,0.6);">Transit Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Transit Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Hızlı ve güvenli aktarma çözümü ile seyahatinize devam edin
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ana Bilgi Bölümü -->
    <section class="ftco-section" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Transit Vizesi Tanımı -->
                    <div class="content-section mb-5 ftco-animate">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Transit Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Transit vizesi, bir ülkeden diğer bir ülkeye seyahat ederken ara durağında kısa süreli konaklama yapmak veya havalimanından çıkmak için kullanılan kısa süreli vize türüdür.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Bu vize türü ile transit ülkede maksimum 24-72 saat kalabilir, havalimanı çevresinde konaklayabilir veya şehir merkezini ziyaret edebilirsiniz. Transit vizesi genellikle tek giriş için geçerlidir ve asıl destinasyonunuza ulaşmak için kullanılır.
                            </p>
                        </div>
                    </div>

                    <!-- Transit Vizesi Avantajları -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Transit Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-clock" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Hızlı İşlem</h5>
                                    <p class="text-muted">3-5 iş günü gibi kısa sürede sonuçlandırılan başvuru süreci.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-dollar-sign" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Uygun Fiyat</h5>
                                    <p class="text-muted">Diğer vize türlerine göre daha ekonomik başvuru ücreti.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-plane-departure" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Havalimanı Çıkışı</h5>
                                    <p class="text-muted">Transit süresince havalimanından çıkıp şehri gezebilme imkanı.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-shipping-fast" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Acil İşlem</h5>
                                    <p class="text-muted">Acil durumlarda aynı gün başvuru ve sonuç alma imkanı.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transit Vizesi Türleri -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Transit Vizesi Türleri</h3>
                        <div class="transit-types-grid">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="transit-type-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-plane mb-2 mr-3" style="font-size: 2em; color: #2c3e50;"></i>
                                            <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 0;">Havayolu Transit</h5>
                                        </div>
                                        <p class="text-muted mb-3">Havalimanında kalmak ve terminal değiştirmek için kullanılır.</p>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>24 saate kadar</li>
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Terminal içi hareket</li>
                                            <li><i class="fas fa-check mr-2" style="color: #28a745;"></i>Vize gerektirmeyebilir</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="transit-type-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-city mb-2 mr-3" style="font-size: 2em; color: #2c3e50;"></i>
                                            <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 0;">Şehir Transit</h5>
                                        </div>
                                        <p class="text-muted mb-3">Havalimanından çıkıp şehri gezme imkanı sağlar.</p>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>24-72 saat arası</li>
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Şehir gezisi</li>
                                            <li><i class="fas fa-check mr-2" style="color: #28a745;"></i>Transit vizesi gerekli</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Transit Vizesi İçin Gerekli Belgeler</h3>
                        <div class="documents-container">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="fas fa-file-alt mr-2"></i>Temel Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Pasaport</strong><br>
                                                    <small class="text-muted">6 ay geçerlilik + boş sayfa</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Transit Vize Formu</strong><br>
                                                    <small class="text-muted">Doldurulmuş başvuru formu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Fotoğraf</strong><br>
                                                    <small class="text-muted">Biyometrik standartlarda 2 adet</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Vize Ücreti</strong><br>
                                                    <small class="text-muted">Başvuru harç bedeli</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="fas fa-route mr-2"></i>Seyahat Belgeleri
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Uçak Bileti</strong><br>
                                                    <small class="text-muted">Gidiş-dönüş rezervasyonu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Nihai Destinasyon Vizesi</strong><br>
                                                    <small class="text-muted">Varış ülkesi vizesi (varsa)</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Planı</strong><br>
                                                    <small class="text-muted">Detaylı seyahat programı</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Konaklama Belgesi</strong><br>
                                                    <small class="text-muted">Hotel rezervasyonu (gerekirse)</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Başvuru Süreci -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Transit Vizesi Başvuru Süreci</h3>
                        <div class="process-timeline">
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number">
                                            <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #2c3e50;">1</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Seyahat Planı Belirleme</h5>
                                        <p class="text-muted">Transit sürenizi ve hangi şehri ziyaret edeceğinizi planlayın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number">
                                            <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #2c3e50;">2</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Belge Hazırlığı</h5>
                                        <p class="text-muted">Gerekli tüm belgeleri eksiksiz şekilde hazırlayın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number">
                                            <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #2c3e50;">3</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Başvuru Yapma</h5>
                                        <p class="text-muted">Konsolosluk veya vize merkezinde başvurunuzu tamamlayın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number">
                                            <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #2c3e50;">4</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Hızlı Sonuç</h5>
                                        <p class="text-muted">3-5 iş günü içerisinde vize sonucunuzu alın.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="transitVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Transit vizesi olmadan havalimanından çıkabilir miyim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#transitVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Hayır, çoğu ülkede havalimanından çıkmak için transit vizesi gereklidir. Sadece terminal içinde kalacaksanız bazı ülkelerde vize gerekmeyebilir, ancak ülkeye göre değişir.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq2" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Transit vizesi ne kadar süre geçerlidir?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#transitVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Transit vizesi genellikle 24-72 saat arası geçerlidir. Bazı ülkelerde maksimum 5 güne kadar uzayabilir. Süre, ülke politikasına ve başvuru amacına göre değişir.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq3" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Transit vizesi kaç para?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#transitVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Transit vizesi ücreti ülkeye göre değişir ancak genellikle 50-150 dolar arasındadır. Bizim hizmet ücretimizle birlikte toplam maliyet size önceden bildirilir.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Fiyat ve Başvuru Kartı -->
                    <div class="pricing-card mb-4 text-center" style="top: 20px; background: white; border-radius: 15px; border:1px solid #dcdcdc; overflow: hidden;">
                        <div class="card-header text-center py-3" style="background: linear-gradient(135deg, #2c3e50, #34495e); color: white;">
                            <h4 class="mb-0 text-white">Transit Vizesi</h4>
                        </div>
                         <div class="price-display mb-3 mt-3">
                                <span class="h2" style="color: #2c3e50;">$150</span>
                                <small class="text-muted d-block">başlangıç fiyat</small>
                            </div>

                        <div class="pricing-body p-4">
                            <!-- Vize Özellikleri -->
                            <div class="visa-specs mb-5">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-calendar" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">24-72</strong>
                                                <small class="d-block text-muted">saat kalış</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="fas fa-hourglass-half" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">3-5</strong>
                                                <small class="d-block text-muted">iş günü</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-check-circle" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">30</strong>
                                                <small class="d-block text-muted">gün geçerli</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Özellikler Listesi -->
                            <div class="features-list mb-4">
                                <h6 class="mb-3" style="font-weight: 600; color: #2c3e50;">Dahil Edilen Hizmetler</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Kısa süreli kalış</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Havalimanı çıkış hakkı</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Hızlı onay süreci</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Acil işlem imkanı</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>24/7 destek hizmeti</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Başvuru Butonları -->
                            <div class="action-buttons">
                                <a href="#" class="btn btn-outline-secondary btn-block mb-3" style="color:#2c3e50; border-radius: 8px; padding: 15px; font-weight: 500;">
                                    <i class="icon-send mr-2"></i>Hemen Başvur
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-block" style="color:#2c3e50;border-radius: 8px; padding: 15px;font-weight: 500;">
                                    <i class="icon-phone mr-2"></i>Ücretsiz Danışmanlık
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Transit Ülkeleri -->
                    <div class="popular-countries-card mb-4" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-map-marked-alt mr-2" style="color: #2c3e50;"></i>Popüler Transit Ülkeleri
                        </h5>
                        <div class="countries-grid">
                            <div class="row">
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-plane mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Dubai (UAE)</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-plane mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>İstanbul (TR)</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-plane mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Doha (QA)</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-plane mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Amsterdam (NL)</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-plane mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Frankfurt (DE)</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-plane mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Singapur (SG)</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- İletişim Kartı -->
                    <div class="contact-card" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="icon-headphones mr-2" style="color: #2c3e50;"></i>Uzman Desteği
                        </h5>
                        <div class="contact-methods">
                            <div class="contact-item mb-3 py-3">
                                <div class="d-flex align-items-center">
                                    <i class="icon-phone mr-3" style="color: #2c3e50; font-size: 1.3em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;"> (0212) 211 52 34</strong>
                                        <small class="d-block text-muted">7/24 Acil Destek</small>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-item mb-3 py-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-envelope mr-3" style="color: #2c3e50; font-size: 1.3em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">info@pardusvize.com</strong>
                                        <small class="d-block text-muted">E-posta Desteği</small>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-item py-3">
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
                </div>
            </div>
        </div>
    </section>

    <!-- Başarı İstatistikleri -->
    <section class="ftco-section" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Transit Vizesi Hizmet Performansımız</h3>
                    <p class="text-muted">Hızlı transit vize çözümlerimizin başarı verileri</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">2500+</span>
                        </div>
                        <p class="text-muted mb-0">Transit Vizesi</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%99</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">3</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">50+</span>
                        </div>
                        <p class="text-muted mb-0">Transit Noktası</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Bölümü -->
    <section class="ftco-section" style="background: linear-gradient(135deg, #2c3e50, #34495e); color: white; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10">
                    <div class="cta-content">
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Aktarmalı Seyahatiniz İçin Hızlı Çözüm</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Son dakika seyahat planlarınız için acil transit vizesi hizmeti sunuyoruz.
                            3-5 iş günü içinde vizenizi alın ve rahatça seyahat edin.
                        </p>
                        <div class="cta-buttons">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <a href="#" class="btn btn-outline-light btn-lg btn-block" style="border-radius: 8px; padding: 15px; font-weight: 500;">
                                        <i class="icon-phone mr-2"></i>Acil Arayın
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <a href="#" class="btn btn-outline-light btn-lg btn-block" style="border-radius: 8px; padding: 15px; font-weight: 500;">
                                        <i class="fas fa-rocket mr-2"></i>Hızlı Başvur
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Ek Bilgi -->
                        <div class="cta-features mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-shipping-fast mr-2"></i>
                                        <span>Express İşlem</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>24 Saat Hizmet</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="icon-headphones mr-2"></i>
                                        <span>Anlık Destek</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
/* Hover Efektleri */
.advantage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.transit-type-card:hover {
    border-color: #f8b600 !important;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12) !important;
    transform: translateY(-2px);
}

.document-category:hover {
    box-shadow: 0 8px 30px rgba(0,0,0,0.12) !important;
}

.counter-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

/* Responsive Düzenlemeler */
@media (max-width: 768px) {
    .hero-wrap h1 {
        font-size: 2.5em !important;
    }

    .pricing-card {
        margin-bottom: 30px;
    }

    .content-section {
        margin-bottom: 40px !important;
    }
}

/* Animasyonlar */
.ftco-animate {
    opacity: 0;
    animation: fadeInUp 0.8s ease forwards;
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

/* Country Items Styling */
.country-item {
    padding: 5px 0;
    transition: color 0.3s ease;
}

.country-item:hover {
    color: #2c3e50 !important;
    font-weight: 500;
}

/* Transit Type Cards */
.transit-type-card {
    transition: all 0.3s ease;
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });

    // Counter animation
    $('.counter-item').each(function() {
        $(this).appear(function() {
            var $this = $(this);
            var countTo = $this.find('.h2').attr('data-count') || $this.find('.h2').text().replace(/[^\d]/g, '');

            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    var num = Math.floor(this.countNum);
                    var originalText = $this.find('.h2').text();
                    if (originalText.includes('%')) {
                        $this.find('.h2').text('%' + num);
                    } else if (originalText.includes('+')) {
                        $this.find('.h2').text(num + '+');
                    } else {
                        $this.find('.h2').text(num);
                    }
                },
                complete: function() {
                    $this.find('.h2').text($this.find('.h2').text());
                }
            });
        });
    });
});
</script>
@endpush

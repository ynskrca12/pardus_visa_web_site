@extends('layouts.app')

@section('title', 'Dubai Vizesi - BAE Turist Vizesi ve E-Vize İşlemleri | Travellines Turizm')
@section('meta_description', 'Dubai vizesi başvurunuzu 3-5 iş günü içinde tamamlayın. BAE e-vize sistemi ile hızlı onay, 30-90 gün kalış imkanı.')
@section('keywords', 'dubai vizesi, bae vizesi, dubai turist vizesi, emirates vizesi, dubai e-vize, abu dhabi vizesi, uae visa')

@section('content')
    <!-- Hero Bölümü -->
    <div class="hero-wrap" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/visa_banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-10 text-center d-flex align-items-end justify-content-center" data-aos="fade-up">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Ana Sayfa</a></span>
                            <span class="mr-2"><a href="{{ route('visa-types.visa_types_index') }}" style="color: rgba(255,255,255,0.8);">Vize Türleri</a></span>
                            <span style="color: rgba(255,255,255,0.6);">Dubai Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Dubai Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            BAE'nin incisi Dubai için hızlı ve güvenilir e-vize hizmeti
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
                    <!-- Dubai Vizesi Tanımı -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Dubai Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Dubai vizesi, Birleşik Arap Emirlikleri'ne (BAE) turistik amaçlı seyahatler için kullanılan elektronik vize türüdür. E-vize sistemi sayesinde başvuru süreci tamamen online yapılır ve hızlı sonuçlanır.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Dubai vizesi ile Dubai'nin muhteşem gökdelenlerini, lüks alışveriş merkezlerini, çöl safarilerini ve modern yaşam tarzını keşfedebilirsiniz. 30 veya 90 günlük kalış süreleri ile esnek seyahat planlaması yapabilirsiniz.
                            </p>
                        </div>
                    </div>

                    <!-- Dubai Vizesi Avantajları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Dubai Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-laptop" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">E-Vize Sistemi</h5>
                                    <p class="text-muted">Tamamen online başvuru, konsolosluğa gitmeye gerek yok.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-bolt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Hızlı Onay</h5>
                                    <p class="text-muted">3-5 iş günü içinde vize onayı ve e-mail ile teslimat.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-calendar-check" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Esnek Süreler</h5>
                                    <p class="text-muted">30 veya 90 günlük kalış süreleri ile esnek tatil planlaması.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-city" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Tüm BAE'ye Geçerli</h5>
                                    <p class="text-muted">Dubai, Abu Dhabi, Sharjah ve tüm emirliklere seyahat imkanı.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kimler Başvurabilir -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Dubai Vizesi Kimler İçin Uygundur?</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-umbrella-beach mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Turistler</h6>
                                        <small class="text-muted">Tatil ve gezi amaçlı seyahat</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-shopping-bag mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Alışveriş Tutkunları</h6>
                                        <small class="text-muted">Lüks alışveriş deneyimi</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-users mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Aile Seyahatleri</h6>
                                        <small class="text-muted">Aile ile kaliteli tatil</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-briefcase mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">İş Ziyaretleri</h6>
                                        <small class="text-muted">Kısa süreli iş toplantıları</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-plane-arrival mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Transit Yolcular</h6>
                                        <small class="text-muted">Aktarmalı seyahatler</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-heartbeat mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Sağlık Turizmi</h6>
                                        <small class="text-muted">Medikal tedavi ve termal</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Dubai Vizesi Başvurusu İçin Gerekli Belgeler</h3>
                        <div class="documents-container">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="icon-folder mr-2"></i>Temel Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Pasaport</strong><br>
                                                    <small class="text-muted">6 ay geçerlilik süresi</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Pasaport Fotokopisi</strong><br>
                                                    <small class="text-muted">Biyografik sayfa net görüntü</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Vesikalık Fotoğraf</strong><br>
                                                    <small class="text-muted">Renkli ve güncel</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Banka Hesap Özeti</strong><br>
                                                    <small class="text-muted">Son 3 aylık özet</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="icon-briefcase mr-2"></i>Seyahat Belgeleri
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Otel Rezervasyonu</strong><br>
                                                    <small class="text-muted">Onaylı konaklama belgesi</small>
                                                </div>
                                            </li>
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
                                                    <strong>İş Belgesi</strong><br>
                                                    <small class="text-muted">Çalışma durumu belgesi</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Sigortası</strong><br>
                                                    <small class="text-muted">Opsiyonel ama önerilen</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="dubaiVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Dubai vizesi ne kadar sürede çıkar?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#dubaiVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Dubai e-vizesi genellikle 3-5 iş günü içinde onaylanır ve e-mail yoluyla tarafınıza iletilir. Acil durumlar için ekspres işlem seçeneği ile 24-48 saat içinde vize alabilirsiniz.
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
                                                    30 günlük ve 90 günlük vize arasındaki fark nedir?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#dubaiVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                30 günlük vize tek girişlidir ve Dubai'de maksimum 30 gün kalabilirsiniz. 90 günlük vize ise çoklu giriş imkanı sunar ve vize geçerlilik süresince 90 güne kadar kalış yapabilirsiniz. İhtiyacınıza göre seçim yapabilirsiniz.
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
                                                    Dubai vizesi ile hangi şehirlere gidebilirim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#dubaiVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Dubai vizesi tüm Birleşik Arap Emirlikleri için geçerlidir. Dubai, Abu Dhabi, Sharjah, Ajman, Fujairah, Ras Al Khaimah ve Umm Al Quwain şehirlerini ziyaret edebilirsiniz.
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
                            <h4 class="mb-0 text-white">Dubai Vizesi</h4>
                        </div>

                        <div class="pricing-body p-4">
                            <!-- Vize Özellikleri -->
                            <div class="visa-specs mb-5">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-calendar" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">30-90</strong>
                                                <small class="d-block text-muted">gün kalış</small>
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
                                                <strong style="font-size: 16px;">60</strong>
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
                                        <span>E-vize sistemi</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Hızlı onay süreci</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Online başvuru</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>E-mail ile teslimat</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>7/24 uzman desteği</span>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Dubai Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">E-vize sisteminde uzman ekibimizin deneyimi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">8000+</span>
                        </div>
                        <p class="text-muted mb-0">Dubai Vizesi Başvurusu</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%99</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">4</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">24/7</span>
                        </div>
                        <p class="text-muted mb-0">Kesintisiz Hizmet</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dubai Hakkında Bilgi -->
    <section class="ftco-section" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Dubai'de Mutlaka Görülmesi Gerekenler</h3>
                    <p class="text-muted">Dubai vizeniz ile keşfedebileceğiniz muhteşem yerler</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-building" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Burj Khalifa</h5>
                        <p class="text-muted text-center">Dünyanın en yüksek binası ve Dubai'nin simgesi. 828 metre yüksekliğindeki bu muhteşem yapı muhteşem manzaralar sunar.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-water" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Dubai Marina</h5>
                        <p class="text-muted text-center">Modern gökdelenler, lüks yatlar ve şık restoranlarla dolu muhteşem marina bölgesi. Akşam yürüyüşleri için ideal.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-shopping-cart" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Dubai Mall</h5>
                        <p class="text-muted text-center">Dünyanın en büyük alışveriş merkezlerinden biri. 1200+ mağaza, akvaryum ve buz pateni pisti içerir.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-sun" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Çöl Safari</h5>
                        <p class="text-muted text-center">Heyecan verici çöl safarisi deneyimi, deve sürüşü, kumda kayak ve geleneksel akşam yemeği programları.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-umbrella-beach" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Jumeirah Beach</h5>
                        <p class="text-muted text-center">Beyaz kumlu plajlar ve turkuaz deniz. Burj Al Arab'ın muhteşem manzarasına sahip en popüler plaj.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-mosque" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Eski Dubai</h5>
                        <p class="text-muted text-center">Geleneksel çarşılar, altın ve baharat pazarları. Dubai'nin tarihi ve kültürel yüzünü keşfedin.</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Dubai Rüyanızı Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            E-vize sisteminde uzman ekibimizle Dubai vizenizi 3-5 iş günü içinde alın.
                            Lüks ve modern Dubai sizi bekliyor!
                        </p>
                        <div class="cta-buttons">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <a href="#" class="btn btn-outline-light btn-lg btn-block" style=" border-radius: 8px; padding: 15px; font-weight: 500;">
                                        <i class="icon-phone mr-2"></i>Hemen Arayın
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <a href="#" class="btn btn-outline-light btn-lg btn-block" style="border-radius: 8px; padding: 15px; font-weight: 500;">
                                        <i class="icon-calendar mr-2"></i>Online Başvuru
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Ek Bilgi -->
                        <div class="cta-features mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="icon-shield mr-2"></i>
                                        <span>%100 Güvenli E-Vize</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-bolt mr-2"></i>
                                        <span>Hızlı Teslimat</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="icon-headphones mr-2"></i>
                                        <span>7/24 Destek</span>
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
/* AOS için hazır olma durumu */
[data-aos] {
    opacity: 0;
    transition-property: opacity, transform;
}

[data-aos].aos-animate {
    opacity: 1;
}

/* Hover Efektleri */
.advantage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.business-type-item:hover {
    border-color: #f8b600 !important;
    background: #fff8f0 !important;
    transform: translateY(-2px);
}

.document-category:hover {
    box-shadow: 0 8px 30px rgba(0,0,0,0.12) !important;
}

.counter-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

/* Sticky Sidebar */
.sticky-top.fixed {
    position: fixed !important;
    top: 20px;
    width: 350px;
    z-index: 1000;
}

/* Responsive */
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
</style>
@endpush

@push('scripts')
<script>
// AOS animasyon başlatma
AOS.init({
    duration: 800,
    easing: 'ease',
    once: true,
    offset: 100
});

// Sticky sidebar fonksiyonu
$(document).ready(function() {
    var stickyTop = $('.sticky-top').offset();

    if(stickyTop) {
        $(window).scroll(function() {
            var windowTop = $(window).scrollTop();

            if (windowTop >= stickyTop.top) {
                $('.sticky-top').addClass('fixed');
            } else {
                $('.sticky-top').removeClass('fixed');
            }
        });
    }
});

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
</script>
@endpush

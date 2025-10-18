@extends('layouts.app')

@section('title', 'Çin Vizesi - China L Visa Turist Vizesi | Travellines Turizm')
@section('meta_description', 'Çin vizesi başvurunuzu profesyonel ekibimizle yapın. L Visa turist vizesi için otel ve uçak bileti desteği ile 5-7 iş günü içinde Çin vizesi.')
@section('keywords', 'çin vizesi, china visa, çin turist vizesi, l visa, pekin vizesi, çin iş vizesi, shanghai vizesi')

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
                            <span style="color: rgba(255,255,255,0.6);">Çin Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Çin Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Çin L Visa turist vizesi ile Çin Halk Cumhuriyeti'ni keşfedin
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
                    <!-- Çin Vizesi Tanımı -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Çin Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Çin L Visa (Tourist Visa), Çin Halk Cumhuriyeti'ne turistik amaçlı seyahatler için kullanılan vize türüdür. 30 güne kadar kalış imkanı sunar ve tek veya çift giriş seçenekleri mevcuttur.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Bu vize ile Pekin'in Yasak Şehir'ini, Büyük Çin Seddi'ni, Shanghai'ın modern siluetini, Terrakota Askerler'i ve Çin'in binlerce yıllık kültürünü keşfedebilirsiniz. Başvuru süreci hızlı ve pratiktir.
                            </p>
                        </div>
                    </div>

                    <!-- Çin Vizesi Avantajları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Çin Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-rocket" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Hızlı İşlem</h5>
                                    <p class="text-muted">5-7 iş günü içinde vize onayı ve teslim.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-file-invoice" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Basit Evrak</h5>
                                    <p class="text-muted">Minimum evrak ile kolay başvuru süreci.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-plane-departure" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Çift Giriş</h5>
                                    <p class="text-muted">Tek veya çift giriş seçenekleri ile esneklik.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-hands-helping" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Tam Destek</h5>
                                    <p class="text-muted">Otel ve uçak bileti rezervasyon desteği.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vize Türleri -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Çin Vize Türleri</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="business-type-item p-4" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease; height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-camera mr-3" style="font-size: 2.5em; color: #2c3e50;"></i>
                                            <div>
                                                <h5 style="font-weight: 600; color: #2c3e50;">L Visa - Turist Vizesi</h5>
                                                <p class="text-muted mb-2">Turistik seyahatler için</p>
                                                <ul class="text-muted mb-0" style="padding-left: 20px; font-size: 14px;">
                                                    <li>30 gün kalış</li>
                                                    <li>Tek/çift giriş</li>
                                                    <li>90 gün geçerlilik</li>
                                                    <li>5-7 iş günü işlem</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="business-type-item p-4" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease; height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-briefcase mr-3" style="font-size: 2.5em; color: #2c3e50;"></i>
                                            <div>
                                                <h5 style="font-weight: 600; color: #2c3e50;">M Visa - İş Vizesi</h5>
                                                <p class="text-muted mb-2">Ticari faaliyetler için</p>
                                                <ul class="text-muted mb-0" style="padding-left: 20px; font-size: 14px;">
                                                    <li>30-90 gün kalış</li>
                                                    <li>Çoklu giriş</li>
                                                    <li>6 ay-1 yıl geçerlilik</li>
                                                    <li>Davetiye gerekli</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kimler Başvurabilir -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Çin Vizesi Kullanım Amaçları</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-monument mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Tarihi Yerler</h6>
                                        <small class="text-muted">Yasak Şehir ve Çin Seddi</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-city mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Modern Şehirler</h6>
                                        <small class="text-muted">Shanghai ve Pekin</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-university mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Kültür Turları</h6>
                                        <small class="text-muted">Tapınak ve müze ziyaretleri</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-utensils mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Gastronomi</h6>
                                        <small class="text-muted">Çin mutfağı deneyimi</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-handshake mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">İş Toplantıları</h6>
                                        <small class="text-muted">Ticari görüşmeler</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-heart mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Aile Ziyareti</h6>
                                        <small class="text-muted">Akraba ziyaretleri</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Çin Vizesi Başvurusu İçin Gerekli Belgeler</h3>
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
                                                    <small class="text-muted">6 ay geçerlilik + boş sayfa</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Vize Başvuru Formu</strong><br>
                                                    <small class="text-muted">Online doldurulmuş form</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Fotoğraf</strong><br>
                                                    <small class="text-muted">33x48 mm renkli ve güncel</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Banka Hesap Özeti</strong><br>
                                                    <small class="text-muted">Son 3 aylık özet</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Sigortası</strong><br>
                                                    <small class="text-muted">Çin için geçerli sigorta</small>
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
                                                    <small class="text-muted">Gidiş-dönüş rezervasyon</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>İş Belgesi</strong><br>
                                                    <small class="text-muted">Çalışma durumu belgesi</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Programı</strong><br>
                                                    <small class="text-muted">Detaylı gezi planı</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Davetiye</strong><br>
                                                    <small class="text-muted">İş vizesi için Çin'den davet</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Başvuru Süreci -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Çin Vizesi Başvuru Süreci</h3>
                        <div class="process-steps">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">1</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Online Ön Başvuru</h5>
                                        <p class="text-muted mb-0">Çin vize formu online doldurma</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">2</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Belge Hazırlığı</h5>
                                        <p class="text-muted mb-0">Gerekli evrakları toplama</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">3</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Randevu Alma</h5>
                                        <p class="text-muted mb-0">Başvuru merkezi randevusu</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">4</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Başvuru Merkezi</h5>
                                        <p class="text-muted mb-0">Şahsen başvuru ve biyometrik</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">5</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">İşlem Takibi</h5>
                                        <p class="text-muted mb-0">Online başvuru takip sistemi</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">6</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Pasaport Teslim</h5>
                                        <p class="text-muted mb-0">Vize ile pasaport teslim alma</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="chinaVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Çin vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#chinaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Çin turist vizesi başvuruları genellikle 5-7 iş günü içinde sonuçlanır. Normal işlem süresi 4-5 iş günüdür. Acil durumlar için ekspres işlem seçeneği ile 2-3 iş günü içinde vize alabilirsiniz.
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
                                                    Çin vizesi ile ne kadar kalabilirim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#chinaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Çin L Visa (turist vizesi) ile maksimum 30 gün kalabilirsiniz. Vize tek giriş veya çift giriş olarak düzenlenebilir. Vize geçerlilik süresi genellikle 90 gündür ve bu süre içinde Çin'e girebilirsiniz.
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
                                                    Çin vizesi için biyometrik veri verme zorunlu mu?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#chinaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Evet, 14-70 yaş arası tüm başvuru sahipleri için biyometrik veri (parmak izi) verme zorunludur. Bu işlem başvuru merkezinde gerçekleştirilir ve yaklaşık 5 dakika sürer. 14 yaş altı ve 70 yaş üstü muaftır.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq4" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Çin'de internet ve sosyal medya kullanabilir miyim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq4" class="collapse" data-parent="#chinaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Çin'de bazı sosyal medya platformları (Facebook, Instagram, Twitter, WhatsApp) ve Google hizmetleri engellidir. Seyahat öncesi VPN servisi almanızı öneririz. Yerel uygulamalar olan WeChat kullanılabilir.
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
                            <h4 class="mb-0 text-white">Çin Vizesi</h4>
                        </div>

                        <div class="pricing-body p-4">
                            <!-- Vize Özellikleri -->
                            <div class="visa-specs mb-5">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-calendar" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">30</strong>
                                                <small class="d-block text-muted">gün kalış</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="fas fa-hourglass-half" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">5-7</strong>
                                                <small class="d-block text-muted">iş günü</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-check-circle" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">90</strong>
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
                                        <span>Tek/çift giriş seçeneği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Otel rezervasyon desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Uçak bileti desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Form doldurma desteği</span>
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

                    <!-- Önemli Bilgi Kartı -->
                    <div class="info-alert-card mb-4" style="background: #fff3cd; border-radius: 15px; border: 1px solid #ffc107; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-exclamation-triangle mr-2" style="color: #ffc107;"></i>Önemli Bilgiler
                        </h5>
                        <div class="info-list">
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(255, 193, 7, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #ffc107; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Çin Alfabesi</strong>
                                        <p class="text-muted mb-0 small">İngilizce ve Türkçe yaygın değildir. Temel Çince kelimeleri öğrenin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(255, 193, 7, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #ffc107; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Nakit Para</strong>
                                        <p class="text-muted mb-0 small">Çin'de dijital ödeme yaygındır. WeChat Pay veya Alipay kullanın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(255, 193, 7, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #ffc107; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">VPN Kullanımı</strong>
                                        <p class="text-muted mb-0 small">Google, sosyal medya için VPN servisine ihtiyacınız var.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #ffc107; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Otel Kayıt</strong>
                                        <p class="text-muted mb-0 small">Tüm otellerde polis kayıt formu doldurmanız gerekir.</p>
                                    </div>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Çin Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">Profesyonel ekibimizin Çin vize deneyimi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">5200+</span>
                        </div>
                        <p class="text-muted mb-0">Çin Vizesi Başvurusu</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%95</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">6</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">16+</span>
                        </div>
                        <p class="text-muted mb-0">Yıllık Deneyim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Çin Hakkında Bilgi -->
    <section class="ftco-section" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Çin'de Mutlaka Görülmesi Gerekenler</h3>
                    <p class="text-muted">Çin vizeniz ile keşfedebileceğiniz tarihi ve kültürel yerler</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-fort-awesome" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Büyük Çin Seddi</h5>
                        <p class="text-muted text-center">Dünyanın yedi harikasından biri, 21.000 km uzunluğunda muhteşem tarihi yapı.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-landmark" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Yasak Şehir - Pekin</h5>
                        <p class="text-muted text-center">Ming ve Qing hanedanlarının 500 yıllık sarayı, dünyanın en büyük saray kompleksi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-horse" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Terrakota Ordusu - Xian</h5>
                        <p class="text-muted text-center">8000 kil asker heykeli ile Çin'in ilk imparatorunun mezar kompleksi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-city" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Shanghai - Bund</h5>
                        <p class="text-muted text-center">Modern gökdelenler ve tarihi Avrupa mimarisi bir arada, Çin'in finans merkezi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-mountain" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Zhangjiajie Milli Parkı</h5>
                        <p class="text-muted text-center">Avatar filminin ilham kaynağı, sütun şeklindeki kayalıkları ile doğa harikası.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-paw" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Panda Araştırma Merkezi</h5>
                        <p class="text-muted text-center">Chengdu'da dev pandaları doğal ortamlarında görme fırsatı.</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Çin Rüyanızı Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman ekibimiz ve hızlı hizmetimizle Çin vizenizi güvenle alın.
                            Binlerce yıllık tarihi ve modern teknolojisi ile Çin sizi bekliyor!
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
                                        <i class="icon-calendar mr-2"></i>Randevu Alın
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
                                        <span>%95 Başarı Oranı</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-bolt mr-2"></i>
                                        <span>Hızlı İşlem</span>
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

.step-card:hover {
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
    offset:100
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

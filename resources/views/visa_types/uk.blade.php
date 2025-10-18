@extends('layouts.app')

@section('title', 'İngiltere Vizesi - UK Standard Visitor Visa | Travellines Turizm')
@section('meta_description', 'İngiltere vizesi başvurunuzu profesyonel ekibimizle yapın. UK Standard Visitor Visa için evrak hazırlığı ve randevu organizasyonu, 6 ay kalış imkanı.')
@section('keywords', 'ingiltere vizesi, uk vizesi, ingiltere turist vizesi, standard visitor visa, uk visa, birleşik krallık vizesi')

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
                            <span style="color: rgba(255,255,255,0.6);">İngiltere Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">İngiltere Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            UK Standard Visitor Visa ile Birleşik Krallık'ı keşfedin
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
                    <!-- İngiltere Vizesi Tanımı -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">İngiltere Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                İngiltere Standard Visitor Visa, Birleşik Krallık'a turistik, iş veya aile ziyareti amaçlı seyahatler için kullanılan vize türüdür. 6 aya kadar kalış imkanı sunar ve çoklu giriş için uygulanabilir.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Bu vize ile İngiltere, İskoçya, Galler ve Kuzey İrlanda'yı ziyaret edebilir, turistik geziler yapabilir, iş toplantılarına katılabilir veya aile ve arkadaşlarınızı ziyaret edebilirsiniz. Başvuru süreci biyometrik veri vermeyi içerir.
                            </p>
                        </div>
                    </div>

                    <!-- İngiltere Vizesi Avantajları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">İngiltere Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-map-marked-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Tüm UK'ye Erişim</h5>
                                    <p class="text-muted">İngiltere, İskoçya, Galler ve Kuzey İrlanda'yı tek vize ile gezin.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-calendar-check" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">6 Ay Kalış</h5>
                                    <p class="text-muted">180 güne kadar kesintisiz kalış imkanı.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-file-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Kolay Başvuru</h5>
                                    <p class="text-muted">Online başvuru sistemi ile hızlı ve pratik süreç.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-users" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Çok Amaçlı</h5>
                                    <p class="text-muted">Turizm, iş ve aile ziyaretleri için kullanılabilir.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vize Kullanım Amaçları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">İngiltere Vizesi Kullanım Amaçları</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-camera mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Turizm</h6>
                                        <small class="text-muted">Tatil ve turistik geziler</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-handshake mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">İş Toplantıları</h6>
                                        <small class="text-muted">Müzakere ve konferans</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-heart mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Aile Ziyareti</h6>
                                        <small class="text-muted">Akraba ve arkadaş ziyaretleri</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-graduation-cap mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Kısa Süreli Eğitim</h6>
                                        <small class="text-muted">30 günden kısa kurslar</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-hospital mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Medikal Tedavi</h6>
                                        <small class="text-muted">Özel tıbbi tedavi</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-plane mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Transit</h6>
                                        <small class="text-muted">48 saate kadar transit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">İngiltere Vizesi Başvurusu İçin Gerekli Belgeler</h3>
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
                                                    <strong>Online Başvuru</strong><br>
                                                    <small class="text-muted">Doldurulmuş başvuru formu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Biyometrik Fotoğraf</strong><br>
                                                    <small class="text-muted">Renkli ve güncel</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Banka Hesap Özeti</strong><br>
                                                    <small class="text-muted">Son 6 aylık özet</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Sigortası</strong><br>
                                                    <small class="text-muted">UK için geçerli sigorta</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="icon-briefcase mr-2"></i>Destek Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>İş Belgesi</strong><br>
                                                    <small class="text-muted">Çalışma ve maaş bordrosu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Konaklama Belgesi</strong><br>
                                                    <small class="text-muted">Otel veya davet mektubu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Uçak Bilet Rezervasyonu</strong><br>
                                                    <small class="text-muted">Gidiş-dönüş rezervasyon</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Programı</strong><br>
                                                    <small class="text-muted">Detaylı itinerary</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Sponsor Mektubu</strong><br>
                                                    <small class="text-muted">Varsa davet mektubu</small>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">İngiltere Vizesi Başvuru Süreci</h3>
                        <div class="process-timeline">
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">1</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Online Başvuru</h5>
                                            <p class="text-muted mb-0">UK Visa başvuru formunu online olarak doldurun ve başvuru ücretini ödeyin.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">2</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Randevu Alma</h5>
                                            <p class="text-muted mb-0">Vize başvuru merkezinden biyometrik veri verme randevusu alın.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">3</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Belge Hazırlığı</h5>
                                            <p class="text-muted mb-0">Gerekli tüm belgeleri toplayın ve düzenli şekilde hazırlayın.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">4</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Biyometrik Veri</h5>
                                            <p class="text-muted mb-0">Başvuru merkezinde parmak izi ve fotoğraf verme işlemi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">5</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">İşlem Takibi</h5>
                                            <p class="text-muted mb-0">Başvurunuzu online sistemden takip edin (15-20 iş günü).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">6</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Pasaport Teslim</h5>
                                            <p class="text-muted mb-0">Onaylanan vizeniz ile pasaportunuzu teslim alın.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="ukVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    İngiltere vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#ukVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                İngiltere Standard Visitor Visa başvuruları genellikle 15-20 iş günü içinde sonuçlanır. Yoğun dönemlerde bu süre 3 haftaya kadar uzayabilir. Acil durumlar için öncelikli hizmet seçeneği mevcuttur.
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
                                                    İngiltere vizesi ile ne kadar süre kalabilirim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#ukVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Standard Visitor Visa ile 6 aya kadar (180 gün) İngiltere'de kalabilirsiniz. Vize geçerlilik süresinde çoklu giriş yapmanız mümkündür ancak her ziyarette maksimum 6 ay kalma hakkınız vardır.
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
                                                    Biyometrik veri verme nedir?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#ukVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Biyometrik veri verme, parmak izi tarama ve dijital fotoğraf çekimi işlemidir. Bu veriler vize başvuru merkezinde alınır ve güvenlik kontrolü için kullanılır. İşlem yaklaşık 10-15 dakika sürer.
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
                                                    İngiltere vizesi ile çalışabilir miyim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq4" class="collapse" data-parent="#ukVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Hayır, Standard Visitor Visa ile İngiltere'de çalışamazsınız. Bu vize sadece turizm, iş toplantıları, aile ziyaretleri ve kısa süreli eğitim programları için geçerlidir. Çalışmak için ayrı bir çalışma vizesi almanız gerekir.
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
                            <h4 class="mb-0 text-white">İngiltere Vizesi</h4>
                        </div>

                        <div class="pricing-body p-4">
                            <!-- Vize Özellikleri -->
                            <div class="visa-specs mb-5">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-calendar" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">6 ay</strong>
                                                <small class="d-block text-muted">kalış</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="fas fa-hourglass-half" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">15-20</strong>
                                                <small class="d-block text-muted">iş günü</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-check-circle" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">180</strong>
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
                                        <span>Online başvuru desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Evrak kontrolü</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Randevu organizasyonu</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Biyometrik süreç desteği</span>
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

                    <!-- Önemli Notlar Kartı -->
                    <div class="notes-card mb-4" style="background: #fff8f0; border-radius: 15px; border: 1px solid #f8b600; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-exclamation-circle mr-2" style="color: #f8b600;"></i>Önemli Notlar
                        </h5>
                        <div class="notes-list">
                            <div class="note-item mb-3 pb-3" style="border-bottom: 1px solid rgba(248, 182, 0, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Başvuru Zamanı</strong>
                                        <p class="text-muted mb-0 small">Seyahat tarihinden 3 ay önce başvuru yapmanız önerilir.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="note-item mb-3 pb-3" style="border-bottom: 1px solid rgba(248, 182, 0, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Banka Bakiyesi</strong>
                                        <p class="text-muted mb-0 small">Kalış süreniz için yeterli mali kaynak kanıtlamalısınız.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="note-item mb-3 pb-3" style="border-bottom: 1px solid rgba(248, 182, 0, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Tuberculosis Test</strong>
                                        <p class="text-muted mb-0 small">6 aydan fazla kalacaksanız tüberküloz testi gereklidir.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="note-item">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">İngilizce Belge</strong>
                                        <p class="text-muted mb-0 small">Türkçe belgeler İngilizce'ye çevrilmeli ve noterce onaylanmalı.</p>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">İngiltere Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">Profesyonel ekibimizin UK vize deneyimi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">4200+</span>
                        </div>
                        <p class="text-muted mb-0">UK Vizesi Başvurusu</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%94</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">18</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">12+</span>
                        </div>
                        <p class="text-muted mb-0">Yıllık Deneyim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- İngiltere Hakkında Bilgi -->
    <section class="ftco-section" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">İngiltere'de Mutlaka Görülmesi Gerekenler</h3>
                    <p class="text-muted">UK vizeniz ile keşfedebileceğiniz tarihi ve modern yerler</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-landmark" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Big Ben & Westminster</h5>
                        <p class="text-muted text-center">Londra'nın simgesi Big Ben ve Westminster Sarayı. Thames Nehri kıyısında tarihi bir yolculuk.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-crown" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Buckingham Sarayı</h5>
                        <p class="text-muted text-center">Kraliyet ailesinin resmi konutu ve nöbetçi değişim töreninin muhteşem gösterisi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-eye" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">London Eye</h5>
                        <p class="text-muted text-center">135 metre yüksekliğinde dönme dolap ile Londra'nın panoramik manzarası.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-university" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">British Museum</h5>
                        <p class="text-muted text-center">Dünyanın en büyük müzelerinden biri. 8 milyon eser ile tarihe yolculuk.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-fort-awesome" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Tower of London</h5>
                        <p class="text-muted text-center">11. yüzyıldan kalma tarihi kale ve Kraliyet Mücevherleri koleksiyonu.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-mountain" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">İskoçya Highlands</h5>
                        <p class="text-muted text-center">Muhteşem doğal güzellikler, tarihi kaleler ve geleneksel İskoç kültürü.</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">İngiltere Rüyanızı Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman ekibimiz ve profesyonel hizmetimizle İngiltere vizenizi güvenle alın.
                            Tarihi ve modern İngiltere sizi bekliyor!
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
                                        <span>%94 Başarı Oranı</span>
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

.timeline-content {
    transition: all 0.3s ease;
}

.timeline-content:hover {
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
    transform: translateX(5px);
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

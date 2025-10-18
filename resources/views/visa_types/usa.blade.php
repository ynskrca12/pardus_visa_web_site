@extends('layouts.app')

@section('title', 'Amerika Vizesi - ABD B1/B2 Turist ve İş Vizesi | Travellines Turizm')
@section('meta_description', 'Amerika vizesi başvurunuzu profesyonel ekibimizle yapın. ABD B1/B2 vizesi için mülakat hazırlığı, 10 yıl geçerli çoklu giriş vizesi.')
@section('keywords', 'amerika vizesi, abd vizesi, usa visa, b1 b2 vizesi, amerika turist vizesi, amerika iş vizesi, ds-160')

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
                            <span style="color: rgba(255,255,255,0.6);">Amerika Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Amerika Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            ABD B1/B2 vizesi ile Amerika Birleşik Devletleri'ni keşfedin
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
                    <!-- Amerika Vizesi Tanımı -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Amerika Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Amerika B1/B2 vizesi, Amerika Birleşik Devletleri'ne turistik (B2) veya ticari (B1) amaçlarla seyahat etmek için gerekli olan vize türüdür. 10 yıla kadar geçerlilik süresi ile çoklu giriş imkanı sunar.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                B1 vizesi iş toplantıları, konferanslar ve müzakereler için, B2 vizesi ise tatil, turistik geziler, tıbbi tedavi ve aile ziyaretleri için kullanılır. Çoğu başvuru sahibine B1/B2 kombine vizesi verilir.
                            </p>
                        </div>
                    </div>

                    <!-- Amerika Vizesi Avantajları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Amerika Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-calendar-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">10 Yıl Geçerlilik</h5>
                                    <p class="text-muted">Tek başvuru ile 10 yıl boyunca geçerli vize alma imkanı.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-globe-americas" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Çoklu Giriş</h5>
                                    <p class="text-muted">10 yıl boyunca sınırsız sayıda ABD'ye giriş yapabilirsiniz.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-briefcase" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">B1/B2 Kombine</h5>
                                    <p class="text-muted">Hem iş hem de turizm amaçlı kullanılabilir tek vize.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-user-check" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Mülakat Hazırlığı</h5>
                                    <p class="text-muted">Profesyonel mülakat danışmanlığı ve hazırlık desteği.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vize Türleri -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">B1/B2 Vize Türleri</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="business-type-item p-4" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease; height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-business-time mr-3" style="font-size: 2.5em; color: #2c3e50;"></i>
                                            <div>
                                                <h5 style="font-weight: 600; color: #2c3e50;">B1 - İş Vizesi</h5>
                                                <ul class="text-muted mb-0" style="padding-left: 20px;">
                                                    <li>İş toplantıları ve müzakereler</li>
                                                    <li>Konferans ve seminer katılımı</li>
                                                    <li>Ticari sözleşme görüşmeleri</li>
                                                    <li>Fuar ve sergi ziyaretleri</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="business-type-item p-4" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease; height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-plane-departure mr-3" style="font-size: 2.5em; color: #2c3e50;"></i>
                                            <div>
                                                <h5 style="font-weight: 600; color: #2c3e50;">B2 - Turist Vizesi</h5>
                                                <ul class="text-muted mb-0" style="padding-left: 20px;">
                                                    <li>Tatil ve turistik geziler</li>
                                                    <li>Aile ve arkadaş ziyaretleri</li>
                                                    <li>Tıbbi tedavi amaçlı</li>
                                                    <li>Sosyal ve kültürel etkinlikler</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Amerika Vizesi Başvurusu İçin Gerekli Belgeler</h3>
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
                                                    <strong>DS-160 Formu</strong><br>
                                                    <small class="text-muted">Online başvuru formu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Fotoğraf</strong><br>
                                                    <small class="text-muted">5x5 cm beyaz fon</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Mülakat Randevusu</strong><br>
                                                    <small class="text-muted">Randevu onay sayfası</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>SEVIS Ücreti</strong><br>
                                                    <small class="text-muted">Ödeme makbuzu</small>
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
                                                    <strong>Mali Durum Belgesi</strong><br>
                                                    <small class="text-muted">Banka hesap özetleri</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>İş Belgesi</strong><br>
                                                    <small class="text-muted">İş yeri onay belgesi</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Mülk Belgeleri</strong><br>
                                                    <small class="text-muted">Tapu, araç kayıt belgesi</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Planı</strong><br>
                                                    <small class="text-muted">Uçak ve otel rezervasyonu</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Önceki Seyahatler</strong><br>
                                                    <small class="text-muted">Eski pasaport ve vizeler</small>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Amerika Vizesi Başvuru Süreci</h3>
                        <div class="process-steps">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">1</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">DS-160 Formu</h5>
                                        <p class="text-muted mb-0">Online başvuru formu doldurma ve onay alma</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">2</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Ücret Ödeme</h5>
                                        <p class="text-muted mb-0">SEVIS ve vize başvuru ücretlerinin ödenmesi</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">3</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Randevu Alma</h5>
                                        <p class="text-muted mb-0">Konsolosluk mülakat randevusu alınması</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">4</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Belge Hazırlığı</h5>
                                        <p class="text-muted mb-0">Gerekli tüm belgelerin toplanması</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">5</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Mülakat</h5>
                                        <p class="text-muted mb-0">Konsoloslukta yüz yüze görüşme</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">6</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Vize Onayı</h5>
                                        <p class="text-muted mb-0">Pasaportun kargo ile teslim alınması</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="usaVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Amerika vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#usaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Amerika vizesi başvuru süreci genellikle 30-60 gün arasında tamamlanır. Mülakat sonrası onay aldıysanız, pasaportunuz 7-10 iş günü içinde kargo ile size ulaştırılır. Yoğun dönemlerde bu süreler uzayabilir.
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
                                                    Mülakatta nelere dikkat etmeliyim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#usaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Mülakatta dürüst ve net cevaplar verin, Türkiye'ye dönüş bağlarınızı güçlü şekilde gösterin (iş, aile, mülk), seyahat amacınızı açık belirtin ve mali durumunuzu kanıtlayan belgeleri hazır bulundurun. Sakin ve özgüvenli olun.
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
                                                    10 yıllık vize ile her seferinde ne kadar kalabilirim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#usaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                10 yıllık B1/B2 vizesi, vize geçerlilik süresini gösterir. Her girişte maksimum 6 ay kalma hakkınız vardır ancak gümrük memuru daha kısa süre de verebilir. 10 yıl boyunca çoklu giriş yapabilirsiniz.
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
                                                    Vize reddedilirse ne yapmalıyım?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq4" class="collapse" data-parent="#usaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Vize reddedilirse red gerekçesini öğrenin, eksik belgeleri tamamlayın ve durumunuzda değişiklik olduktan sonra (terfi, evlilik, mülk edinimi gibi) yeniden başvurabilirsiniz. Profesyonel danışmanlık almanızı öneririz.
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
                            <h4 class="mb-0 text-white">Amerika Vizesi</h4>
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
                                                <small class="d-block text-muted">her girişte</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="fas fa-hourglass-half" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">30-60</strong>
                                                <small class="d-block text-muted">gün süreç</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-check-circle" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">10 yıl</strong>
                                                <small class="d-block text-muted">geçerli</small>
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
                                        <span>DS-160 form desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Mülakat hazırlığı</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Belge kontrolü</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Randevu organizasyonu</span>
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

                    <!-- Mülakat İpuçları Kartı -->
                    <div class="tips-card mb-4" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-lightbulb mr-2" style="color: #f8b600;"></i>Mülakat İpuçları
                        </h5>
                        <div class="tips-list">
                            <div class="tip-item mb-3 pb-3" style="border-bottom: 1px solid #e9ecef;">
                                <div class="d-flex align-items-start">
                                    <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Zamanında Gidin</strong>
                                        <p class="text-muted mb-0 small">Randevu saatinden 15-20 dakika önce konsolosluğa varın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tip-item mb-3 pb-3" style="border-bottom: 1px solid #e9ecef;">
                                <div class="d-flex align-items-start">
                                    <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Dürüst Olun</strong>
                                        <p class="text-muted mb-0 small">Tüm soruları dürüstçe ve açık şekilde cevaplayın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tip-item mb-3 pb-3" style="border-bottom: 1px solid #e9ecef;">
                                <div class="d-flex align-items-start">
                                    <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Belgeler Hazır</strong>
                                        <p class="text-muted mb-0 small">Tüm destekleyici belgeleri düzenli şekilde hazırlayın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tip-item">
                                <div class="d-flex align-items-start">
                                    <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Özgüvenli Olun</strong>
                                        <p class="text-muted mb-0 small">Sakin ve güvenli bir şekilde cevap verin.</p>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Amerika Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">Uzman ekibimizin kanıtlanmış deneyimi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">3500+</span>
                        </div>
                        <p class="text-muted mb-0">ABD Vizesi Başvurusu</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%92</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">15+</span>
                        </div>
                        <p class="text-muted mb-0">Yıllık Deneyim</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">1000+</span>
                        </div>
                        <p class="text-muted mb-0">Mülakat Danışmanlığı</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Red Nedenleri ve Çözümler -->
    <section class="ftco-section" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Vize Reddi Yaşamamak İçin</h3>
                    <p class="text-muted">En sık karşılaşılan red nedenleri ve önleme yolları</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="reason-card" style="background: #fff8f0; padding: 25px; border-radius: 12px; border-left: 4px solid #f8b600; height: 100%;">
                        <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 15px;">
                            <i class="fas fa-exclamation-triangle mr-2" style="color: #f8b600;"></i>Zayıf Mali Durum
                        </h5>
                        <p class="text-muted mb-3">Yetersiz banka bakiyesi veya düzensiz gelir</p>
                        <div class="solution" style="background: white; padding: 15px; border-radius: 8px;">
                            <strong style="color: #28a745;">Çözüm:</strong>
                            <p class="mb-0 text-muted small">Son 6 aylık düzenli gelir gösteren banka hesap özeti, mülk belgesi ve sponsorluk mektubu sunun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="reason-card" style="background: #fff8f0; padding: 25px; border-radius: 12px; border-left: 4px solid #f8b600; height: 100%;">
                        <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 15px;">
                            <i class="fas fa-exclamation-triangle mr-2" style="color: #f8b600;"></i>Zayıf Türkiye Bağları
                        </h5>
                        <p class="text-muted mb-3">Dönüş garantisi gösterememe</p>
                        <div class="solution" style="background: white; padding: 15px; border-radius: 8px;">
                            <strong style="color: #28a745;">Çözüm:</strong>
                            <p class="mb-0 text-muted small">İş sözleşmesi, tapu belgesi, aile bağları, eğitim durumu gibi güçlü kanıtlar sunun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="reason-card" style="background: #fff8f0; padding: 25px; border-radius: 12px; border-left: 4px solid #f8b600; height: 100%;">
                        <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 15px;">
                            <i class="fas fa-exclamation-triangle mr-2" style="color: #f8b600;"></i>Belirsiz Seyahat Planı
                        </h5>
                        <p class="text-muted mb-3">Net olmayan seyahat amacı</p>
                        <div class="solution" style="background: white; padding: 15px; border-radius: 8px;">
                            <strong style="color: #28a745;">Çözüm:</strong>
                            <p class="mb-0 text-muted small">Detaylı seyahat programı, otel rezervasyonu ve gidiş-dönüş uçak bileti hazırlayın.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="reason-card" style="background: #fff8f0; padding: 25px; border-radius: 12px; border-left: 4px solid #f8b600; height: 100%;">
                        <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 15px;">
                            <i class="fas fa-exclamation-triangle mr-2" style="color: #f8b600;"></i>Yetersiz Belge
                        </h5>
                        <p class="text-muted mb-3">Eksik veya hatalı belgeler</p>
                        <div class="solution" style="background: white; padding: 15px; border-radius: 8px;">
                            <strong style="color: #28a745;">Çözüm:</strong>
                            <p class="mb-0 text-muted small">Tüm belgeleri eksiksiz, güncel ve doğru şekilde hazırlayın. Profesyonel destek alın.</p>
                        </div>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Amerika Rüyanızı Gerçeğe Dönüştürün</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman ekibimiz ve kanıtlanmış başarı oranımızla Amerika vizenizi güvenle alın.
                            Mülakat hazırlığından vize onayına kadar yanınızdayız!
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
                                        <i class="icon-calendar mr-2"></i>Ücretsiz Danışmanlık
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
                                        <span>%92 Başarı Oranı</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-user-graduate mr-2"></i>
                                        <span>Mülakat Eğitimi</span>
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

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.reason-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(248, 182, 0, 0.2) !important;
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

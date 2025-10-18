@extends('layouts.app')

@section('title', 'Rusya Vizesi - Rusya Turist Vizesi ve İş Vizesi | Travellines Turizm')
@section('meta_description', 'Rusya vizesi başvurunuzu profesyonel ekibimizle yapın. Turist voucher ve davetiye desteği ile 7-10 iş günü içinde Rusya vizesi.')
@section('keywords', 'rusya vizesi, russia visa, rusya turist vizesi, moskova vizesi, rusya iş vizesi, turist voucher')

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
                            <span style="color: rgba(255,255,255,0.6);">Rusya Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Rusya Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Rusya Federasyonu turist vizesi ile Moskova ve St. Petersburg'u keşfedin
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
                    <!-- Rusya Vizesi Tanımı -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Rusya Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Rusya turist vizesi, Rusya Federasyonu'na turistik amaçlı seyahatler için kullanılan vize türüdür. 30 güne kadar kalış imkanı sunar ve turist voucher ile başvuru yapılır.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Bu vize ile Moskova'nın tarihi meydanlarını, St. Petersburg'un saraylarını, Altın Halka kasabalarını ve Rusya'nın zengin kültürünü keşfedebilirsiniz. Başvuru süreci, turist voucher ve otel rezervasyonu ile hızlı şekilde tamamlanır.
                            </p>
                        </div>
                    </div>

                    <!-- Rusya Vizesi Avantajları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Rusya Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-bolt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Hızlı İşlem</h5>
                                    <p class="text-muted">7-10 iş günü içinde vize onayı ve teslim.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-file-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Kolay Başvuru</h5>
                                    <p class="text-muted">Basit evrak ile kolayca başvuru yapabilirsiniz.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-ticket-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Voucher Desteği</h5>
                                    <p class="text-muted">Turist voucher ve davetiye hazırlama desteği.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-shield-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Sigorta Dahil</h5>
                                    <p class="text-muted">Rusya için geçerli seyahat sigortası desteği.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vize Türleri -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Rusya Vize Türleri</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="business-type-item p-4" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease; height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-camera-retro mr-3" style="font-size: 2.5em; color: #2c3e50;"></i>
                                            <div>
                                                <h5 style="font-weight: 600; color: #2c3e50;">Turist Vizesi</h5>
                                                <p class="text-muted mb-2">Tatil ve turistik seyahatler için</p>
                                                <ul class="text-muted mb-0" style="padding-left: 20px; font-size: 14px;">
                                                    <li>30 gün kalış</li>
                                                    <li>Tek veya çift giriş</li>
                                                    <li>Turist voucher gerekli</li>
                                                    <li>7-10 gün işlem süresi</li>
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
                                                <h5 style="font-weight: 600; color: #2c3e50;">İş Vizesi</h5>
                                                <p class="text-muted mb-2">İş toplantıları ve ticari faaliyetler</p>
                                                <ul class="text-muted mb-0" style="padding-left: 20px; font-size: 14px;">
                                                    <li>30-90 gün kalış</li>
                                                    <li>Çoklu giriş imkanı</li>
                                                    <li>İş davetiye gerekli</li>
                                                    <li>10-15 gün işlem süresi</li>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Rusya Vizesi Kullanım Amaçları</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-landmark mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Turistik Geziler</h6>
                                        <small class="text-muted">Moskova ve St. Petersburg</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-users mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Grup Turları</h6>
                                        <small class="text-muted">Rehberli kültür turları</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-ship mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Cruise Turları</h6>
                                        <small class="text-muted">Gemi ile seyahat</small>
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
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-university mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Kültür Etkinlikleri</h6>
                                        <small class="text-muted">Konser ve festival</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Rusya Vizesi Başvurusu İçin Gerekli Belgeler</h3>
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
                                                    <small class="text-muted">6 ay geçerlilik + 2 boş sayfa</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Vize Başvuru Formu</strong><br>
                                                    <small class="text-muted">Online veya elle doldurulmuş</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Fotoğraf</strong><br>
                                                    <small class="text-muted">3.5x4.5 cm renkli ve güncel</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Sigortası</strong><br>
                                                    <small class="text-muted">Rusya için geçerli sigorta</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="icon-briefcase mr-2"></i>Özel Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Turist Voucher</strong><br>
                                                    <small class="text-muted">Rus seyahat acentesinden</small>
                                                </div>
                                            </li>
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
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Davetiye Mektubu</strong><br>
                                                    <small class="text-muted">İş vizesi için gerekli</small>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Rusya Vizesi Başvuru Süreci</h3>
                        <div class="process-timeline">
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">1</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Turist Voucher Alımı</h5>
                                            <p class="text-muted mb-0">Rus seyahat acentesinden turist voucher ve otel onay belgesi alınması.</p>
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
                                            <h5 style="font-weight: 600; color: #2c3e50;">Başvuru Formu</h5>
                                            <p class="text-muted mb-0">Rusya vize başvuru formunu doldurun ve imzalayın.</p>
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
                                            <p class="text-muted mb-0">Tüm gerekli belgeleri toplayın ve kontrol edin.</p>
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
                                            <h5 style="font-weight: 600; color: #2c3e50;">Konsolosluk Başvurusu</h5>
                                            <p class="text-muted mb-0">Rusya konsolosluğuna şahsen başvuru yapın.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number" style="width: 70px; height: 70px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">5</div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="timeline-content" style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #dcdcdc;">
                                            <h5 style="font-weight: 600; color: #2c3e50;">Vize Teslim</h5>
                                            <p class="text-muted mb-0">7-10 iş günü içinde vizenizi teslim alın.</p>
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
                            <div class="accordion" id="russiaVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Turist voucher nedir ve nasıl alınır?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#russiaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Turist voucher, Rusya'da kalacağınız otelin ve seyahat programınızın onaylandığını gösteren resmi bir belgedir. Bu belgeyi Rusya Turizm Bakanlığı'na kayıtlı Rus seyahat acenteleri düzenler. Biz size bu konuda tam destek sağlıyoruz.
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
                                                    Rusya vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#russiaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Rusya turist vizesi başvuruları genellikle 7-10 iş günü içinde sonuçlanır. Acil durumlarda ekspres işlem ile 3-5 iş günü içinde vize almanız mümkündür. Tatil dönemlerinde süreleruzayabilir.
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
                                                    Rusya vizesi ile ne kadar kalabilirim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#russiaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Rusya turist vizesi ile maksimum 30 gün kalabilirsiniz. Vize tek giriş veya çift giriş olarak düzenlenebilir. Daha uzun süreli kalış için iş vizesi veya öğrenci vizesi başvurusu yapmanız gerekir.
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
                                                    Rusya'da kayıt yaptırmak zorunlu mu?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq4" class="collapse" data-parent="#russiaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Evet, Rusya'ya vardıktan sonra 7 iş günü içinde kayıt (registration) yaptırmanız gerekmektedir. Otellerde kalan turistler için bu işlem otomatik olarak otel tarafından yapılır. Akraba yanında kalanlar yerel polis merkezine başvurmalıdır.
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
                            <h4 class="mb-0 text-white">Rusya Vizesi</h4>
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
                                                <strong style="font-size: 16px;">7-10</strong>
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
                                        <span>Turist voucher desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Otel rezervasyon onayı</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Seyahat sigortası</span>
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

                    <!-- Voucher Bilgi Kartı -->
                    <div class="voucher-card mb-4" style="background: #fff8f0; border-radius: 15px; border: 1px solid #f8b600; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-ticket-alt mr-2" style="color: #f8b600;"></i>Turist Voucher Bilgilendirme
                        </h5>
                        <div class="voucher-info">
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(248, 182, 0, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Zorunlu Belge</strong>
                                        <p class="text-muted mb-0 small">Turist voucher olmadan Rusya vizesi başvurusu yapılamaz.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(248, 182, 0, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Referans Numarası</strong>
                                        <p class="text-muted mb-0 small">Voucher'da özel referans numarası bulunur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(248, 182, 0, 0.3);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Tam Destek</strong>
                                        <p class="text-muted mb-0 small">Voucher alımında size tam destek sağlıyoruz.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-info-circle mr-3 mt-1" style="color: #f8b600; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Hızlı Temin</strong>
                                        <p class="text-muted mb-0 small">1-2 iş günü içinde voucher temin edilir.</p>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Rusya Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">Profesyonel ekibimizin Rusya vize deneyimi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">6500+</span>
                        </div>
                        <p class="text-muted mb-0">Rusya Vizesi Başvurusu</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%96</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">8</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">18+</span>
                        </div>
                        <p class="text-muted mb-0">Yıllık Deneyim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rusya Hakkında Bilgi -->
    <section class="ftco-section" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Rusya'da Mutlaka Görülmesi Gerekenler</h3>
                    <p class="text-muted">Rusya vizeniz ile keşfedebileceğiniz tarihi ve kültürel yerler</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-church" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Kızıl Meydan - Moskova</h5>
                        <p class="text-muted text-center">Rusya'nın kalbi, tarihi Kremlin Sarayı ve Lenin Mozolesi ile dünyaca ünlü meydan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-crown" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Hermitage Müzesi</h5>
                        <p class="text-muted text-center">St. Petersburg'da 3 milyon eserle dünyanın en büyük müzelerinden biri.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-landmark" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Peterhof Sarayı</h5>
                        <p class="text-muted text-center">Rusya'nın Versailles'ı olarak bilinen muhteşem yaz sarayı ve bahçeleri.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-building" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Bolşoy Tiyatrosu</h5>
                        <p class="text-muted text-center">Dünyaca ünlü bale ve opera gösterileriyle tarihi tiyatro binası.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-mosque" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Aziz Basil Katedrali</h5>
                        <p class="text-muted text-center">Renkli kubbesiyle Moskova'nın sembolü olan 16. yüzyıl şaheseri.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-subway" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Moskova Metrosu</h5>
                        <p class="text-muted text-center">Saray gibi istasyonları ile dünyanın en güzel metro sistemi.</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Rusya Rüyanızı Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman ekibimiz ve hızlı hizmetimizle Rusya vizenizi güvenle alın.
                            Tarihi ve kültürel zenginlikleriyle Rusya sizi bekliyor!
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
                                        <span>%96 Başarı Oranı</span>
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

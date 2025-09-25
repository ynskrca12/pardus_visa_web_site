@extends('layouts.app')

@section('title', 'Aile Birleşimi Vizesi - Eş ve Çocuk Birleşim Vizesi | Travellines Turizm')
@section('meta_description', 'Aile birleşimi vizesi başvurunuzu uzman ekibimizle yapın. Eş, çocuk ve aile üyeleri ile birleşim için 20-30 iş günü işlem süreci.')
@section('keywords', 'aile birleşimi vizesi, family reunion visa, eş vizesi, çocuk vizesi, aile göçü, birleşim vizesi, spouse visa')

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
                            <span style="color: rgba(255,255,255,0.6);">Aile Birleşimi Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Aile Birleşimi Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Sevdiklerinizle yeniden bir araya gelmeniz için profesyonel destek
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
                    <!-- Aile Birleşimi Vizesi Tanımı -->
                    <div class="content-section mb-5 ftco-animate">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Aile Birleşimi Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Aile birleşimi vizesi, bir ülkede yasal olarak ikamet eden kişinin eşi, çocukları veya diğer aile üyelerinin kendilerine katılabilmesi için başvurdukları uzun süreli vize türüdür.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Bu vize türü ile aile üyeleri hedef ülkede yasal olarak ikamet edebilir, çalışma hakkı elde edebilir ve uzun vadeli kalış planları yapabilirler. Aile birleşimi vizesi genellikle 1-2 yıl geçerlidir ve belirli şartlarda uzatılabilir veya daimi ikamete dönüştürülebilir.
                            </p>
                        </div>
                    </div>

                    <!-- Aile Birleşimi Vizesi Avantajları -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Aile Birleşimi Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-heart" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Aile Birliği</h5>
                                    <p class="text-muted">Sevdiklerinizle aynı ülkede yaşama ve birlikte gelecek planları yapma imkanı.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-briefcase" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Çalışma Hakkı</h5>
                                    <p class="text-muted">Aile üyeleri için tam çalışma izni ve kariyer geliştirme fırsatları.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-home" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Uzun Süreli İkamet</h5>
                                    <p class="text-muted">1-2 yıl geçerlilik ile uzun vadeli yaşam planları yapabilme.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-graduation-cap" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Eğitim Hakları</h5>
                                    <p class="text-muted">Çocuklar için ücretsiz devlet okulu ve eğitim imkanları.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kimler Başvurabilir -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Kimler Aile Birleşimi Vizesi İçin Başvurabilir?</h3>
                        <div class="family-members-grid">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="family-member-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-ring mb-2 mr-3" style="font-size: 2em; color: #2c3e50;"></i>
                                            <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 0;">Eşler</h5>
                                        </div>
                                        <p class="text-muted mb-3">Yasal olarak evli eşler için birleşim başvurusu.</p>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Evlilik belgesi gerekli</li>
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>İlişki kanıtları</li>
                                            <li><i class="fas fa-check mr-2" style="color: #28a745;"></i>Mülakat süreci</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="family-member-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-baby mb-2 mr-3" style="font-size: 2em; color: #2c3e50;"></i>
                                            <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 0;">Çocuklar</h5>
                                        </div>
                                        <p class="text-muted mb-3">18 yaş altı çocuklar ve bakmakla yükümlü olanlar.</p>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Doğum belgesi</li>
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Velayet belgeleri</li>
                                            <li><i class="fas fa-check mr-2" style="color: #28a745;"></i>Eğitim planlaması</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="family-member-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-user-friends mb-2 mr-3" style="font-size: 2em; color: #2c3e50;"></i>
                                            <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 0;">Anne-Baba</h5>
                                        </div>
                                        <p class="text-muted mb-3">Yaşlı veya bakıma muhtaç anne-baba için başvuru.</p>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Bağımlılık kanıtı</li>
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Sağlık raporları</li>
                                            <li><i class="fas fa-check mr-2" style="color: #28a745;"></i>Mali destek taahhüdü</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="family-member-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-users mb-2 mr-3" style="font-size: 2em; color: #2c3e50;"></i>
                                            <h5 style="font-weight: 600; color: #2c3e50; margin-bottom: 0;">Diğer Akrabalar</h5>
                                        </div>
                                        <p class="text-muted mb-3">Özel durumlar için diğer aile üyeleri.</p>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Akrabalık belgesi</li>
                                            <li class="mb-2"><i class="fas fa-check mr-2" style="color: #28a745;"></i>Özel gerekçeler</li>
                                            <li><i class="fas fa-check mr-2" style="color: #28a745;"></i>Detaylı değerlendirme</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Aile Birleşimi Vizesi İçin Gerekli Belgeler</h3>
                        <div class="documents-container">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="fas fa-id-card mr-2"></i>Kişisel Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Pasaport</strong><br>
                                                    <small class="text-muted">En az 6 ay geçerlilik süresi</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Evlilik/Doğum Belgesi</strong><br>
                                                    <small class="text-muted">Aile bağını kanıtlayan belgeler</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Vize Başvuru Formu</strong><br>
                                                    <small class="text-muted">Tam doldurulmuş resmi form</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Biyometrik Fotoğraflar</strong><br>
                                                    <small class="text-muted">Son altı ay içinde çekilmiş</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="fas fa-file-contract mr-2"></i>İlişki ve Mali Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>İlişki Kanıtları</strong><br>
                                                    <small class="text-muted">Fotoğraflar, mektuplar, sms'ler</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Sponsor Mali Durumu</strong><br>
                                                    <small class="text-muted">Gelir belgesi ve banka özeti</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Konaklama Belgesi</strong><br>
                                                    <small class="text-muted">Ev kira sözleşmesi veya tapu</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Sağlık Sigortası</strong><br>
                                                    <small class="text-muted">Aile üyeleri için sigorta</small>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Aile Birleşimi Vizesi Başvuru Süreci</h3>
                        <div class="process-timeline">
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number">
                                            <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #2c3e50;">1</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Ön Değerlendirme ve Danışmanlık</h5>
                                        <p class="text-muted">Aile durumunuzu değerlendirerek en uygun başvuru stratejisini belirliyoruz.</p>
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
                                        <h5>Belge Toplanması</h5>
                                        <p class="text-muted">Tüm gerekli belgeler detaylı checklist ile eksiksiz hazırlanır.</p>
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
                                        <h5>Başvuru ve İlişki Kanıtlama</h5>
                                        <p class="text-muted">Güçlü dosya hazırlığı ve aile bağlarını kanıtlayacak belgeler.</p>
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
                                        <h5>Mülakat Hazırlığı ve Sonuç</h5>
                                        <p class="text-muted">Mülakat öncesi hazırlık ve başvuru sürecinin takibi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="familyReunionFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Aile birleşimi vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#familyReunionFAQ">
                                            <div class="card-body" style="background: white;">
                                                Aile birleşimi vizesi başvuruları genellikle 20-30 iş günü sürer. Ancak mülakat gerekliliği ve belge tamamlama durumuna göre bu süre 2-3 aya kadar uzayabilir.
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
                                                    Mali yeterlilik şartları nelerdir?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#familyReunionFAQ">
                                            <div class="card-body" style="background: white;">
                                                Sponsor, aile üyelerinin yaşam masraflarını karşılayabilecek düzenli gelire sahip olmalıdır. Bu genellikle ülkenin asgari ücretinin 1.5-2 katı kadar bir gelir gerektirir.
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
                                                    İlişki kanıtı olarak neler kabul edilir?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#familyReunionFAQ">
                                            <div class="card-body" style="background: white;">
                                                Evlilik belgesi, çocuklar için doğum belgesi, ortak fotoğraflar, mektup/mesaj kayıtları, ortak banka hesabı, seyahat belgeleri ve tanık beyanları kabul edilir.
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
                            <h4 class="mb-0 text-white">Aile Birleşimi Vizesi</h4>
                        </div>
                         <div class="price-display mb-3 mt-3">
                                <span class="h2" style="color: #2c3e50;">$500</span>
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
                                                <strong style="font-size: 16px;">1-2 Yıl</strong>
                                                <small class="d-block text-muted">kalış süresi</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="fas fa-hourglass-half" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">20-30</strong>
                                                <small class="d-block text-muted">iş günü</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="spec-item">
                                            <i class="icon-check-circle" style="color: #2c3e50; font-size: 1.8em;"></i>
                                            <div class="mt-2">
                                                <strong style="font-size: 16px;">730</strong>
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
                                        <span>Çok uzun süreli kalış</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Aile desteği danışmanlık</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Çalışma hakkı dahil</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Uzman danışmanlık</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Mülakat hazırlığı</span>
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

                    <!-- Aile Türleri -->
                    <div class="family-types-card mb-4" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-users mr-2" style="color: #2c3e50;"></i>Başvurabilecek Aile Üyeleri
                        </h5>
                        <div class="family-types-grid">
                            <div class="family-type-item mb-3 pb-2" style="border-bottom: 1px solid #f0f0f0;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-heart mr-3" style="color: #2c3e50; font-size: 1.1em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Eşler</strong>
                                        <small class="d-block text-muted">Yasal evlilik belgeli eşler</small>
                                    </div>
                                </div>
                            </div>
                            <div class="family-type-item mb-3 pb-2" style="border-bottom: 1px solid #f0f0f0;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-baby mr-3" style="color: #2c3e50; font-size: 1.1em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Çocuklar</strong>
                                        <small class="d-block text-muted">18 yaş altı çocuklar</small>
                                    </div>
                                </div>
                            </div>
                            <div class="family-type-item mb-3 pb-2" style="border-bottom: 1px solid #f0f0f0;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-friends mr-3" style="color: #2c3e50; font-size: 1.1em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Anne-Baba</strong>
                                        <small class="d-block text-muted">Bakıma muhtaç ebeveynler</small>
                                    </div>
                                </div>
                            </div>
                            <div class="family-type-item">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-users mr-3" style="color: #2c3e50; font-size: 1.1em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Diğer Akrabalar</strong>
                                        <small class="d-block text-muted">Özel durumlar</small>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Aile Birleşimi Başarı Oranlarımız</h3>
                    <p class="text-muted">Ailelerin yeniden buluşmasına vesile olan hizmet performansımız</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">1500+</span>
                        </div>
                        <p class="text-muted mb-0">Aile Birleşimi</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%92</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">25</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">350+</span>
                        </div>
                        <p class="text-muted mb-0">Mutlu Aile</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Ailenizle Birlikte Yeni Bir Hayat Kurun</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            25 yıllık deneyimimizle aile birleşimi sürecinizi baştan sona yönetiyor,
                            sevdiklerinizle yeniden buluşmanıza vesile oluyoruz.
                        </p>
                        <div class="cta-buttons">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <a href="#" class="btn btn-outline-light btn-lg btn-block" style="border-radius: 8px; padding: 15px; font-weight: 500;">
                                        <i class="icon-phone mr-2"></i>Ücretsiz Danışmanlık
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
                                        <i class="fas fa-heart mr-2"></i>
                                        <span>Aile Odaklı Hizmet</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-handshake mr-2"></i>
                                        <span>Güvenilir Süreç</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="icon-headphones mr-2"></i>
                                        <span>Sürekli İletişim</span>
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

.family-member-card:hover {
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

/* Family Type Items */
.family-type-item {
    transition: all 0.3s ease;
}

.family-type-item:hover {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 8px !important;
    margin: -3px;
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

@extends('layouts.app')

@section('title', 'Öğrenci Vizesi - Yurtdışı Eğitim ve Üniversite Vizesi | Travellines Turizm')
@section('meta_description', 'Öğrenci vizesi başvurunuzu uzman ekibimizle yapın. Yurtdışı üniversite eğitimi, dil kursu ve akademik programlar için 15-20 iş günü işlem süresi.')
@section('keywords', 'öğrenci vizesi, student visa, üniversite vizesi, eğitim vizesi, yurtdışı eğitim, akademik vize, dil kursu vizesi')

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
                            <span style="color: rgba(255,255,255,0.6);">Öğrenci Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Öğrenci Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Eğitim hayalinizi gerçekleştirmek için güvenilir vize danışmanlığı
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
                    <!-- Öğrenci Vizesi Tanımı -->
                    <div class="content-section mb-5 ftco-animate">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Öğrenci Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Öğrenci vizesi, yurtdışında üniversite eğitimi, dil kursu, yüksek lisans, doktora programları ve diğer akademik faaliyetler için kullanılan uzun süreli vize türüdür.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                Bu vize türü ile hedef ülkede tam zamanlı veya yarı zamanlı eğitim alabilir, kısmi çalışma izni elde edebilir ve eğitim süresince o ülkede yasal olarak ikamet edebilirsiniz. Öğrenci vizesi genellikle 1 yıl geçerlidir ve program süresine göre uzatılabilir.
                            </p>
                        </div>
                    </div>

                    <!-- Öğrenci Vizesi Avantajları -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Öğrenci Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-graduation-cap" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Uzun Süreli Eğitim</h5>
                                    <p class="text-muted">1 yıl veya daha uzun süreli eğitim programlarına katılım imkanı.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-briefcase" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Çalışma İzni</h5>
                                    <p class="text-muted">Eğitim süresince kısmi çalışma izni ile iş deneyimi kazanma.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-sync-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Vize Uzatma</h5>
                                    <p class="text-muted">Eğitim programı süresince vize uzatma imkanı.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-users" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Aile Katılımı</h5>
                                    <p class="text-muted">Belirli şartlarda aile üyelerinin katılım imkanı.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hangi Programlar İçin -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Hangi Eğitim Programları İçin Uygundur?</h3>
                        <div class="education-programs-grid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="program-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-university mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Üniversite</h6>
                                        <small class="text-muted">Lisans ve önlisans programları</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="program-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-user-graduate mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Lisansüstü</h6>
                                        <small class="text-muted">Yüksek lisans ve doktora</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="program-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-language mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Dil Kursu</h6>
                                        <small class="text-muted">Yoğun dil eğitimi programları</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="program-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-tools mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Meslek Eğitimi</h6>
                                        <small class="text-muted">Teknik ve mesleki kurslar</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="program-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-flask mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Araştırma</h6>
                                        <small class="text-muted">Post-doc ve araştırma programları</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="program-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-exchange-alt mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Değişim Programı</h6>
                                        <small class="text-muted">Erasmus ve değişim öğrenciliği</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Öğrenci Vizesi İçin Gerekli Belgeler</h3>
                        <div class="documents-container">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="fas fa-user mr-2"></i>Kişisel Belgeler
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
                                                    <strong>Vize Başvuru Formu</strong><br>
                                                    <small class="text-muted">Tam doldurulmuş resmi form</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Biyometrik Fotoğraflar</strong><br>
                                                    <small class="text-muted">Son 6 ay içinde çekilmiş 2 adet</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Sağlık Sigortası</strong><br>
                                                    <small class="text-muted">Eğitim süresi boyunca geçerli</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="document-category" style="background: white; padding: 30px; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                                        <h5 class="mb-3" style="color: #2c3e50; font-weight: 600;">
                                            <i class="fas fa-graduation-cap mr-2"></i>Akademik Belgeler
                                        </h5>
                                        <ul class="document-list" style="list-style: none; padding: 0;">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Kabul Mektubu</strong><br>
                                                    <small class="text-muted">Okul/üniversiteden resmi kabul</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Akademik Transkriptler</strong><br>
                                                    <small class="text-muted">Önceki eğitim belgeleriniz</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Dil Yeterlilik Belgesi</strong><br>
                                                    <small class="text-muted">TOEFL, IELTS, vb. sınav sonuçları</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Finansal Kaynak Belgesi</strong><br>
                                                    <small class="text-muted">Eğitim masraflarını karşılama kanıtı</small>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Öğrenci Vizesi Başvuru Süreci</h3>
                        <div class="process-timeline">
                            <div class="timeline-item mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center">
                                        <div class="timeline-number">
                                            <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #2c3e50;">1</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Okul Seçimi ve Başvuru</h5>
                                        <p class="text-muted">Hedef ülke ve eğitim programını seçerek okul başvurunuzu yapın ve kabul mektubunu alın.</p>
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
                                        <h5>Finansal Planlama</h5>
                                        <p class="text-muted">Eğitim ve yaşam masraflarınızı planlayarak finansal kaynak belgelerinizi hazırlayın.</p>
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
                                        <h5>Vize Başvurusu</h5>
                                        <p class="text-muted">Gerekli tüm belgeleri hazırlayarak konsoloslukta vize başvurunuzu yapın.</p>
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
                                        <h5>Mülakat ve Değerlendirme</h5>
                                        <p class="text-muted">Konsolosluk mülakatını geçin ve vize değerlendirme sürecini tamamlayın.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5 ftco-animate">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="studentVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Öğrenci vizesi ile çalışabilir miyim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#studentVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Evet, çoğu ülkede öğrenci vizesi ile kısmi çalışma izni verilir. Genellikle haftada 20 saat çalışabilirsiniz. Tam zamanlı çalışma sadece okul tatillerinde mümkündür.
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
                                                    Öğrenci vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#studentVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Öğrenci vizesi başvuruları genellikle 15-20 iş günü sürer. Bazı ülkeler için bu süre 4-6 haftaya kadar uzayabilir. Erken başvuru yapmanız önerilir.
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
                                                    Finansal kaynak belgesi ne kadar olmalı?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#studentVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Finansal kaynak miktarı ülkeye ve şehre göre değişir. Genellikle yıllık eğitim ücreti + yaşam masrafları toplamının 1-1.5 katı kadar kaynak göstermeniz gerekir.
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
                            <h4 class="mb-0 text-white">Öğrenci Vizesi</h4>
                        </div>
                         <div class="price-display mb-3 mt-3">
                                <span class="h2" style="color: #2c3e50;">$400</span>
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
                                                <strong style="font-size: 16px;">1 Yıl</strong>
                                                <small class="d-block text-muted">kalış süresi</small>
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
                                                <strong style="font-size: 16px;">365</strong>
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
                                        <span>Uzun süreli kalış</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Çalışma izni dahil</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Okul kaydı desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Uzman danışmanlık</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>7/24 destek hizmeti</span>
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

                    <!-- Popüler Ülkeler -->
                    <div class="popular-countries-card mb-4" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-globe mr-2" style="color: #2c3e50;"></i>Popüler Eğitim Ülkeleri
                        </h5>
                        <div class="countries-grid">
                            <div class="row">
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-flag mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>ABD</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-flag mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>İngiltere</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-flag mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Kanada</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-flag mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Avustralya</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-flag mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Almanya</span>
                                    </small>
                                </div>
                                <div class="col-6 mb-2">
                                    <small class="country-item d-flex align-items-center">
                                        <i class="fas fa-flag mr-2" style="color: #2c3e50; font-size: 0.8em;"></i>
                                        <span>Fransa</span>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Öğrenci Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">Eğitim danışmanlığı alanındaki deneyimimiz</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">3000+</span>
                        </div>
                        <p class="text-muted mb-0">Öğrenci Vizesi</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%95</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">18</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center ftco-animate">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">25+</span>
                        </div>
                        <p class="text-muted mb-0">Ülke Deneyimi</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Eğitim Hayalinizi Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman eğitim danışmanlarımızla yurtdışı eğitim sürecinizi baştan sona planlayın.
                            Öğrenci vizesi başvurunuzdan okul seçimine kadar tam destek.
                        </p>
                        <div class="cta-buttons">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <a href="#" class="btn btn-outline-light btn-lg btn-block" style="border-radius: 8px; padding: 15px; font-weight: 500;">
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
                                        <i class="fas fa-graduation-cap mr-2"></i>
                                        <span>Eğitim Danışmanlığı</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-bolt mr-2"></i>
                                        <span>Hızlı Vize İşlemi</span>
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
/* Hover Efektleri */
.advantage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.program-type-item:hover {
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

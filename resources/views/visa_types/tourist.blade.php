@extends('layouts.app')

@section('title', 'Turist Vizesi - Tatil ve Seyahat Vizesi Başvurusu | Travellines Turizm')
@section('meta_description', 'Turist vizesi başvurunuzu güvenle yapın. 7-10 iş günü işlem süresi, %98 başarı oranı ile profesyonel vize danışmanlığı hizmeti.')
@section('keywords', 'turist vizesi, tatil vizesi, seyahat vizesi, vize başvurusu, turistik vize, kısa süreli vize')

@section('content')
    <!-- Hero Bölümü -->
    <div class="hero-wrap" style="background-image: url('{{ asset('images/visa_banner.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-10 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}">Ana Sayfa</a></span>
                            <span class="mr-2"><a href="{{ route('visa-types.visa_types_index') }}">Vize Türleri</a></span>
                            <span>Turist Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread">Turist Vizesi</h1>
                        <p class="mb-0" style="font-size: 18px; color: rgba(255,255,255,0.9);">
                            Hayalinizdeki tatil için güvenli ve hızlı vize çözümü
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ana Bilgi Bölümü -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-5">
                        <div class="col-md-12 ftco-animate">
                            <div class="single-slider-item">
                                <img src="{{ asset('images/tourist_visa.jpg') }}" alt="Turist Vizesi" class="img-fluid rounded mb-4">
                            </div>
                        </div>
                    </div>

                    <!-- Turist Vizesi Nedir -->
                    <div class="row mb-5">
                        <div class="col-md-12 ftco-animate">
                            <h2 class="mb-4">Turist Vizesi Nedir?</h2>
                            <p class="lead">
                                Turist vizesi, tatil, gezi, kültürel ziyaret veya eğlence amaçlı kısa süreli seyahatler için kullanılan en yaygın vize türüdür. Bu vize türü ile hedef ülkede turistik faaliyetlerde bulunabilir, tarihi mekanları ziyaret edebilir ve kültürel deneyimler yaşayabilirsiniz.
                            </p>
                            <p>
                                Turist vizesi genellikle 15-90 gün arası kalış süresi tanır ve çoklu giriş seçenekleri sunar. İş yapma, çalışma veya eğitim amaçlı kullanılamaz, sadece turistik amaçlı seyahatler için geçerlidir.
                            </p>
                        </div>
                    </div>

                    <!-- Kimler Başvurabilir -->
                    <div class="row mb-5">
                        <div class="col-md-12 ftco-animate">
                            <h3 class="mb-4">Turist Vizesi Kimler İçin Uygundur?</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="media">
                                        <i class="icon-check-circle mr-3 mt-1" style="color: #8d703b; font-size: 1.2em;"></i>
                                        <div class="media-body">
                                            <strong>Tatilciler</strong><br>
                                            <small class="text-muted">Dinlenme ve eğlence amaçlı seyahat edenler</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="media">
                                        <i class="icon-check-circle mr-3 mt-1" style="color: #8d703b; font-size: 1.2em;"></i>
                                        <div class="media-body">
                                            <strong>Kültür Tutkunları</strong><br>
                                            <small class="text-muted">Müze, tarihi alan ziyaretçileri</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="media">
                                        <i class="icon-check-circle mr-3 mt-1" style="color: #8d703b; font-size: 1.2em;"></i>
                                        <div class="media-body">
                                            <strong>Fotoğrafçılar</strong><br>
                                            <small class="text-muted">Doğa ve şehir fotoğrafçılığı yapanlar</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="media">
                                        <i class="icon-check-circle mr-3 mt-1" style="color: #8d703b; font-size: 1.2em;"></i>
                                        <div class="media-body">
                                            <strong>Aile Ziyaretleri</strong><br>
                                            <small class="text-muted">Yurtdışındaki aile/arkadaş ziyaretleri</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Evraklar -->
                    <div class="row mb-5">
                        <div class="col-md-12 ftco-animate">
                            <h3 class="mb-4">Turist Vizesi İçin Gerekli Evraklar</h3>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="mb-3">Temel Belgeler</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <i class="icon-file-text mr-2" style="color: #8d703b;"></i>
                                                    Pasaport (6 ay geçerli)
                                                </li>
                                                <li class="mb-2">
                                                    <i class="icon-file-text mr-2" style="color: #8d703b;"></i>
                                                    Vize başvuru formu
                                                </li>
                                                <li class="mb-2">
                                                    <i class="icon-camera mr-2" style="color: #8d703b;"></i>
                                                    Biyometrik fotoğraflar (2 adet)
                                                </li>
                                                <li class="mb-2">
                                                    <i class="icon-credit-card mr-2" style="color: #8d703b;"></i>
                                                    Seyahat sağlık sigortası
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="mb-3">Mali Durum Belgeleri</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <i class="icon-bank mr-2" style="color: #8d703b;"></i>
                                                    Banka hesap özeti (3 aylık)
                                                </li>
                                                <li class="mb-2">
                                                    <i class="icon-briefcase mr-2" style="color: #8d703b;"></i>
                                                    İş belgesi/maaş bordrosu
                                                </li>
                                                <li class="mb-2">
                                                    <i class="icon-plane mr-2" style="color: #8d703b;"></i>
                                                    Uçak rezervasyonu
                                                </li>
                                                <li class="mb-2">
                                                    <i class="icon-home mr-2" style="color: #8d703b;"></i>
                                                    Otel rezervasyonu
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Başvuru Süreci -->
                    <div class="row mb-5">
                        <div class="col-md-12 ftco-animate">
                            <h3 class="mb-4">Turist Vizesi Başvuru Süreci</h3>
                            <div class="process-timeline">
                                <div class="timeline-item mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2 text-center">
                                            <div class="timeline-number">
                                                <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #e09900;">1</span>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <h5>Ön Değerlendirme ve Danışmanlık</h5>
                                            <p class="text-muted">Uzman ekibimiz ile ücretsiz ön görüşme yaparak vize başvurunuzun uygunluğunu değerlendiriyoruz.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2 text-center">
                                            <div class="timeline-number">
                                                <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #e09900;">2</span>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <h5>Evrak Hazırlığı</h5>
                                            <p class="text-muted">Gerekli tüm belgelerin eksiksiz şekilde hazırlanması ve kontrol edilmesi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2 text-center">
                                            <div class="timeline-number">
                                                <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #e09900;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <h5>Randevu ve Başvuru</h5>
                                            <p class="text-muted">Konsolosluk randevusu alımı ve başvuru dosyanızın resmi makamlar nezdinde sunumu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2 text-center">
                                            <div class="timeline-number">
                                                <span class="badge badge-primary rounded-circle p-3 text-white" style="background: #e09900;">4</span>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <h5>Takip ve Sonuç</h5>
                                            <p class="text-muted">Başvuru sürecinin takibi ve sonuç bildiriminin size iletilmesi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="row mb-5">
                        <div class="col-md-12 ftco-animate">
                            <h3 class="mb-4">Sıkça Sorulan Sorular</h3>
                            <div class="accordion" id="faqAccordion">
                                <div class="card mb-3">
                                    <div class="card-header" id="faq1">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
                                                Turist vizesi ne kadar süre geçerlidir?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse1" class="collapse show" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Turist vizesi genellikle 90 gün geçerlilik süresi tanır ve bu süre içerisinde 15-30 gün kalış hakkı verir. Çoklu giriş vizesi seçeneğinde birden fazla giriş-çıkış yapabilirsiniz.
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header" id="faq2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2">
                                                Vize başvurusu ne kadar sürede sonuçlanır?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse2" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Turist vizesi başvuruları genellikle 7-10 iş günü içerisinde sonuçlanır. Yoğun dönemlerde bu süre 15 güne kadar uzayabilir. Acil başvurular için hızlandırılmış işlem seçeneği mevcuttur.
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header" id="faq3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3">
                                                Vize başvurum reddedilirse ne olur?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse3" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Vize başvurunuz reddedilirse, red gerekçelerini analiz ederek yeni bir başvuru stratejisi belirliyoruz. %98 başarı oranımız sayesinde çoğu durumda ikinci başvuruda olumlu sonuç alıyoruz.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Fiyat Kartı -->
                    <div class="card mb-4 " style="top: 20px;">
                        <div class="card-header text-center" style="background: #e09900; color: white;">
                            <h4 class="mb-0 text-white">Turist Vizesi</h4>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-display mb-3">
                                <span class="h2" style="color: #8d703b;">$250</span>
                                <small class="text-muted d-block">başlangıç fiyat</small>
                            </div>

                            <div class="visa-features mb-4">
                                <div class="row text-center mb-3">
                                    <div class="col-4">
                                        <i class="icon-clock" style="color: #8d703b; font-size: 1.5em;"></i>
                                        <small class="d-block mt-1">15-30 gün</small>
                                        <small class="text-muted">Kalış süresi</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="icon-calendar" style="color: #8d703b; font-size: 1.5em;"></i>
                                        <small class="d-block mt-1">7-10 gün</small>
                                        <small class="text-muted">İşlem süresi</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="icon-check" style="color: #8d703b; font-size: 1.5em;"></i>
                                        <small class="d-block mt-1">90 gün</small>
                                        <small class="text-muted">Geçerlilik</small>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-left">
                                    <li class="mb-2">
                                        <i class="icon-check mr-2" style="color: #28a745;"></i>Tek giriş
                                    </li>
                                    <li class="mb-2">
                                        <i class="icon-check mr-2" style="color: #28a745;"></i>Çoklu giriş seçeneği
                                    </li>
                                    <li class="mb-2">
                                        <i class="icon-check mr-2" style="color: #28a745;"></i>Turist rehberi desteği
                                    </li>
                                    <li class="mb-2">
                                        <i class="icon-check mr-2" style="color: #28a745;"></i>Hızlı işlem
                                    </li>
                                </ul>
                            </div>

                            <a href="#" class="btn btn-primary btn-lg btn-block mb-3" style="background: #e09900; border: none;">
                                <i class="icon-phone mr-2"></i>Hemen Başvur
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-block">
                                <i class="icon-message-circle mr-2"></i>Ücretsiz Danışmanlık
                            </a>
                        </div>
                    </div>

                    <!-- İletişim Kartı -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Hemen İletişime Geçin</h5>
                        </div>
                        <div class="card-body">
                            <div class="contact-item mb-3">
                                <i class="icon-phone mr-2" style="color: #8d703b;"></i>
                                <strong>(0212) 211 52 34</strong>
                                <br><small class="text-muted">7/24 Destek Hattı</small>
                            </div>
                            <div class="contact-item mb-3">
                                <i class="icon-mail mr-2" style="color: #8d703b;"></i>
                                <strong>info@pardusvize.com</strong>
                                <br><small class="text-muted">E-posta Desteği</small>
                            </div>
                            <div class="contact-item">
                                <i class="icon-map-pin mr-2" style="color: #8d703b;"></i>
                                <strong>Kuştepe, Mecidiyeköy Yolu Cd. No:16, Daire:4, 34381 Şişli/İstanbul</strong>
                                <br><small class="text-muted">Merkez Ofisimizi Ziyaret Edin</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Bölümü -->
    <section class="ftco-section" style="background: #e09900; color: white;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10">
                    <h2 class="mb-3 text-white">Turist Vizesi Başvurunuz İçin Uzman Desteği</h2>
                    <p class="mb-4" style="font-size: 18px; opacity: 0.9;">
                        25 yıllık deneyimimiz ve %98 başarı oranımızla hayalinizdeki tatili güvenle planlayın
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <a href="#" class="btn btn-light btn-lg btn-block">
                                <i class="icon-phone mr-2"></i>Hemen Ara
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="btn btn-outline-light btn-lg btn-block">
                                <i class="icon-calendar mr-2"></i>Randevu Al
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
// Sticky sidebar için
$(window).scroll(function(){
    var sticky = $('.sticky-top'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});
</script>
@endpush

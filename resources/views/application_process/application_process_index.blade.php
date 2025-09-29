@extends('layouts.app')

@section('title', 'Vize Başvuru Süreci - Adım Adım Rehber | Travellines Turizm')
@section('meta_description', 'Vize başvuru sürecini 6 adımda tamamlayın. Belge hazırlama, randevu alma, başvuru yapma ve vize takibi için profesyonel rehber. Kurumsal seyahat ve uçak bileti hizmetleri.')
@section('keywords', 'vize başvuru süreci, vize nasıl alınır, vize belgeler, vize randevu, kurumsal seyahat, uçak bileti, vize danışmanlığı, vize takip')

@section('content')
    <!-- Hero Section -->
    <div class="hero-wrap" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/visa_banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
                <div class="col-md-10 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Ana Sayfa</a></span>
                            <span style="color: rgba(255,255,255,0.6);">Başvuru Süreci</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Vize Başvuru Süreci</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            6 adımda kolay ve güvenli vize başvurusu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Overview -->
    <section class="ftco-section" style="padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Basit ve Güvenli Başvuru Süreci</h2>
                    <p class="text-muted">25 yıllık deneyimimizle vize başvuru sürecinizi kolaylaştırıyoruz. Kurumsal seyahat planlaması ve uçak bileti rezervasyonu dahil tam hizmet sunuyoruz.</p>
                </div>
            </div>

            <!-- Process Steps -->
            <div class="process-steps">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="step-card text-center p-4" style="background: white; border-radius: 42px; border:1px solid #dcdcdc; height: 100%; position: relative;">
                            <div class="step-number" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px;">1</div>
                            <div style="margin-top: 30px;">
                                <i class="fas fa-phone fa-3x mb-3" style="color: #2c3e50;"></i>
                                <h5 style="font-weight: 600; color: #2c3e50;">İletişim ve Danışmanlık</h5>
                                <p class="text-muted">Uzman ekibimizle iletişime geçin. Size uygun vize türünü belirleyip gerekli bilgileri sağlıyoruz.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="step-card text-center p-4" style="background: white; border-radius: 42px; border:1px solid #dcdcdc; height: 100%; position: relative;">
                            <div class="step-number" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px;">2</div>
                            <div style="margin-top: 30px;">
                                <i class="fas fa-file-alt fa-3x mb-3" style="color: #2c3e50;"></i>
                                <h5 style="font-weight: 600; color: #2c3e50;">Belge Hazırlama</h5>
                                <p class="text-muted">Vize başvurunuz için gerekli tüm belgelerin listesini alın ve eksiklik olmadan hazırlayın.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="step-card text-center p-4" style="background: white; border-radius: 42px; border:1px solid #dcdcdc; height: 100%; position: relative;">
                            <div class="step-number" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px;">3</div>
                            <div style="margin-top: 30px;">
                                <i class="fas fa-calendar-check fa-3x mb-3" style="color: #2c3e50;"></i>
                                <h5 style="font-weight: 600; color: #2c3e50;">Randevu Alma</h5>
                                <p class="text-muted">Konsolosluk veya vize merkezi randevunuzu alıyoruz. Uygun tarih ve saat ayarlaması yapıyoruz.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="step-card text-center p-4" style="background: white; border-radius: 42px; border:1px solid #dcdcdc; height: 100%; position: relative;">
                            <div class="step-number" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px;">4</div>
                            <div style="margin-top: 30px;">
                                <i class="fas fa-hand-paper fa-3x mb-3" style="color: #2c3e50;"></i>
                                <h5 style="font-weight: 600; color: #2c3e50;">Başvuru ve Biyometrik</h5>
                                <p class="text-muted">Randevu gününde belgelerinizi teslim edin ve biyometrik verilerinizi (parmak izi) verin.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="step-card text-center p-4" style="background: white; border-radius: 42px; border:1px solid #dcdcdc; height: 100%; position: relative;">
                            <div class="step-number" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px;">5</div>
                            <div style="margin-top: 30px;">
                                <i class="fas fa-search fa-3x mb-3" style="color: #2c3e50;"></i>
                                <h5 style="font-weight: 600; color: #2c3e50;">Başvuru Takibi</h5>
                                <p class="text-muted">Başvurunuzun durumunu takip ediyor ve gelişmeler hakkında sizi bilgilendiriyoruz.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="step-card text-center p-4" style="background: white; border-radius: 42px; border:1px solid #dcdcdc; height: 100%; position: relative;">
                            <div class="step-number" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: #28a745; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px;">6</div>
                            <div style="margin-top: 30px;">
                                <i class="fas fa-check-circle fa-3x mb-3" style="color: #28a745;"></i>
                                <h5 style="font-weight: 600; color: #2c3e50;">Vize Teslim</h5>
                                <p class="text-muted">Vizeniz hazır olduğunda size haber veriyor ve teslim alım işlemlerini gerçekleştiriyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Benefits -->
    <section class="ftco-section" style="padding: 60px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <h3 class="mb-4" style="font-weight: 600; color: #2c3e50;">Neden Bizimle Çalışmalısınız?</h3>
                    <div class="benefits-list">
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                            <div>
                                <strong>25 Yıllık Deneyim:</strong> Vize başvuru sürecindeki tüm detayları biliyoruz.
                            </div>
                        </div>
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                            <div>
                                <strong>%95 Başarı Oranı:</strong> Yüksek onay oranıyla güvenilir hizmet.
                            </div>
                        </div>
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                            <div>
                                <strong>Kurumsal Çözümler:</strong> Şirketler için özel paketler ve toplu işlem indirimleri.
                            </div>
                        </div>
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                            <div>
                                <strong>Tam Hizmet:</strong> Vize + uçak bileti + seyahat sigortası tek noktadan.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stats-card p-4">
                        <div class="row text-center">
                            <div class="col-6 mb-3">
                                <div class="stat-item">
                                    <div class="h2 mb-1 text-primary">50K+</div>
                                    <small class="text-muted">Başarılı Başvuru</small>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="stat-item">
                                    <div class="h2 mb-1 text-primary">180+</div>
                                    <small class="text-muted">Ülke</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <div class="h2 mb-1 text-primary">%95</div>
                                    <small class="text-muted">Onay Oranı</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <div class="h2 mb-1 text-primary">7/24</div>
                                    <small class="text-muted">Destek</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Required Documents -->
    <section class="ftco-section" style="padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Genel Belgeler Listesi</h2>
                    <p class="text-muted">Vize başvurunuz için genellikle istenen temel belgeler (ülkeye göre değişiklik gösterebilir)</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="document-category p-4 text-center" style="background: white; border-radius:42px;border:1px solid #dcdcdc;">
                        <h5 class="mb-3 fw-600" style="color: #2c3e50;">Kişisel Belgeler</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Pasaport (en az 6 ay geçerli)</li>
                            <li class="mb-2">✓ Vize başvuru formu</li>
                            <li class="mb-2">✓ Biyometrik fotoğraf</li>
                            <li class="mb-2">✓ Nüfus cüzdanı fotokopisi</li>
                            <li class="mb-2">✓ Medeni durum belgesi</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="document-category p-4 text-center" style="background: white; border-radius: 42px;border:1px solid #dcdcdc;">
                        <h5 class="mb-3 fw-600" style="color: #2c3e50;">Mali Belgeler</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Banka hesap özeti (3-6 ay)</li>
                            <li class="mb-2">✓ Maaş bordrosu</li>
                            <li class="mb-2">✓ İş belgesi</li>
                            <li class="mb-2">✓ Gelir belgesi</li>
                            <li class="mb-2">✓ Sponsorluk mektubu (varsa)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="document-category p-4 text-center" style="background: white; border-radius: 42px;border:1px solid #dcdcdc;">
                        <h5 class="mb-3 fw-600" style="color: #2c3e50;">Seyahat Belgeleri</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Uçak bileti rezervasyonu</li>
                            <li class="mb-2">✓ Otel rezervasyonu</li>
                            <li class="mb-2">✓ Seyahat programı</li>
                            <li class="mb-2">✓ Seyahat sigortası</li>
                            <li class="mb-2">✓ Davet mektubu (varsa)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="document-category p-4 text-center" style="background: white; border-radius: 42px;border:1px solid #dcdcdc;">
                        <h5 class="mb-3 fw-600" style="color: #2c3e50;">Özel Durumlar</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Öğrenci belgesi (öğrenci vizesi)</li>
                            <li class="mb-2">✓ İş davetiyesi (iş vizesi)</li>
                            <li class="mb-2">✓ Akrabalık belgesi (aile vizesi)</li>
                            <li class="mb-2">✓ Sağlık raporu (bazı ülkeler)</li>
                            <li class="mb-2">✓ Sabıka kaydı (bazı ülkeler)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="ftco-section" style="background: linear-gradient(135deg, #2c3e50, #34495e); color: white; padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <h2 class="mb-4 text-white" style="font-weight: 600;">Vize Başvurunuzu Hemen Başlatın</h2>
                    <p class="mb-4" style="font-size: 18px; opacity: 0.9;">
                        Uzman ekibimizle güvenli ve hızlı vize başvuru süreci. Kurumsal seyahat ve uçak bileti rezervasyonu için tek adres.
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
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
.ftco-animate {
    animation: fadeInUp 0.8s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.document-category:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12) !important;
}

.stats-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.15) !important;
}

.step-number {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0,123,255,0.7); }
    70% { box-shadow: 0 0 0 10px rgba(0,123,255,0); }
    100% { box-shadow: 0 0 0 0 rgba(0,123,255,0); }
}

@media (max-width: 768px) {
    .hero-wrap h1 {
        font-size: 2.5em !important;
    }

    .step-card {
        margin-bottom: 30px;
    }

    .cta-buttons a {
        margin-bottom: 15px;
        display: block;
    }

    .cta-buttons .mr-3 {
        margin-right: 0 !important;
    }
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
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });

    // Counter animation when visible
    function animateCounters() {
        $('.stat-item .h2').each(function() {
            var $this = $(this);
            var countTo = parseInt($this.text().replace(/[^\d]/g, ''));
            var prefix = $this.text().replace(/[\d]/g, '').replace('+', '').replace('%', '');
            var suffix = $this.text().includes('+') ? '+' : ($this.text().includes('%') ? '%' : '');

            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(prefix + Math.floor(this.countNum) + suffix);
                },
                complete: function() {
                    $this.text(prefix + countTo + suffix);
                }
            });
        });
    }

    // Intersection Observer for animations
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('stats-card')) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            }
        });
    }, { threshold: 0.5 });

    // Observe stats card
    const statsCard = document.querySelector('.stats-card');
    if (statsCard) {
        observer.observe(statsCard);
    }
});
</script>
@endpush

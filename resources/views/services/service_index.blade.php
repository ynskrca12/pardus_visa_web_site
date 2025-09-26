@extends('layouts.app')

@section('title', 'Hizmetlerimiz - Vize, Uçak Bileti ve Kurumsal Seyahat | Travellines Turizm')
@section('meta_description', 'Vize hizmetleri, uçak bileti rezervasyonu, kurumsal seyahat çözümleri, seyahat sigortası ve havaalanı transfer hizmetleri. 25 yıllık deneyim ile profesyonel seyahat danışmanlığı.')
@section('keywords', 'vize hizmetleri, uçak bileti, kurumsal seyahat, seyahat sigortası, havaalanı transfer, seyahat danışmanlığı, iş seyahati, turist vizesi')

@section('content')
    <!-- Hero Section -->
    <div class="hero-wrap" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/visa_banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
                <div class="col-md-10 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Ana Sayfa</a></span>
                            <span style="color: rgba(255,255,255,0.6);">Hizmetlerimiz</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Hizmetlerimiz</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Kapsamlı seyahat çözümleri ve profesyonel danışmanlık hizmetleri
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Overview -->
    <section class="ftco-section" style="padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Seyahat İhtiyaçlarınıza Tam Çözüm</h2>
                    <p class="text-muted">25 yıllık deneyimimiz ile vize hizmetlerinden uçak bileti rezervasyonuna, kurumsal seyahat çözümlerinden seyahat sigortasına kadar tüm ihtiyaçlarınızı karşılıyoruz.</p>
                </div>
            </div>

            <!-- Main Services -->
            <div class="main-services mb-5">
                <div class="row">
                    <!-- Vize Hizmetleri -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card h-100" style="background: white; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.3s ease;">
                            <div class="service-header" style="background: linear-gradient(135deg, #667eea, #764ba2); padding: 30px; color: white; text-align: center;">
                                <i class="fas fa-passport fa-3x mb-3"></i>
                                <h4 class="text-white" style="font-weight: 600;">Vize Hizmetleri</h4>
                            </div>
                            <div class="service-body p-4">
                                <ul class="service-list list-unstyled mb-4">
                                    <li class="mb-2">• Turistik vize başvuruları</li>
                                    <li class="mb-2">• İş vizesi danışmanlığı</li>
                                    <li class="mb-2">• Öğrenci vizesi hizmetleri</li>
                                    <li class="mb-2">• Transit vize işlemleri</li>
                                    <li class="mb-2">• Aile birleşimi vizesi</li>
                                    <li class="mb-2">• Schengen vize başvuruları</li>
                                </ul>
                                <div class="service-features">
                                    <span class="badge mr-2 py-2 px-3" style="border:1px solid #dcdcdc;border-radius: 12px;">%95 Başarı</span>
                                    <span class="badge py-2 px-3" style="border:1px solid #dcdcdc;border-radius: 12px;">180+ Ülke</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Uçak Bileti -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card h-100" style="background: white; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.3s ease;">
                            <div class="service-header" style="background: linear-gradient(135deg, #f093fb, #f5576c); padding: 30px; color: white; text-align: center;">
                                <i class="fas fa-plane fa-3x mb-3"></i>
                                <h4 class="text-white" style="font-weight: 600;">Uçak Bileti</h4>
                            </div>
                            <div class="service-body p-4">
                                <ul class="service-list list-unstyled mb-4">
                                    <li class="mb-2">• Yurtiçi uçak bileti</li>
                                    <li class="mb-2">• Yurtdışı uçak bileti</li>
                                    <li class="mb-2">• Grup rezervasyonları</li>
                                    <li class="mb-2">• Business class biletler</li>
                                    <li class="mb-2">• Last minute biletler</li>
                                    <li class="mb-2">• Özel fiyat avantajları</li>
                                </ul>
                                <div class="service-features">
                                    <span class="badge py-2 px-3 mr-2" style="border:1px solid #dcdcdc;border-radius: 12px;">En İyi Fiyat</span>
                                    <span class="badge py-2 px-3" style="border:1px solid #dcdcdc;border-radius: 12px;">7/24 Destek</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kurumsal Seyahat -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card h-100" style="background: white; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.3s ease;">
                            <div class="service-header" style="background: linear-gradient(135deg, #4facfe, #00f2fe); padding: 30px; color: white; text-align: center;">
                                <i class="fas fa-briefcase fa-3x mb-3"></i>
                                <h4 class="text-white" style="font-weight: 600;">Kurumsal Seyahat</h4>
                            </div>
                            <div class="service-body p-4">
                                <ul class="service-list list-unstyled mb-4">
                                    <li class="mb-2">• İş seyahati planlaması</li>
                                    <li class="mb-2">• Toplantı organizasyonu</li>
                                    <li class="mb-2">• Grup vize işlemleri</li>
                                    <li class="mb-2">• Konaklama rezervasyonları</li>
                                    <li class="mb-2">• VIP transfer hizmetleri</li>
                                    <li class="mb-2">• Özel hesap yöneticisi</li>
                                </ul>
                                <div class="service-features">
                                    <span class="badge py-2 px-3 mr-2" style="border:1px solid #dcdcdc;border-radius: 12px;">%40 İndirim</span>
                                    <span class="badge py-2 px-3" style="border:1px solid #dcdcdc;border-radius: 12px;">500+ Firma</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="ftco-section" style="background: #f8f9fa; padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Ek Hizmetlerimiz</h2>
                    <p class="text-muted">Seyahatinizi daha konforlu hale getiren destekleyici hizmetler</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="additional-service text-center p-4" style="background: white; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-shield-alt fa-3x mb-3 " style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Seyahat Sigortası</h5>
                        <p class="text-muted">Kapsamlı sağlık ve seyahat güvencesi</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="additional-service text-center p-4" style="background: white; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-car fa-3x mb-3 " style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Havaalanı Transfer</h5>
                        <p class="text-muted">VIP araç ile konforlu transfer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="additional-service text-center p-4" style="background: white; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-bed fa-3x mb-3 " style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Otel Rezervasyonu</h5>
                        <p class="text-muted">Dünya çapında konaklama çözümleri</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="additional-service text-center p-4" style="background: white; border-radius: 12px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-headset fa-3x mb-3 " style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Seyahat Danışmanlığı</h5>
                        <p class="text-muted">Uzman rehberlik ve öneriler</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="ftco-section" style="padding: 60px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <h2 class="mb-4" style="font-weight: 600; color: #2c3e50;">Neden Travellines?</h2>
                    <p class="mb-4 text-muted">25 yıllık sektör deneyimimiz ile müşterilerimize en kaliteli hizmeti sunuyoruz.</p>

                    <div class="advantages">
                        <div class="advantage-item d-flex align-items-start mb-3">
                            <div class="advantage-icon mr-3" style="background: #007bff; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h6 style="font-weight: 600;">25 Yıllık Deneyim</h6>
                                <p class="text-muted mb-0">Sektördeki derin bilgi birikimimiz ile güvenilir hizmet</p>
                            </div>
                        </div>

                        <div class="advantage-item d-flex align-items-start mb-3">
                            <div class="advantage-icon mr-3" style="background: #28a745; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h6 style="font-weight: 600;">Yüksek Başarı Oranı</h6>
                                <p class="text-muted mb-0">Vize başvurularında %95 başarı oranı ile lider konumda</p>
                            </div>
                        </div>

                        <div class="advantage-item d-flex align-items-start mb-3">
                            <div class="advantage-icon mr-3" style="background: #ffc107; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h6 style="font-weight: 600;">7/24 Müşteri Desteği</h6>
                                <p class="text-muted mb-0">Her zaman ulaşabileceğiniz profesyonel destek ekibi</p>
                            </div>
                        </div>

                        <div class="advantage-item d-flex align-items-start">
                            <div class="advantage-icon mr-3" style="background: #dc3545; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <h6 style="font-weight: 600;">Dünya Çapında Hizmet</h6>
                                <p class="text-muted mb-0">180+ ülke için kapsamlı vize ve seyahat hizmetleri</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="stats-container" style="background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 15px; padding: 40px; color: white;">
                        <div class="row text-center">
                            <div class="col-6 mb-4">
                                <div class="stat-item">
                                    <div class="h1 mb-2 text-white" style="font-weight: 700;">50K+</div>
                                    <p class="mb-0">Mutlu Müşteri</p>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="stat-item">
                                    <div class="h1 mb-2 text-white" style="font-weight: 700;">180+</div>
                                    <p class="mb-0">Ülke Hizmeti</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <div class="h1 mb-2 text-white" style="font-weight: 700;">%95</div>
                                    <p class="mb-0">Vize Başarısı</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <div class="h1 mb-2 text-white" style="font-weight: 700;">25</div>
                                    <p class="mb-0">Yıl Deneyim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="ftco-section" style="background: #f8f9fa; padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Nasıl Çalışıyoruz?</h2>
                    <p class="text-muted">Basit 4 adımda hizmet alma süreci</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center">
                    <div class="process-step">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 24px; margin: 0 auto;">1</div>
                        <h6 style="font-weight: 600;">İletişim</h6>
                        <p class="text-muted small">Bize ulaşın ve ihtiyaçlarınızı belirtin</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 text-center">
                    <div class="process-step">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 24px; margin: 0 auto;">2</div>
                        <h6 style="font-weight: 600;">Planlama</h6>
                        <p class="text-muted small">Sizin için en uygun çözümü planlayalım</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 text-center">
                    <div class="process-step">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 24px; margin: 0 auto;">3</div>
                        <h6 style="font-weight: 600;">İşlem</h6>
                        <p class="text-muted small">Tüm işlemlerinizi hızla gerçekleştirelim</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 text-center">
                    <div class="process-step">
                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: #2c3e50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 24px; margin: 0 auto;">4</div>
                        <h6 style="font-weight: 600;">Teslimat</h6>
                        <p class="text-muted small">Hizmetiniz hazır, keyifli seyahatler</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Profesyonel Seyahat Hizmetleri</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Vize hizmetleri, uçak bileti rezervasyonu ve kurumsal seyahat çözümleri için uzman ekibimizle iletişime geçin.
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
                                        <span>%100 Güvenli İşlem</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-bolt mr-2"></i>
                                        <span>Hızlı Sonuçlandırma</span>
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

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
}

.additional-service:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12) !important;
}

.advantage-item:hover .advantage-icon {
    transform: scale(1.1);
}

.advantage-icon {
    transition: transform 0.3s ease;
}

.process-step:hover .step-number {
    transform: scale(1.1);
}

.step-number {
    transition: transform 0.3s ease;
}

.stats-container {
    position: relative;
    overflow: hidden;
}

.stats-container::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    50% { transform: translate(-20px, -20px) rotate(180deg); }
}

@media (max-width: 768px) {
    .hero-wrap h1 {
        font-size: 2.5em !important;
    }

    .service-card {
        margin-bottom: 30px;
    }

    .cta-buttons a {
        display: block;
        margin-bottom: 15px !important;
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
    // Counter animation
    function animateCounters() {
        $('.stat-item .h1').each(function() {
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

    // Intersection Observer for stats animation
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsContainer = document.querySelector('.stats-container');
    if (statsContainer) {
        observer.observe(statsContainer);
    }

    // Smooth scrolling
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });
});
</script>
@endpush

@extends('layouts.app')

@section('title', 'Hakkımızda - Profesyonel Vize ve Seyahat Danışmanlığı | Travellines')
@section('meta_description', '25 yıllık deneyimimizle vize başvuru, kurumsal seyahat ve uçak bileti hizmetleri. %95 başarı oranı ile güvenilir seyahat partneri.')
@section('keywords', 'hakkımızda, vize danışmanlığı, kurumsal seyahat, turizm acentesi, seyahat şirketi')

@section('content')

<!-- Hero Section -->
<div class="hero-wrap" style="background-image: url('{{ asset('images/visa_banner.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ route('home') }}">Anasayfa</a></span>
                        <span>Hakkımızda</span>
                    </p>
                    <h1 class="mb-4 bread">Hakkımızda</h1>
                    <p class="mb-4">25 yıllık deneyimimizle güvenilir seyahat partneriniz</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ftco-animate">
                <div class="about-img">
                    <img src="{{ asset('images/travellines_truizm.jpg') }}" class="img-fluid rounded" alt="Ofisimiz">
                </div>
            </div>
            <div class="col-lg-6 ftco-animate">
                <div class="about-text pl-lg-5">
                    <h2 class="mb-4">Pardus Vize - Travellines Turizm</h2>
                    <p class="lead">1999 yılından bu yana seyahat sektöründe faaliyet gösteren köklü bir turizm şirketiyiz.</p>

                    <p>Vize danışmanlığı, kurumsal seyahat yönetimi ve uçak bileti rezervasyonu alanlarında uzmanlaşmış ekibimizle, müşterilerimize en kaliteli hizmeti sunmayı hedefliyoruz.</p>

                    <p>%95 vize başarı oranımız ve 10.000+ memnun müşterimizle sektörde güvenilir bir marka haline geldik. Deneyimli kadromuz ve güncel teknolojimizle seyahat süreçlerinizi kolaylaştırıyoruz.</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="counter-box text-center">
                                <h3 class="text-primary">25+</h3>
                                <p>Yıl Deneyim</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-box text-center">
                                <h3 class="text-primary">10K+</h3>
                                <p>Memnun Müşteri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-3">Hizmetlerimiz</h2>
                <p>Seyahat ihtiyaçlarınızın tamamını karşılayan kapsamlı hizmet yelpazemiz</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="service-box text-center p-4 bg-white h-100" style="border: 1px solid #dcdcdc;border-radius: 15px;">
                    <div class="icon mb-3">
                        <i class="fas fa-passport fa-3x" style="color: #2c3e50;"></i>
                    </div>
                    <h4>Vize Danışmanlığı</h4>
                    <p>180+ ülke için profesyonel vize başvuru hizmeti. Belge hazırlama, randevu alma ve takip süreçleri.</p>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="service-box text-center p-4 bg-white h-100" style="border: 1px solid #dcdcdc;border-radius: 15px;">
                    <div class="icon mb-3">
                        <i class="fas fa-plane fa-3x" style="color: #2c3e50;"></i>
                    </div>
                    <h4>Uçak Bileti</h4>
                    <p>Dünya genelinde en uygun fiyatlı uçak biletleri. Online rezervasyon ve 7/24 müşteri desteği.</p>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="service-box text-center p-4 bg-white h-100" style="border: 1px solid #dcdcdc;border-radius: 15px;">
                    <div class="icon mb-3">
                        <i class="fas fa-briefcase fa-3x" style="color: #2c3e50;"></i>
                    </div>
                    <h4>Kurumsal Seyahat</h4>
                    <p>Şirketler için özel seyahat çözümleri. Toplantı organizasyonu, grup rezervasyonları ve raporlama.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-3">Değerlerimiz</h2>
                <p>Çalışma prensipleri ve müşteri memnuniyeti odaklı yaklaşımımız</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 ftco-animate">
                <div class="value-item d-flex mb-4">
                    <div class="icon mr-3">
                        <i class="fas fa-shield-alt fa-2x" style="color: #2c3e50;"></i>
                    </div>
                    <div>
                        <h5>Güvenilirlik</h5>
                        <p>25 yıllık sektör deneyimimiz ve binlerce başarılı işlemimizle güvenilir hizmet anlayışımızı sürdürüyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ftco-animate">
                <div class="value-item d-flex mb-4">
                    <div class="icon mr-3">
                        <i class="fas fa-clock fa-2x" style="color: #2c3e50;"></i>
                    </div>
                    <div>
                        <h5>Hızlı Hizmet</h5>
                        <p>Vize işlemlerinizi en kısa sürede tamamlıyor, acil durumlarınızda 7/24 destek sağlıyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ftco-animate">
                <div class="value-item d-flex mb-4">
                    <div class="icon mr-3">
                        <i class="fas fa-users fa-2x" style="color: #2c3e50;"></i>
                    </div>
                    <div>
                        <h5>Uzman Kadro</h5>
                        <p>Alanında uzman, sertifikalı danışmanlarımızla her adımda profesyonel destek alırsınız.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ftco-animate">
                <div class="value-item d-flex mb-4">
                    <div class="icon mr-3">
                        <i class="fas fa-heart fa-2x" style="color: #2c3e50;"></i>
                    </div>
                    <div>
                        <h5>Müşteri Memnuniyeti</h5>
                        <p>Müşteri memnuniyeti önceliğimiz. Geri bildirimlerinizle kendimizi sürekli geliştiriyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="ftco-section text-white" style="background: linear-gradient(135deg, #2c3e50, #34495e) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center ftco-animate">
                <div class="stat-item">
                    <h2 class="counter text-white">25</h2>
                    <p>Yıl Deneyim</p>
                </div>
            </div>
            <div class="col-md-3 text-center ftco-animate">
                <div class="stat-item">
                    <h2 class="counter text-white">10247</h2>
                    <p>Başarılı Vize</p>
                </div>
            </div>
            <div class="col-md-3 text-center ftco-animate">
                <div class="stat-item">
                    <h2 class="counter text-white">180</h2>
                    <p>Ülke Vizesi</p>
                </div>
            </div>
            <div class="col-md-3 text-center ftco-animate">
                <div class="stat-item">
                    <h2 class="counter text-white">95</h2>
                    <p>% Başarı Oranı</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-3">Uzman Ekibimiz</h2>
                <p>Alanında deneyimli uzmanlardan oluşan güçlü kadromuz</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="team-member text-center">
                    <div class="team-img mb-3">
                        <img src="{{ asset('images/person1.jpg') }}" class="img-fluid rounded-circle" alt="Mehmet Yılmaz" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>Mehmet Yılmaz</h5>
                    <p class="text-muted">Genel Müdür</p>
                    <p>20 yıllık turizm sektörü deneyimi</p>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="team-member text-center">
                    <div class="team-img mb-3">
                        <img src="{{ asset('images/person1.jpg') }}" class="img-fluid rounded-circle" alt="Ayşe Demir" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>Ayşe Demir</h5>
                    <p class="text-muted">Vize Uzmanı</p>
                    <p>15 yıllık vize danışmanlığı deneyimi</p>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="team-member text-center">
                    <div class="team-img mb-3">
                        <img src="{{ asset('images/person1.jpg') }}" class="img-fluid rounded-circle" alt="Can Özkan" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>Can Özkan</h5>
                    <p class="text-muted">Kurumsal Satış Müdürü</p>
                    <p>12 yıllık kurumsal seyahat deneyimi</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Seyahat Planlarınızı Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman ekibimizle hayalinizdeki seyahati planlayın. Vize işlemlerinden uçak biletine kadar her şey için buradayız.
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
.service-box {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.value-item {
    padding: 20px;
    border-radius: 10px;
    transition: background 0.3s ease;
}

.value-item:hover {
    background: #f8f9fa;
}

.stat-item h2 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.team-member {
    padding: 20px;
    transition: all 0.3s ease;
}

.team-member:hover {
    background: #f8f9fa;
    border-radius: 15px;
    transform: translateY(-5px);
}

.counter-box h3 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.about-img img {
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

@media (max-width: 768px) {
    .about-text {
        padding-left: 0 !important;
        margin-top: 30px;
    }

    .stat-item h2 {
        font-size: 2rem;
    }

    .counter-box h3 {
        font-size: 2rem;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Counter animation
    $('.counter').each(function() {
        const $this = $(this);
        const countTo = parseInt($this.text());

        $({ countNum: 0 }).animate({
            countNum: countTo
        }, {
            duration: 2000,
            easing: 'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(countTo);
            }
        });
    });
});
</script>
@endpush

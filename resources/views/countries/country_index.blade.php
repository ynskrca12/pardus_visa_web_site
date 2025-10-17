@extends('layouts.app')

@section('title', 'Dünya Ülkeleri Vize Hizmetleri - Amerika Avrupa Asya Vizesi | Travellines')
@section('meta_description', 'Amerika, Avrupa, Asya, Afrika ve Okyanusya ülkeleri için profesyonel vize hizmetleri. Kurumsal seyahat, uçak bileti ve vize danışmanlığı. 25 yıllık deneyim.')
@section('keywords', 'vize, vize hizmetleri, amerika vizesi, avrupa vizesi, asya vizesi, kurumsal seyahat, uçak bileti, vize danışmanlığı, dünya ülkeleri')

@section('content')
    <!-- Hero Section -->
    <div class="hero-wrap" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/visa_banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
                <div class="col-md-10 text-center d-flex align-items-end justify-content-center" data-aos="fade-up">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Ana Sayfa</a></span>
                            <span style="color: rgba(255,255,255,0.6);">Ülkeler</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Dünya Ülkeleri Vize Hizmetleri</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            180+ ülke için vize, kurumsal seyahat ve uçak bileti hizmetleri
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
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Kapsamlı Seyahat Çözümleri</h2>
                    <p class="text-muted">Dünya genelindeki tüm ülkeler için vize, kurumsal seyahat ve uçak bileti hizmetleri. Amerika'dan Avrupa'ya, Asya'dan Afrika'ya kadar her destinasyon için profesyonel destek.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4 text-center">
                    <div class="service-box p-4" style="background: white; border-radius: 40px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-passport fa-3x mb-3 mt-1" style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Vize Hizmetleri</h5>
                        <p class="text-muted">Turistik, iş, öğrenci ve transit vize başvuruları için tam destek</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <div class="service-box p-4" style="background: white; border-radius: 40px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-briefcase fa-3x mb-3 mt-1" style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Kurumsal Seyahat</h5>
                        <p class="text-muted">Şirketler için özel vize çözümleri ve toplu başvuru hizmetleri</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <div class="service-box p-4" style="background: white; border-radius: 40px; border:1px solid #dcdcdc; height: 100%;">
                        <i class="fas fa-plane fa-3x mb-3 mt-1" style="color: #2c3e50;"></i>
                        <h5 style="font-weight: 600; color: #2c3e50;">Uçak Bileti</h5>
                        <p class="text-muted">En uygun fiyatlı uçak bileti rezervasyonu ve seyahat planlaması</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countries by Continent -->
    <section class="ftco-section" style="background: #f8f9fa; padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3" style="font-weight: 600; color: #2c3e50;">Kıtalara Göre Ülkeler</h2>
                    <p class="text-muted">Seyahat etmek istediğiniz kıtayı seçin ve ülke listesini inceleyin</p>
                </div>
            </div>

            <!-- Continent Tabs -->
            <div class="continent-tabs mb-4">
                <ul class="nav nav-pills justify-content-center" id="continentTabs" role="tablist" style="background: white; border-radius: 25px; padding: 5px; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <li class="nav-item">
                        <a class="nav-link active" id="europe-tab" data-toggle="pill" href="#europe" role="tab" style="border-radius: 20px; font-weight: 500; padding: 12px 24px;">
                            Avrupa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="americas-tab" data-toggle="pill" href="#americas" role="tab" style="border-radius: 20px; font-weight: 500; padding: 12px 24px;">
                            Amerika
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="asia-tab" data-toggle="pill" href="#asia" role="tab" style="border-radius: 20px; font-weight: 500; padding: 12px 24px;">
                            Asya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="oceania-tab" data-toggle="pill" href="#oceania" role="tab" style="border-radius: 20px; font-weight: 500; padding: 12px 24px;">
                            Okyanusya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="africa-tab" data-toggle="pill" href="#africa" role="tab" style="border-radius: 20px; font-weight: 500; padding: 12px 24px;">
                            Afrika
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="continentTabsContent">
                <!-- Europe -->
                <div class="tab-pane fade show active" id="europe" role="tabpanel">
                    <div class="row">
                        @php
                        $europeCountries = [
                            'Almanya', 'Fransa', 'İtalya', 'İspanya', 'Hollanda', 'İngiltere',
                            'Avusturya', 'Belçika', 'İsviçre', 'Portekiz', 'Yunanistan', 'Çek Cumhuriyeti',
                            'Polonya', 'Macaristan', 'Slovakya', 'Slovenya', 'Hırvatistan', 'Bulgaristan',
                            'Romanya', 'Estonya', 'Letonya', 'Litvanya', 'Finlandiya', 'İsveç',
                            'Norveç', 'Danimarka', 'İzlanda', 'İrlanda', 'Lüksemburg', 'Malta'
                        ];
                        @endphp

                        @foreach($europeCountries as $country)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="country-item p-3 border" style="background: white; transition: all 0.2s ease;border-radius: 12px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-weight: 500;color: #2c3e50;">{{ $country }}</span>
                                    <small class="text-muted">Schengen</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Americas -->
                <div class="tab-pane fade" id="americas" role="tabpanel">
                    <div class="row">
                        @php
                        $americaCountries = [
                            'ABD', 'Kanada', 'Meksika', 'Brezilya', 'Arjantin',
                            'Şili', 'Peru', 'Kolombiya', 'Venezuela', 'Ekvador', 'Bolivya', 'Paraguay',
                            'Uruguay', 'Küba', 'Jamaika', 'Dominik Cumhuriyeti', 'Kosta Rika', 'Panama'
                        ];
                        @endphp

                        @foreach($americaCountries as $country)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="country-item p-3 border" style="background: white; transition: all 0.2s ease;border-radius: 12px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-weight: 500;color: #2c3e50;">{{ $country }}</span>
                                    <small class="text-muted">
                                        @if($country == 'ABD') B1/B2
                                        @elseif($country == 'Kanada') Ziyaretçi
                                        @else Turist
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Asia -->
                <div class="tab-pane fade" id="asia" role="tabpanel">
                    <div class="row">
                        @php
                        $asiaCountries = [
                            'Japonya', 'Çin', 'Güney Kore', 'Singapur', 'Tayland', 'Malezya',
                            'Endonezya', 'Vietnam', 'Filipinler', 'Hindistan', 'Pakistan', 'Bangladeş',
                            'Sri Lanka', 'Myanmar', 'Kamboçya', 'Laos', 'Dubai (BAE)', 'Suudi Arabistan',
                            'Katar', 'Bahreyn', 'Kuveyt', 'Ürdün', 'Lübnan', 'İsrail', 'Rusya', 'Kazakistan'
                        ];
                        @endphp

                        @foreach($asiaCountries as $country)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="country-item p-3 border" style="background: white; transition: all 0.2s ease;border-radius: 12px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-weight: 500;color: #2c3e50;">{{ $country }}</span>
                                    <small class="text-muted">
                                        @if($country == 'Çin') L Visa
                                        @elseif($country == 'Hindistan') e-Tourist
                                        @else Tourist
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Oceania -->
                <div class="tab-pane fade" id="oceania" role="tabpanel">
                    <div class="row">
                        @php
                        $oceaniaCountries = [
                            'Avustralya', 'Yeni Zelanda', 'Fiji', 'Papua Yeni Gine', 'Vanuatu', 'Samoa'
                        ];
                        @endphp

                        @foreach($oceaniaCountries as $country)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="country-item p-3 border" style="background: white; transition: all 0.2s ease;border-radius: 12px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-weight: 500;color: #2c3e50;">{{ $country }}</span>
                                    <small class="text-muted">Visitor</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Africa -->
                <div class="tab-pane fade" id="africa" role="tabpanel">
                    <div class="row">
                        @php
                        $africaCountries = [
                            'Güney Afrika', 'Mısır', 'Fas', 'Tunus', 'Cezayir', 'Libya',
                            'Sudan', 'Etiyopya', 'Kenya', 'Tanzanya', 'Uganda', 'Ruanda',
                            'Nijerya', 'Gana', 'Fildişi Sahili', 'Senegal', 'Mali', 'Burkina Faso'
                        ];
                        @endphp

                        @foreach($africaCountries as $country)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="country-item p-3 border" style="background: white; transition: all 0.2s ease;border-radius: 12px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="font-weight: 500;color: #2c3e50;">{{ $country }}</span>
                                    <small class="text-muted">Tourist</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="ftco-section" style="background: linear-gradient(135deg, #2c3e50, #34495e); color: white; padding: 60px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="mb-2 text-white">Vize ve Seyahat Danışmanlığı</h3>
                    <p class="mb-0">Uzman ekibimizle güvenli ve hızlı vize hizmeti alın. Kurumsal seyahat ve uçak bileti rezervasyonu için hemen iletişime geçin.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="tel:+902122115234" class="btn btn-light btn-lg bg-transparent text-white border-0 me-2">
                        <i class="fas fa-phone me-1"></i> (0212) 211 52 34
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>

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

.service-box:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12) !important;
}

.country-item:hover {
    transform: translateY(-2px);
    border-color: #007bff !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.nav-pills .nav-link {
    color: #6c757d;
    border: none;
    background: transparent;
    transition: all 0.2s ease;
}

.nav-pills .nav-link.active {
    background: #2c3e50 !important;
    color: white !important;
}

.nav-pills .nav-link:hover:not(.active) {
    background: rgba(0,123,255,0.1);
    color: #2c3e50;
}

@media (max-width: 768px) {
    .hero-wrap h1 {
        font-size: 2.5em !important;
    }

    .nav-pills {
        flex-direction: column !important;
        padding: 10px !important;
    }

    .nav-pills .nav-link {
        margin-bottom: 5px;
        text-align: center;
    }

    .service-box {
        margin-bottom: 20px;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Tab switching for Bootstrap 4
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        $($(e.target).getAttribute('href')).find('.country-item').each(function(index) {
            $(this).css('animation-delay', (index * 0.03) + 's').addClass('animate-fade-in');
        });
    });

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

// Add fade animation
const style = document.createElement('style');
style.textContent = `
    .animate-fade-in {
        animation: fadeIn 0.4s ease-out forwards;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(style);
</script>
@endpush

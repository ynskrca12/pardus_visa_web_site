@extends('layouts.app')

@section('title', 'İletişim - Vize Danışmanlığı ve Seyahat Hizmetleri | Travellines')
@section('meta_description', 'Vize başvuru, kurumsal seyahat ve uçak bileti konularında uzman ekibimizle iletişime geçin. 7/24 destek hattımız.')
@section('keywords', 'iletişim, vize danışmanlığı, seyahat acentesi, randevu, destek')

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
                        <span>İletişim</span>
                    </p>
                    <h1 class="mb-4 bread">İletişim</h1>
                    <p class="mb-4">Uzman ekibimizle iletişime geçin, size yardımcı olmaktan mutluluk duyarız</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 ftco-animate">
                <div class="contact-form-section">
                    <h2 class="mb-4">Bize Ulaşın</h2>
                    <p class="mb-4">Vize başvurunuz, seyahat planlarınız veya diğer sorularınız için formu doldurun. En kısa sürede size dönüş yapacağız.</p>

                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Ad Soyad <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           id="name"
                                           name="name"
                                           value="{{ old('name') }}"
                                           placeholder="Adınız ve Soyadınız"
                                           required>
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telefon <span class="text-danger">*</span></label>
                                    <input type="tel"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           value="{{ old('phone') }}"
                                           placeholder="0555 123 4567"
                                           required>
                                    @error('phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-posta <span class="text-danger">*</span></label>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="ornek@email.com"
                                           required>
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Konu</label>
                                    <select class="form-control @error('subject') is-invalid @enderror"
                                            id="subject"
                                            name="subject">
                                        <option value="" selected disabled>Konu Seçin</option>
                                        <option value="visa" {{ old('subject') == 'visa' ? 'selected' : '' }}>Vize Danışmanlığı</option>
                                        <option value="flight" {{ old('subject') == 'flight' ? 'selected' : '' }}>Uçak Bileti</option>
                                        <option value="corporate" {{ old('subject') == 'corporate' ? 'selected' : '' }}>Kurumsal Seyahat</option>
                                        <option value="insurance" {{ old('subject') == 'insurance' ? 'selected' : '' }}>Seyahat Sigortası</option>
                                        <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Diğer</option>
                                    </select>
                                    @error('subject')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Mesajınız <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror"
                                      id="message"
                                      name="message"
                                      rows="6"
                                      placeholder="Mesajınızı buraya yazın..."
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="privacy" name="privacy" required>
                                <label class="custom-control-label" for="privacy">
                                    <a href="#" class="text-primary">Gizlilik Politikası</a>'nı okudum ve kabul ediyorum.
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-paper-plane mr-2"></i>Mesaj Gönder
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 ftco-animate">
                <!-- İletişim Kartı -->
                    <div class="contact-card" style="background: white; border-radius: 15px; border: 1px solid #dcdcdc; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="icon-headphones mr-2" style="color: #2c3e50;"></i>Uzman Desteği
                        </h5>
                        <div class="contact-methods">
                            <div class="contact-item mb-3 py-3" style="">
                                <div class="d-flex align-items-center">
                                    <i class="icon-phone mr-3" style="color: #2c3e50; font-size: 1.3em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;"> (0212) 211 52 34</strong>
                                        <small class="d-block text-muted">7/24 Acil Destek</small>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-item mb-3 py-3" style="">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-envelope mr-3" style="color: #2c3e50; font-size: 1.3em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">info@pardusvize.com</strong>
                                        <small class="d-block text-muted">E-posta Desteği</small>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-item py-3" style="">
                                <div class="d-flex align-items-center">
                                    <i class="icon-map-pin mr-4" style="color: #2c3e50; font-size: 1.3em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Kuştepe, Mecidiyeköy Yolu Cd. No:16, Daire:4, 34381 Şişli/İstanbul</strong>
                                        <small class="d-block text-muted">Merkez Ofisimizi Ziyaret Edin</small>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item py-3" style="">
                                <div class="d-flex align-items-center">
                                    <i class="icon-map-pin mr-4" style="color: #2c3e50; font-size: 1.3em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Pazartesi - Cuma: 09:00 - 18:00</strong>
                                        <strong style="color: #2c3e50;">Cumartesi: 10:00 - 16:00</strong>
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

<!-- Map Section - Google Maps yerine iframe kullanımı -->
<section class="map-section">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <!-- Google Maps Embed iframe -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96258.2646768344!2d28.90859216544883!3d41.06744565216811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7ec77bcff25%3A0x46031e4c3066cd2c!2sTravellines%20Turizm!5e0!3m2!1str!2str!4v1760528249508!5m2!1str!2str" width="100%"
                    height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-3">Sık Sorulan Sorular</h2>
                <p>En çok merak edilen sorular ve cevapları</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 ftco-animate">
                <div class="faq-item mb-4">
                    <h5><i class="fas fa-question-circle mr-2" style="color: #2c3e50;"></i>Vize başvuru süreci ne kadar sürer?</h5>
                    <p>Vize türüne göre değişmekle birlikte genellikle 7-15 iş günü arası sürmektedir. Acil durumlar için express hizmet de mevcuttur.</p>
                </div>

                <div class="faq-item mb-4">
                    <h5><i class="fas fa-question-circle mr-2" style="color: #2c3e50;"></i>Vize red durumunda ne yapılır?</h5>
                    <p>Red sebebini analiz ederek eksiklikleri gideririz ve tekrar başvuru için stratejinizi belirlenir. Danışmanlık hizmeti ücretsizdir.</p>
                </div>
            </div>

            <div class="col-md-6 ftco-animate">
                <div class="faq-item mb-4">
                    <h5><i class="fas fa-question-circle mr-2" style="color: #2c3e50;"></i>Kurumsal anlaşma şartları nelerdir?</h5>
                    <p>Yıllık minimum işlem hacmine göre özel indirimler ve ödeme koşulları sunuyoruz. Detaylar için iletişime geçin.</p>
                </div>

                <div class="faq-item mb-4">
                    <h5><i class="fas fa-question-circle mr-2" style="color: #2c3e50;"></i>Uçak bileti iptali mümkün mü?</h5>
                    <p>Bilet kurallarına göre iptal ve değişiklik koşulları farklılık gösterir. Flexible biletlerde daha kolay işlem yapılabilir.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>

.form-control {
    border-radius: 12px !important;
    border: 1px solid #dcdcdc !important;
    padding: 12px 15px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}

.info-box {
    display: flex;
    align-items: flex-start;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.info-box:hover {
    transform: translateY(-3px);
}

.info-box .icon {
    background: #007bff;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    flex-shrink: 0;
}

.info-box .content h5 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.info-box .content p {
    color: #666;
    margin: 0;
    line-height: 1.6;
}

.info-box .content a {
    color: #007bff;
    text-decoration: none;
}

.info-box .content a:hover {
    text-decoration: underline;
}

.emergency-box {
    border-left: 4px solid #fff;
}

.faq-item {
    background: white;
    padding: 25px;
    border-radius: 10px;
    border: 1px solid #dcdcdc;
}

.faq-item h5 {
    color: #2c3e50;
    margin-bottom: 15px;
    font-weight: 600;
}

.faq-item p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.btn-primary {
    border-radius: 25px;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,123,255,0.4);
}

@media (max-width: 768px) {
    .contact-form {
        padding: 20px;
    }

    .info-box {
        padding: 15px;
        margin-bottom: 20px;
    }
}

.btn-primary {
    background: #2c3e50 !important;
    border-color: #2c3e50 !important;
    color: #fff !important;
}
    .btn-primary:hover {
        background: #fff !important;
        border-color: #2c3e50 !important;
        color: #2c3e50 !important;
    }
    .form-control {
            font-size: 14px !important;

    }
</style>


@push('scripts')
<script>
$(document).ready(function() {
    // Form validation
    $('.contact-form').on('submit', function(e) {
        let isValid = true;

        // Check required fields
        $('input[required], textarea[required]').each(function() {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        // Check privacy checkbox
        if (!$('#privacy').is(':checked')) {
            isValid = false;
            alert('Lütfen gizlilik politikasını kabul edin.');
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    // Phone number formatting
    $('#phone').on('input', function() {
        let value = $(this).val().replace(/\D/g, '');
        if (value.length >= 10) {
            value = value.replace(/(\d{4})(\d{3})(\d{4})/, '$1 $2 $3');
        }
        $(this).val(value);
    });
});

// Google Maps (replace with your API key)
function initMap() {
    const office = { lat: 41.0082, lng: 28.9784 }; // Istanbul coordinates

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: office,
        styles: [
            {
                featureType: "all",
                stylers: [{ saturation: -80 }]
            }
        ]
    });

    const marker = new google.maps.Marker({
        position: office,
        map: map,
        title: "Travellines Turizm"
    });

    const infoWindow = new google.maps.InfoWindow({
        content: `
            <div style="padding: 10px;">
                <h6>Travellines Turizm</h6>
                <p>Kuştepe, Mecidiyeköy Yolu Cd. No:16, Daire:4, 34381 Şişli/İstanbul</p>
            </div>
        `
    });

    marker.addListener("click", () => {
        infoWindow.open(map, marker);
    });
}
</script>

<!-- Google Maps API (replace YOUR_API_KEY with actual key) -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
@endpush

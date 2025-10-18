@extends('layouts.app')

@section('title', 'Kanada Vizesi - Canada Visitor Visa ve eTA Başvurusu | Travellines Turizm')
@section('meta_description', 'Kanada vizesi başvurunuzu profesyonel ekibimizle yapın. eTA online başvuru, biyometrik işlemler ve 10 yıl geçerli çoklu giriş vizesi.')
@section('keywords', 'kanada vizesi, canada visa, eta kanada, kanada turist vizesi, kanada ziyaretçi vizesi, imm 5257')

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
                            <span style="color: rgba(255,255,255,0.6);">Kanada Vizesi</span>
                        </p>
                        <h1 class="mb-4 bread" style="font-size: 3.5em; font-weight: 700;">Kanada Vizesi</h1>
                        <p class="mb-0" style="font-size: 20px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                            Kanada ziyaretçi vizesi ve eTA ile Kanada'yı keşfedin
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
                    <!-- Kanada Vizesi Tanımı -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <div class="section-header mb-4">
                            <h2 class="mt-3 mb-4" style="font-size: 2.5em; font-weight: 600; color: #2c3e50;">Kanada Vizesi Nedir?</h2>
                        </div>

                        <div class="content-card">
                            <p class="lead mb-4" style="font-size: 18px; line-height: 1.8; color: #34495e;">
                                Kanada ziyaretçi vizesi (Temporary Resident Visa - TRV), Kanada'ya turistik, iş veya aile ziyareti amaçlı seyahat etmek için gerekli olan vize türüdür. 10 yıla kadar geçerlilik süresi ile çoklu giriş imkanı sunar.
                            </p>
                            <p style="line-height: 1.8; color: #5a6c7d;">
                                eTA (Electronic Travel Authorization) ise havayoluyla Kanada'ya giriş için gerekli elektronik seyahat iznidir. Online başvuru ile dakikalar içinde alınabilir. Her iki vize türü için de biyometrik veri verme zorunluluğu bulunmaktadır.
                            </p>
                        </div>
                    </div>

                    <!-- Kanada Vizesi Avantajları -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Kanada Vizesi Avantajları</h3>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-calendar-alt" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">10 Yıl Geçerlilik</h5>
                                    <p class="text-muted">Tek başvuru ile 10 yıl boyunca geçerli çoklu giriş vizesi.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-globe-americas" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Çoklu Giriş</h5>
                                    <p class="text-muted">10 yıl boyunca sınırsız sayıda Kanada'ya giriş yapabilirsiniz.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-laptop" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">Online Başvuru</h5>
                                    <p class="text-muted">Tamamen online başvuru sistemi ile kolay süreç.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="advantage-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                                    <div class="advantage-icon mb-3">
                                        <i class="fas fa-clock" style="font-size: 2.5em; color: #2c3e50;"></i>
                                    </div>
                                    <h5 style="font-weight: 600; color: #2c3e50;">6 Ay Kalış</h5>
                                    <p class="text-muted">Her girişte 6 aya kadar Kanada'da kalabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vize Türleri -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Kanada Vize Türleri</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="business-type-item p-4" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease; height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-passport mr-3" style="font-size: 2.5em; color: #2c3e50;"></i>
                                            <div>
                                                <h5 style="font-weight: 600; color: #2c3e50;">Visitor Visa (TRV)</h5>
                                                <p class="text-muted mb-2">Geçici ikamet vizesi - pasaporta yapıştırılan vize</p>
                                                <ul class="text-muted mb-0" style="padding-left: 20px; font-size: 14px;">
                                                    <li>10 yıla kadar geçerlilik</li>
                                                    <li>Çoklu giriş imkanı</li>
                                                    <li>Biyometrik zorunlu</li>
                                                    <li>20-30 gün işlem süresi</li>
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
                                                <h5 style="font-weight: 600; color: #2c3e50;">eTA</h5>
                                                <p class="text-muted mb-2">Elektronik Seyahat İzni - online vize</p>
                                                <ul class="text-muted mb-0" style="padding-left: 20px; font-size: 14px;">
                                                    <li>5 yıl geçerlilik</li>
                                                    <li>Sadece hava yoluyla</li>
                                                    <li>Dakikalar içinde onay</li>
                                                    <li>Vize muafiyeti olanlar için</li>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Kanada Vizesi Kullanım Amaçları</h3>
                        <div class="business-types-grid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-camera mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Turizm</h6>
                                        <small class="text-muted">Tatil ve turistik geziler</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-briefcase mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">İş Ziyaretleri</h6>
                                        <small class="text-muted">Toplantı ve konferans</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-heart mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Aile Ziyareti</h6>
                                        <small class="text-muted">Akraba ve arkadaş ziyaretleri</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-graduation-cap mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Kısa Kurslar</h6>
                                        <small class="text-muted">6 aydan kısa eğitim</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-hospital mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Medikal Tedavi</h6>
                                        <small class="text-muted">Tıbbi tedavi amaçlı</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="business-type-item text-center p-3" style="border: 1px solid #dcdcdc; border-radius: 12px; transition: all 0.3s ease;">
                                        <i class="fas fa-plane mb-2" style="font-size: 2em; color: #2c3e50;"></i>
                                        <h6 style="font-weight: 600;">Transit</h6>
                                        <small class="text-muted">Aktarmalı seyahat</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gerekli Belgeler -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Kanada Vizesi Başvurusu İçin Gerekli Belgeler</h3>
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
                                                    <strong>IMM 5257 Formu</strong><br>
                                                    <small class="text-muted">Online başvuru formu</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Dijital Fotoğraf</strong><br>
                                                    <small class="text-muted">Beyaz fon üzerine güncel</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Biyometrik</strong><br>
                                                    <small class="text-muted">Parmak izi ve fotoğraf</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Mali Durum Belgesi</strong><br>
                                                    <small class="text-muted">Banka hesap özeti</small>
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
                                                    <strong>İş Belgesi</strong><br>
                                                    <small class="text-muted">Çalışma ve gelir kanıtı</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Geçmişi</strong><br>
                                                    <small class="text-muted">Önceki vize ve seyahatler</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Aile Bağları</strong><br>
                                                    <small class="text-muted">Evlilik, çocuk belgeleri</small>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Seyahat Planı</strong><br>
                                                    <small class="text-muted">Uçak ve konaklama rezervasyonu</small>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="icon-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.1em;"></i>
                                                <div>
                                                    <strong>Davetiye Mektubu</strong><br>
                                                    <small class="text-muted">Varsa Kanada'dan davet</small>
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
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Kanada Vizesi Başvuru Süreci</h3>
                        <div class="process-steps">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">1</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Online Hesap</h5>
                                        <p class="text-muted mb-0">IRCC hesabı oluşturma</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">2</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Form Doldurma</h5>
                                        <p class="text-muted mb-0">IMM 5257 başvuru formu</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">3</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Belge Yükleme</h5>
                                        <p class="text-muted mb-0">Dijital belgeleri sisteme yükleme</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">4</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Ücret Ödeme</h5>
                                        <p class="text-muted mb-0">Başvuru ücreti ödeme</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">5</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Biyometrik</h5>
                                        <p class="text-muted mb-0">Başvuru merkezinde veri verme</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="step-card text-center p-4" style="background: white; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%;">
                                        <div class="step-number mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 24px; font-weight: 700;">6</div>
                                        <h5 style="font-weight: 600; color: #2c3e50;">Vize Onayı</h5>
                                        <p class="text-muted mb-0">Pasaport teslim alma</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SSS -->
                    <div class="content-section mb-5" data-aos="fade-up">
                        <h3 class="mb-4" style="font-size: 2em; font-weight: 600; color: #2c3e50;">Sıkça Sorulan Sorular</h3>
                        <div class="faq-container">
                            <div class="accordion" id="canadaVisaFAQ">
                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#faq1" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    Kanada vizesi başvurusu ne kadar sürer?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq1" class="collapse show" data-parent="#canadaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Kanada ziyaretçi vizesi başvuruları genellikle 20-30 iş günü içinde sonuçlanır. Biyometrik verme işlemi de dahil olmak üzere tüm süreç ortalama 4-6 hafta sürmektedir. Başvuru yoğunluğuna göre süreler değişkenlik gösterebilir.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item mb-3">
                                    <div class="card" style="border: 1px solid #e9ecef; border-radius: 10px;">
                                        <div class="card-header" style="background: #f8f9fa; border-radius: 10px 10px 0 0;">
                                            <h5class="mb-0">
                                                <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#faq2" style="color: #2c3e50; font-weight: 500; text-decoration: none;">
                                                    <i class="icon-help-circle mr-2" style="color: #f8b600;"></i>
                                                    eTA ile normal vize arasındaki fark nedir?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq2" class="collapse" data-parent="#canadaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                eTA elektronik seyahat iznidir ve sadece havayoluyla Kanada'ya girişlerde geçerlidir. Dakikalar içinde online alınır ve 5 yıl geçerlidir. Visitor Visa ise pasaporta yapıştırılan fiziksel vize olup 10 yıla kadar geçerlidir ve tüm giriş yollarında kullanılabilir.
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
                                                    Biyometrik veri verme zorunlu mu?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq3" class="collapse" data-parent="#canadaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Evet, Kanada vizesi başvurusu yapan herkes için biyometrik veri (parmak izi ve fotoğraf) verme zorunludur. Bu işlem vize başvuru merkezinde gerçekleştirilir ve 10 yıl boyunca geçerlidir. 14 yaş altı çocuklar muaftır.
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
                                                    Kanada vizesi ile ne kadar kalabilirim?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq4" class="collapse" data-parent="#canadaVisaFAQ">
                                            <div class="card-body" style="background: white;">
                                                Kanada ziyaretçi vizesi ile her girişte maksimum 6 ay (180 gün) kalabilirsiniz. Vize 10 yıl geçerli olsa bile her seferinde 6 ay kalma hakkınız vardır. Gümrük memuru daha kısa süre de verebilir.
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
                            <h4 class="mb-0 text-white">Kanada Vizesi</h4>
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
                                                <strong style="font-size: 16px;">20-30</strong>
                                                <small class="d-block text-muted">iş günü</small>
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
                                        <span>Online başvuru desteği</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>IRCC hesap oluşturma</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Belge kontrolü</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="icon-check mr-2" style="color: #28a745; font-size: 1.1em;"></i>
                                        <span>Biyometrik randevu</span>
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

                    <!-- Biyometrik Bilgi Kartı -->
                    <div class="biometric-card mb-4" style="background: #f0f8ff; border-radius: 15px; border: 1px solid #2c3e50; padding: 25px;">
                        <h5 class="mb-4" style="font-weight: 600; color: #2c3e50;">
                            <i class="fas fa-fingerprint mr-2" style="color: #2c3e50;"></i>Biyometrik Bilgilendirme
                        </h5>
                        <div class="biometric-info">
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(44, 62, 80, 0.2);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">10 Yıl Geçerli</strong>
                                        <p class="text-muted mb-0 small">Bir kez verdiğiniz biyometrik veri 10 yıl boyunca geçerlidir.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(44, 62, 80, 0.2);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">30 Gün İçinde</strong>
                                        <p class="text-muted mb-0 small">Online başvuru sonrası 30 gün içinde biyometrik vermelisiniz.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item mb-3 pb-3" style="border-bottom: 1px solid rgba(44, 62, 80, 0.2);">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Randevu Gerekli</strong>
                                        <p class="text-muted mb-0 small">VFS Global merkezinden randevu almanız gerekmektedir.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1" style="color: #28a745; font-size: 1.2em;"></i>
                                    <div>
                                        <strong style="color: #2c3e50;">Ek Ücret</strong>
                                        <p class="text-muted mb-0 small">Biyometrik veri verme için ayrı bir ücret ödenir (85 CAD).</p>
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
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Kanada Vizesi Başarı Oranlarımız</h3>
                    <p class="text-muted">Profesyonel ekibimizin Kanada vize deneyimi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">3800+</span>
                        </div>
                        <p class="text-muted mb-0">Kanada Vizesi Başvurusu</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">%93</span>
                        </div>
                        <p class="text-muted mb-0">Başarı Oranı</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">25</span>
                        </div>
                        <p class="text-muted mb-0">Ortalama İşlem Günü</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center" data-aos="fade-up">
                    <div class="counter-item" style="background: white; padding: 30px 20px; border-radius: 12px; box-shadow: 0 3px 15px rgba(0,0,0,0.08);">
                        <div class="counter-number mb-2">
                            <span class="h2" style="color: #2c3e50; font-weight: 700;">14+</span>
                        </div>
                        <p class="text-muted mb-0">Yıllık Deneyim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kanada Hakkında Bilgi -->
    <section class="ftco-section" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="mb-3" style="font-size: 2.2em; font-weight: 600; color: #2c3e50;">Kanada'da Mutlaka Görülmesi Gerekenler</h3>
                    <p class="text-muted">Kanada vizeniz ile keşfedebileceğiniz muhteşem yerler</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-monument" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">CN Tower - Toronto</h5>
                        <p class="text-muted text-center">553 metre yüksekliğinde ikonik kule ve Toronto'nun panoramik manzarası.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-water" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Niagara Şelaleleri</h5>
                        <p class="text-muted text-center">Dünyanın en ünlü şelalelerinden biri. Muhteşem doğa harikası ve tekne turları.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-mountain" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Banff Milli Parkı</h5>
                        <p class="text-muted text-center">Kanada Rockies'inde muhteşem doğa, buzullar ve kristal berraklığında göller.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-city" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Eski Montreal</h5>
                        <p class="text-muted text-center">Tarihi taş binalar, sanat galerileri ve Avrupa atmosferi ile büyüleyici şehir merkezi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-bridge" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Vancouver</h5>
                        <p class="text-muted text-center">Pasifik kıyısında modern şehir, Stanley Park ve muhteşem dağ manzaraları.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="info-card" style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #dcdcdc; height: 100%; transition: transform 0.3s ease;">
                        <div class="info-icon mb-3 text-center">
                            <i class="fas fa-landmark" style="font-size: 2.5em; color: #2c3e50;"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 600; color: #2c3e50;">Parliament Hill - Ottawa</h5>
                        <p class="text-muted text-center">Kanada parlamentosu ve neo-Gotik mimari ile ülkenin politik kalbi.</p>
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
                        <h2 class="mb-4 text-white" style="font-size: 2.5em; font-weight: 600;">Kanada Rüyanızı Gerçekleştirin</h2>
                        <p class="mb-4" style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                            Uzman ekibimiz ve profesyonel hizmetimizle Kanada vizenizi güvenle alın.
                            Muhteşem doğası ve modern şehirleriyle Kanada sizi bekliyor!
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
                                        <i class="icon-calendar mr-2"></i>Online Başvuru
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
                                        <span>%93 Başarı Oranı</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="feature-item d-flex align-items-center justify-content-center">
                                        <i class="fas fa-globe mr-2"></i>
                                        <span>10 Yıl Geçerli</span>
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

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
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

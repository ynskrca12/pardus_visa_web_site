<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisaTypeController extends Controller
{
    /**
     * Ana vize türleri sayfası
     */
    public function visa_types_index()
    {
        $visaTypes = [
            [
                'id' => 'tourist',
                'title' => 'Turist Vizesi',
                'price' => '250',
                'duration' => '15-30 gün',
                'processing_time' => '7-10 iş günü',
                'validity' => '90 gün',
                'description' => 'Turistik amaçlı seyahatler için',
                'route' => 'visa-types.tourist',
                'image' => 'tourist-visa.jpg',
                'features' => [
                    'Tek giriş',
                    'Çoklu giriş seçeneği',
                    'Turist rehberi desteği',
                    'Hızlı işlem'
                ]
            ],
            [
                'id' => 'business',
                'title' => 'İş Vizesi',
                'price' => '350',
                'duration' => '30-90 gün',
                'processing_time' => '10-15 iş günü',
                'validity' => '180 gün',
                'description' => 'İş görüşmeleri ve toplantılar için',
                'route' => 'visa-types.business',
                'image' => 'business-visa.jpg',
                'features' => [
                    'Çoklu giriş',
                    'Uzun süreli',
                    'İş davetiye desteği',
                    'Öncelikli işlem'
                ]
            ],
            [
                'id' => 'student',
                'title' => 'Öğrenci Vizesi',
                'price' => '400',
                'duration' => '1 yıl',
                'processing_time' => '15-20 iş günü',
                'validity' => '365 gün',
                'description' => 'Eğitim amaçlı uzun süreli ikamet',
                'route' => 'visa-types.student',
                'image' => 'student-visa.jpg',
                'features' => [
                    'Uzun süreli',
                    'Çalışma izni',
                    'Okul kaydı desteği',
                    'Danışmanlık'
                ]
            ],
            [
                'id' => 'transit',
                'title' => 'Transit Vizesi',
                'price' => '150',
                'duration' => '24-72 saat',
                'processing_time' => '3-5 iş günü',
                'validity' => '30 gün',
                'description' => 'Aktarma yapmak için kısa süreli',
                'route' => 'visa-types.transit',
                'image' => 'transit-visa.jpg',
                'features' => [
                    'Kısa süreli',
                    'Havalimanı çıkışı',
                    'Hızlı onay',
                    'Acil işlem'
                ]
            ],
            [
                'id' => 'family',
                'title' => 'Aile Birleşimi',
                'price' => '500',
                'duration' => '1-2 yıl',
                'processing_time' => '20-30 iş günü',
                'validity' => '730 gün',
                'description' => 'Aile üyeleriyle birleşim için',
                'route' => 'visa-types.family',
                'image' => 'family-visa.jpg',
                'features' => [
                    'Çok uzun süreli',
                    'Aile desteği',
                    'Çalışma hakkı',
                    'Uzman danışmanlık'
                ]
            ],
            [
                'id' => 'schengen',
                'title' => 'Schengen Vizesi',
                'price' => '300',
                'duration' => '90 gün',
                'processing_time' => '10-15 iş günü',
                'validity' => '180 gün',
                'description' => '26 Avrupa ülkesinde serbest dolaşım',
                'route' => 'visa-types.schengen',
                'image' => 'schengen-visa.jpg',
                'features' => [
                    '26 ülke erişimi',
                    'Çoklu giriş',
                    'Esnek seyahat',
                    'Güvenilir süreç'
                ]
            ]
        ];

        return view('visa_types.visa_types_index', compact('visaTypes'));
    }

    /**
     * Turist vizesi detay sayfası
     */
    public function tourist()
    {
        $visaDetails = [
            'title' => 'Turist Vizesi',
            'subtitle' => 'Tatil ve turistik seyahatler için ideal vize çözümü',
            'price' => '250',
            'processing_time' => '7-10 iş günü',
            'validity' => '90 gün',
            'duration' => '15-30 gün',
            'required_documents' => [
                'Pasaport (en az 6 ay geçerli)',
                'Vize başvuru formu',
                'Biyometrik fotoğraf',
                'Seyahat sigortası',
                'Otel rezervasyonu',
                'Uçak bilet rezervasyonu',
                'Banka hesap özetleri (son 3 ay)',
                'İş yerinden izin belgesi'
            ],
            'process_steps' => [
                'Online başvuru formu doldurma',
                'Gerekli belgelerin hazırlanması',
                'Randevu alma ve başvuru',
                'Biyometrik veri verme',
                'Başvuru takibi',
                'Vize teslim alma'
            ],
            'countries' => [
                'Almanya', 'Fransa', 'İtalya', 'İspanya', 'Hollanda',
                'Belçika', 'Avusturya', 'İsviçre', 'Yunanistan', 'Portekiz'
            ]
        ];

        return view('visa_types.tourist', compact('visaDetails'));
    }

    /**
     * İş vizesi detay sayfası
     */
    public function business()
    {
        $visaDetails = [
            'title' => 'İş Vizesi',
            'subtitle' => 'İş görüşmeleri, konferanslar ve ticari faaliyetler için',
            'price' => '350',
            'processing_time' => '10-15 iş günü',
            'validity' => '180 gün',
            'duration' => '30-90 gün',
            'required_documents' => [
                'Pasaport (en az 6 ay geçerli)',
                'Vize başvuru formu',
                'Biyometrik fotoğraf',
                'İş davetiye mektubu',
                'Şirket tescil belgesi',
                'Seyahat sigortası',
                'Finansal durum belgesi',
                'İş programı/itinerary'
            ],
            'process_steps' => [
                'Davetiye mektubunun hazırlanması',
                'Belgeler toplama ve düzenleme',
                'Başvuru randevusu alma',
                'Konsolosluk başvurusu',
                'Mülakatı geçme',
                'Vize onayı ve teslim'
            ],
            'countries' => [
                'ABD', 'İngiltere', 'Almanya', 'Fransa', 'Kanada',
                'Japonya', 'Çin', 'Singapur', 'BAE', 'Avustralya'
            ]
        ];

        return view('visa_types.business', compact('visaDetails'));
    }

    /**
     * Öğrenci vizesi detay sayfası
     */
    public function student()
    {
        $visaDetails = [
            'title' => 'Öğrenci Vizesi',
            'subtitle' => 'Eğitim hayalinizi gerçekleştirin',
            'price' => '400',
            'processing_time' => '15-20 iş günü',
            'validity' => '365 gün',
            'duration' => '1 yıl',
            'required_documents' => [
                'Pasaport (en az 6 ay geçerli)',
                'Kabul mektubu (Letter of Acceptance)',
                'Akademik transkriptler',
                'Dil yeterlilik belgesi',
                'Finansal kaynak belgesi',
                'Sağlık sigortası',
                'Barınma belgesi',
                'Motivasyon mektubu'
            ],
            'process_steps' => [
                'Okul başvurusu ve kabul',
                'Finansal kaynak kanıtlama',
                'Vize başvuru formu',
                'Konsolosluk randevusu',
                'Mülakat süreci',
                'Vize onayı ve seyahat'
            ],
            'countries' => [
                'ABD', 'İngiltere', 'Kanada', 'Avustralya', 'Almanya',
                'Fransa', 'Hollanda', 'İsveç', 'Norveç', 'Yeni Zelanda'
            ]
        ];

        return view('visa_types.student', compact('visaDetails'));
    }

    /**
     * Transit vizesi detay sayfası
     */
    public function transit()
    {
        $visaDetails = [
            'title' => 'Transit Vizesi',
            'subtitle' => 'Aktarmalı seyahatleriniz için hızlı çözüm',
            'price' => '150',
            'processing_time' => '3-5 iş günü',
            'validity' => '30 gün',
            'duration' => '24-72 saat',
            'required_documents' => [
                'Pasaport (en az 6 ay geçerli)',
                'Transit vize başvuru formu',
                'Uçak bileti (gidiş-dönüş)',
                'Final destinasyon vizesi',
                'Seyahat sigortası',
                'Havalimanı transfer belgesi'
            ],
            'process_steps' => [
                'Hızlı başvuru formu',
                'Belge kontrolü',
                'Express işlem',
                'Onay bildirimi',
                'Vize teslim'
            ],
            'countries' => [
                'Schengen Bölgesi', 'İngiltere', 'ABD', 'Kanada',
                'Rusya', 'Çin', 'Hindistan', 'Ukrayna'
            ]
        ];

        return view('visa_types.transit', compact('visaDetails'));
    }

    /**
     * Aile birleşimi vizesi detay sayfası
     */
    public function family()
    {
        $visaDetails = [
            'title' => 'Aile Birleşimi Vizesi',
            'subtitle' => 'Sevdiklerinizle bir araya gelme zamanı',
            'price' => '500',
            'processing_time' => '20-30 iş günü',
            'validity' => '730 gün',
            'duration' => '1-2 yıl',
            'required_documents' => [
                'Pasaport (en az 6 ay geçerli)',
                'Evlilik cüzdanı/doğum belgesi',
                'Sponsor belgesi',
                'Finansal destek kanıtı',
                'Barınma belgesi',
                'Sağlık raporu',
                'Sabıka kaydı belgesi',
                'Aile fotoğrafları'
            ],
            'process_steps' => [
                'Sponsor başvurusu',
                'Aile ilişkisi kanıtlama',
                'Finansal yeterlilik',
                'Detaylı mülakat',
                'Belge doğrulama',
                'Vize onayı'
            ],
            'countries' => [
                'ABD', 'Kanada', 'Avustralya', 'İngiltere', 'Almanya',
                'İsveç', 'Norveç', 'Danimarka', 'Hollanda', 'Yeni Zelanda'
            ]
        ];

        return view('visa_types.detail', compact('visaDetails'));
    }

    /**
     * Schengen vizesi detay sayfası
     */
    public function schengen()
    {
        $visaDetails = [
            'title' => 'Schengen Vizesi',
            'subtitle' => 'Tek vize ile 26 Avrupa ülkesini keşfedin',
            'price' => '300',
            'processing_time' => '10-15 iş günü',
            'validity' => '180 gün',
            'duration' => '90 gün',
            'required_documents' => [
                'Pasaport (en az 6 ay geçerli)',
                'Schengen vize başvuru formu',
                'Biyometrik fotoğraf',
                'Seyahat sigortası (30.000 EUR)',
                'Seyahat programı',
                'Otel rezervasyonları',
                'Uçak bilet rezervasyonu',
                'Mali durum belgesi'
            ],
            'process_steps' => [
                'Ülke seçimi ve planlama',
                'Belgeler hazırlama',
                'Randevu alma',
                'Başvuru ve biyometrik',
                'İşlem takibi',
                'Vize teslim alma'
            ],
            'countries' => [
                'Almanya', 'Fransa', 'İtalya', 'İspanya', 'Hollanda', 'Belçika',
                'Avusturya', 'İsviçre', 'Yunanistan', 'Portekiz', 'Çek Cumhuriyeti',
                'Polonya', 'Macaristan', 'Slovakya', 'Slovenya', 'Estonya',
                'Letonya', 'Litvanya', 'Finlandiya', 'İsveç', 'Norveç',
                'Danimarka', 'İzlanda', 'Lüksemburg', 'Malta', 'Lihtenştayn'
            ]
        ];

        return view('visa_types.detail', compact('visaDetails'));
    }
}

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
            'description_summary' => 'Tatil ve gezi amaçlı seyahatleriniz için hızlı vize işlemleri ve profesyonel danışmanlık.',
            'route' => 'visa-types.tourist',
            'image' => 'images/tourist_visa.jpg',
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
            'description_summary' => 'İş görüşmeleri ve toplantılarınız için öncelikli işlem garantisi ile güvenli vize başvurusu.',
            'route' => 'visa-types.business',
            'image' => 'images/business_visa.jpg',
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
            'description_summary' => 'Yurtdışı eğitim hayaliniz için okul kaydı ve uzun süreli ikamet vizesi danışmanlığı.',
            'route' => 'visa-types.student',
            'image' => 'images/student_visa.jpg',
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
            'description_summary' => 'Aktarmalı uçuşlarınız için 24-72 saat geçerli hızlı transit vize işlemleri.',
            'route' => 'visa-types.transit',
            'image' => 'images/transit_visa.jpg',
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
            'description_summary' => 'Sevdiklerinizle bir arada yaşamak için uzun süreli aile birleşimi vizesi desteği.',
            'route' => 'visa-types.family',
            'image' => 'images/family_visa.jpg',
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
            'description_summary' => '26 Avrupa ülkesine tek vize ile seyahat etmeniz için eksiksiz evrak hazırlığı.',
            'route' => 'visa-types.schengen',
            'image' => 'images/schengen_visa.jpg',
            'features' => [
                '26 ülke erişimi',
                'Çoklu giriş',
                'Esnek seyahat',
                'Güvenilir süreç'
            ]
        ],
        [
            'id' => 'dubai',
            'title' => 'Dubai Vizesi',
            'price' => '280',
            'duration' => '30-90 gün',
            'processing_time' => '3-5 iş günü',
            'validity' => '60 gün',
            'description' => 'BAE ve Dubai için hızlı turist vizesi',
            'description_summary' => 'BAE\'nin göz bebeği Dubai için 3-5 iş gününde e-vize ile hızlı giriş imkanı.',
            'route' => 'visa-types.dubai',
            'image' => 'images/dubai_visa.jpg',
            'features' => [
                'E-vize sistemi',
                'Hızlı onay',
                '30 gün kalış',
                'Uzatma imkanı'
            ]
        ],
        [
            'id' => 'usa',
            'title' => 'Amerika Vizesi',
            'price' => '600',
            'duration' => '6 ay - 10 yıl',
            'processing_time' => '30-60 gün',
            'validity' => '10 yıl',
            'description' => 'ABD B1/B2 turist ve iş vizesi',
            'description_summary' => 'ABD B1/B2 vizesi için mülakat hazırlığı ve 10 yıl geçerli çoklu giriş desteği.',
            'route' => 'visa-types.usa',
            'image' => 'images/usa_visa.jpg',
            'features' => [
                'Görüşme hazırlığı',
                'Çoklu giriş',
                '10 yıl geçerlilik',
                'Profesyonel danışmanlık'
            ]
        ],
        [
            'id' => 'uk',
            'title' => 'İngiltere Vizesi',
            'price' => '450',
            'duration' => '6 ay',
            'processing_time' => '15-20 iş günü',
            'validity' => '180 gün',
            'description' => 'UK Standard Visitor Visa',
            'description_summary' => 'UK Standard Visitor Visa için evrak hazırlığı ve randevu organizasyon hizmeti.',
            'route' => 'visa-types.uk',
            'image' => 'images/uk_visa.jpg',
            'features' => [
                'Standart ziyaretçi',
                '6 ay kalış',
                'Evrak desteği',
                'Randevu organizasyonu'
            ]
        ],
        [
            'id' => 'canada',
            'title' => 'Kanada Vizesi',
            'price' => '500',
            'duration' => '6 ay',
            'processing_time' => '20-30 iş günü',
            'validity' => '10 yıl',
            'description' => 'Kanada ziyaretçi vizesi (eTA)',
            'description_summary' => 'eTA online başvuru ve biyometrik işlemler için kapsamlı Kanada vize danışmanlığı.',
            'route' => 'visa-types.canada',
            'image' => 'images/canada_visa.jpg',
            'features' => [
                'eTA online başvuru',
                'Biyometrik destek',
                'Çoklu giriş',
                'Uzun geçerlilik'
            ]
        ],
        [
            'id' => 'russia',
            'title' => 'Rusya Vizesi',
            'price' => '320',
            'duration' => '30 gün',
            'processing_time' => '7-10 iş günü',
            'validity' => '30 gün',
            'description' => 'Rusya turist vizesi',
            'description_summary' => 'Turistik davetiye ve voucher desteği ile Rusya vizesi için hızlı başvuru süreci.',
            'route' => 'visa-types.russia',
            'image' => 'images/russia_visa.jpg',
            'features' => [
                'Davetiye desteği',
                'Turist voucher',
                'Hızlı işlem',
                'Sigorta dahil'
            ]
        ],
        [
            'id' => 'china',
            'title' => 'Çin Vizesi',
            'price' => '380',
            'duration' => '30 gün',
            'processing_time' => '5-7 iş günü',
            'validity' => '90 gün',
            'description' => 'Çin turist vizesi (L Visa)',
            'description_summary' => 'L Visa turist vizesi için otel rezervasyonu ve uçak bileti desteği ile kolay başvuru.',
            'route' => 'visa-types.china',
            'image' => 'images/china_visa.jpg',
            'features' => [
                'Tek/çift giriş',
                'Otel rezervasyon',
                'Uçak bileti desteği',
                'Hızlı süreç'
            ]
        ],
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

        return view('visa_types.family', compact('visaDetails'));
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

        return view('visa_types.schengen', compact('visaDetails'));
    }
}

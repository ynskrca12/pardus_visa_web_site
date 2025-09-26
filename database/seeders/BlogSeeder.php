<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Schengen Vizesi Başvuru Rehberi 2025',
                'content' => '<h2>Schengen Vizesi Nedir?</h2>
                <p>Schengen vizesi, 26 Avrupa ülkesinde geçerli olan özel bir vize türüdür. Bu vize ile 90 güne kadar Avrupa\'da kalabilirsiniz.</p>

                <h3>Gerekli Belgeler</h3>
                <ul>
                <li>En az 6 ay geçerli pasaport</li>
                <li>Vize başvuru formu</li>
                <li>Biyometrik fotoğraf</li>
                <li>Seyahat sigortası (30.000 EUR)</li>
                <li>Otel rezervasyonları</li>
                <li>Mali durum belgesi</li>
                </ul>

                <h3>Başvuru Süreci</h3>
                <p>Başvuru süreci 10-15 iş günü sürer. En erken 6 ay, en geç 15 gün öncesinden başvuru yapabilirsiniz.</p>',
                'excerpt' => 'Schengen vizesi başvuru sürecinde bilmeniz gereken tüm detaylar ve gerekli belgeler.',
                'image' => 'schengen-visa.jpg',
                'meta_title' => 'Schengen Vizesi Başvuru Rehberi 2025',
                'meta_description' => 'Schengen vizesi başvuru süreci, gerekli belgeler ve ipuçları.',
                'keywords' => 'schengen vizesi, avrupa vizesi, vize başvuru',
                'status' => 'published',
                'featured' => true,
                'published_at' => now()->subDays(5),
                'views' => 1250
            ],
            [
                'title' => 'Amerika Vizesi B1/B2 Mülakat Rehberi',
                'content' => '<h2>Amerika Vizesi Başvuru Süreci</h2>
                <p>ABD B1/B2 vizesi hem iş hem turizm amaçlı seyahatler için kullanılır. Mülakat süreci kritik öneme sahiptir.</p>

                <h3>Mülakat Hazırlığı</h3>
                <ul>
                <li>Seyahat amacınızı net açıklayın</li>
                <li>Mali durumunuzu kanıtlayın</li>
                <li>Ülkeye dönüş bağlarınızı gösterin</li>
                <li>Tutarlı cevaplar verin</li>
                </ul>

                <h3>Sık Sorulan Sorular</h3>
                <p>Amerika\'ya neden gidiyorsunuz? Ne kadar kalacaksınız? Kim finanse ediyor? Türkiye\'ye dönmek için bağlarınız neler?</p>',
                'excerpt' => 'Amerika B1/B2 vizesi mülakat sürecinde başarılı olmanın yolları.',
                'image' => 'usa-visa.jpg',
                'meta_title' => 'Amerika Vizesi B1/B2 Mülakat Rehberi',
                'meta_description' => 'ABD vizesi mülakat süreci ve başarı ipuçları.',
                'keywords' => 'amerika vizesi, abd vizesi, vize mülakat',
                'status' => 'published',
                'featured' => true,
                'published_at' => now()->subDays(10),
                'views' => 890
            ],
            [
                'title' => 'Seyahat Sigortası Seçim Rehberi',
                'content' => '<h2>Seyahat Sigortası Neden Gerekli?</h2>
                <p>Yurtdışı seyahatlerinizde beklenmedik durumlar için maddi koruma sağlar. Birçok ülke için vize şartıdır.</p>

                <h3>Ülkelere Göre Gereksinimler</h3>
                <ul>
                <li>Schengen Ülkeleri: 30.000 EUR zorunlu</li>
                <li>ABD: Minimum yok, yüksek teminat önerilen</li>
                <li>Rusya: 30.000 USD gerekli</li>
                <li>İngiltere: Zorunlu değil, önerilen</li>
                </ul>

                <h3>Sigorta Seçerken Dikkat Edilecekler</h3>
                <p>Teminat miktarı, kapsam alanı, istisna durumları ve yaş sınırlarını kontrol edin.</p>',
                'excerpt' => 'Yurtdışı seyahat için doğru sigorta seçimi ve ülkelere göre gereksinimler.',
                'image' => 'travel-insurance.jpg',
                'meta_title' => 'Seyahat Sigortası Seçim Rehberi 2025',
                'meta_description' => 'Yurtdışı seyahat sigortası seçimi ve ülkelere göre şartlar.',
                'keywords' => 'seyahat sigortası, vize sigortası, travel insurance',
                'status' => 'published',
                'featured' => false,
                'published_at' => now()->subDays(15),
                'views' => 650
            ]
        ];

        foreach ($blogs as $blogData) {
            $blogData['slug'] = Str::slug($blogData['title']);
            Blog::create($blogData);
        }
    }
}

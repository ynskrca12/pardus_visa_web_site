<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reçete Uygunluk Sistemi - Adi Sözleşme</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 40px;
            line-height: 1.6;
            color: #333;
            background-color: white;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .contract-info {
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
            text-decoration: underline;
        }
        .price-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .price-table th, .price-table td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        .price-table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }
        .total-row {
            font-weight: bold;
            background-color: #f9f9f9;
        }
        .signature-section {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature-box {
            width: 45%;
            text-align: center;
        }
        .signature-line {
            border-bottom: 1px solid #333;
            margin-bottom: 5px;
            height: 50px;
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 8px;
        }
        .highlight {
            background-color: #ffffcc;
            padding: 2px 4px;
        }
        .contact-info {
            margin-top: 30px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        @media print {
            body { margin: 20px; }
            .no-print { display: none; }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Yazılım Geliştirme Hizmet Sözleşmesi</h1>
        <p><strong>Reçete Uygunluk Sistemi Projesi</strong></p>
    </div>

    <div class="contract-info">
        <p><strong>Sözleşme Tarihi:</strong> ........................</p>
        <p><strong>Sözleşme No:</strong> RUS-2025-001</p>
    </div>

    <div class="section">
        <div class="section-title">TARAFLAR</div>
        <p><strong>Hizmet Sağlayıcı (Geliştiricisi):</strong></p>
        <p>Ad Soyad: ........................</p>
        <p>Adres: ........................</p>
        <p>Telefon: ........................</p>
        <p>E-posta: ........................</p>
        <br>
        <p><strong>Müşteri (Hizmet Alan):</strong></p>
        <p>Ad Soyad/Kurum: ........................</p>
        <p>Adres: ........................</p>
        <p>Telefon: ........................</p>
        <p>E-posta: ........................</p>
    </div>

    <div class="section">
        <div class="section-title">1. PROJE KAPSAMI VE HİZMETLER</div>

        <p><strong>1.1. Ana Proje: Reçete Uygunluk Sistemi</strong></p>
        <ul>
            <li><strong>QR Kod Tabanlı Giriş Sistemi:</strong> QR kod okutma + 1000 şifre yönetimi</li>
            <li><strong>Branş ve Tanı Kodu Yönetimi:</strong> Hekimlerin branşlarına göre tanı kodları listeleme</li>
            <li><strong>İlaç Uygunluk Sistemi:</strong> 25 adet ilaç ve her ilaç için özel kurallar</li>
            <li><strong>Dinamik Kural Motoru:</strong>
                <ul>
                    <li>Laboratuvar değeri kontrolleri (belirli aralıklar)</li>
                    <li>Öncül sorular sistemi (evet/hayır)</li>
                    <li>Koşullu reçete uygunluk değerlendirmesi</li>
                </ul>
            </li>
            <li><strong>Soru-Sor Formu:</strong> Belge/görsel yükleme + mail sistemi</li>
        </ul>

        <p><strong>1.2. Teknik Özellikler</strong></p>
        <ul>
            <li>Laravel Framework ile backend geliştirme</li>
            <li>Responsive web arayüzü</li>
            <li>Veritabanı tasarımı ve optimizasyonu</li>
            <li>Test ve entegrasyon işlemleri</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">2. FİYATLANDırma</div>

        <table class="price-table">
            <thead>
                <tr>
                    <th>Hizmet Tanımı</th>
                    <th>Birim Fiyat (TL)</th>
                    <th>KDV (%20)</th>
                    <th>Toplam (TL)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Reçete Uygunluk Sistemi - Tam Geliştirme</td>
                    <td>70.000,00</td>
                    <td>14.000,00</td>
                    <td>84.000,00</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3"><strong>GENEL TOPLAM</strong></td>
                    <td><strong>84.000,00 TL</strong></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="section">
        <div class="section-title">3. DEVAM EDEN HİZMETLER (AYLIK)</div>

        <table class="price-table">
            <thead>
                <tr>
                    <th>Hizmet Tanımı</th>
                    <th>Aylık Fiyat (TL)</th>
                    <th>KDV (%20)</th>
                    <th>Aylık Toplam (TL)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Güncelleme Hizmeti (Max 10 değer değişikliği + 1 ilaç ekleme)</td>
                    <td>3.000,00</td>
                    <td>600,00</td>
                    <td>3.600,00</td>
                </tr>
                <tr>
                    <td>Hosting + Teknik Destek Hizmeti</td>
                    <td>2.000,00</td>
                    <td>400,00</td>
                    <td>2.400,00</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3"><strong>AYLIK TOPLAM</strong></td>
                    <td><strong>6.000,00 TL</strong></td>
                </tr>
            </tbody>
        </table>

        <p><strong>Hosting Hizmeti İçeriği:</strong></p>
        <ul>
            <li>Sunucu yönetimi ve izleme</li>
            <li>Güvenlik güncellemeleri</li>
            <li>SSL sertifika yönetimi</li>
            <li>Performans optimizasyonu</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">4. ÖDEME KOŞULLARI</div>

        <p><strong>4.1. Ana Proje Ödeme Planı (Toplam: 84.000 TL)</strong></p>
        <table class="price-table">
            <thead>
                <tr>
                    <th>Hafta</th>
                    <th>Tamamlanan İşler</th>
                    <th>Ödeme Tutarı (TL)</th>
                    <th>Kümülatif (TL)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Başlangıç</td>
                    <td>Sözleşme imzalama</td>
                    <td>14.000,00</td>
                    <td>14.000,00</td>
                </tr>
                <tr>
                    <td>1. Hafta</td>
                    <td>Veritabanı tasarımı + QR sistemi</td>
                    <td>14.000,00</td>
                    <td>28.000,00</td>
                </tr>
                <tr>
                    <td>2. Hafta</td>
                    <td>Branş-tanı-ilaç yönetimi</td>
                    <td>14.000,00</td>
                    <td>42.000,00</td>
                </tr>
                <tr>
                    <td>3. Hafta</td>
                    <td>Dinamik kural motoru</td>
                    <td>14.000,00</td>
                    <td>56.000,00</td>
                </tr>
                <tr>
                    <td>4. Hafta</td>
                    <td>Frontend geliştirme</td>
                    <td>14.000,00</td>
                    <td>70.000,00</td>
                </tr>
                <tr>
                    <td>5-6. Hafta</td>
                    <td>Test + entegrasyon + teslim</td>
                    <td>14.000,00</td>
                    <td>84.000,00</td>
                </tr>
            </tbody>
        </table>

        <p><strong>4.2. Diğer Ödeme Koşulları</strong></p>
        <ul>
            <li><strong>Aylık Hizmetler:</strong> Her ayın 1'inde peşin ödeme</li>
            <li><strong>Ödeme Yöntemi:</strong> Banka havalesi / EFT</li>
            <li><strong>Haftalık Onay:</strong> Her hafta tamamlanan iş müşteri onayı alındıktan sonra faturalandırılır ve ücret alınır</li>
            <li><strong>İş Durması:</strong> Ödeme gecikmesi durumunda iş durdurulur</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">5. TESLİMAT VE SÜRE</div>
        <ul>
            <li><strong>Proje Teslim Süresi:</strong> Avans alımından itibaren 6 hafta</li>
            <li><strong>Test Süresi:</strong> 1 hafta (müşteri testleri)</li>
            <li><strong>Revizyon Hakkı:</strong> 3 adet minör revizyon dahil</li>
            <li><strong>Eğitim:</strong> 2 saatlik kullanıcı eğitimi dahil</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">6. GARANTİ VE SORUMLULUKLAR</div>
        <ul>
            <li><strong>Bug Fix:</strong> Garanti kapsamındaki hatalar ücretsiz</li>
            <li><strong>Telif Hakları:</strong> Geliştirilen yazılım müşteriye aittir</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">7. ÖZEL HÜKÜMLER</div>
        <ul>
            <li>Kullanıcı sayısı 100'ü aştığında hosting maliyeti revize edilir</li>
            <li>Aylık hizmet sözleşmesi minimum 1 yıl sürelidir</li>
            <li>Büyük sistem değişiklikleri ayrı fiyatlandırılır</li>
            <li>Proje iptal durumunda yapılan çalışma bedeli tahsil edilir</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">8. SÖZLEŞME SÜRESİ VE FESİH</div>
        <ul>
            <li>Ana proje sözleşmesi proje teslimi ile sona erer</li>
            <li>Aylık hizmetler 1 ay önceden bildirilerek feshedilebilir</li>
            <li>Cayma durumunda avanslar iade edilmez</li>
        </ul>
    </div>

    <div class="contact-info">
        <strong>İletişim ve Destek:</strong><br>
        Çalışma Saatleri: Pazartesi-Cuma 09:00-18:00<br>
        Acil Durum: 7/24 (hosting hizmetleri için)<br>
        E-posta: ........................<br>
        Telefon: ........................
    </div>

    <p style="margin-top: 30px; font-size: 14px; color: #666;">
        <em>Bu sözleşme Türkiye Cumhuriyeti yasalarına tabidir. Uyuşmazlıklar İstanbul Mahkemeleri'nde çözülür.</em>
    </p>

    <div class="signature-section">
        <div class="signature-box">
            <div class="signature-line"></div>
            <p><strong>Hizmet Sağlayıcı</strong><br>
            Ad Soyad:<br>
            Tarih:<br>
            İmza:</p>
        </div>
        <div class="signature-box">
            <div class="signature-line"></div>
            <p><strong>Müşteri</strong><br>
            Ad Soyad:<br>
            Tarih:<br>
            İmza:</p>
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px; font-size: 12px; color: #888;">
        Sayfa 1/1 - Reçete Uygunluk Sistemi Sözleşmesi
    </div>

    <script>
        // Print functionality
        window.onload = function() {
            // Auto-fill current date
            const today = new Date().toLocaleDateString('tr-TR');
            console.log('Sözleşme hazırlandı:', today);
        }
    </script>
</body>
</html>

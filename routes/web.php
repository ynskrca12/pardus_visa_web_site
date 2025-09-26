<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisaTypeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ApplicationProcessController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Ana Sayfa
Route::get('/', [HomeController::class, 'index'])->name('home');

// Vize Türleri - SEO friendly URLs
Route::prefix('vize-turleri')->name('visa-types.')->group(function () {
    Route::get('/', [VisaTypeController::class, 'visa_types_index'])->name('visa_types_index');
    Route::get('/turist-vizesi', [VisaTypeController::class, 'tourist'])->name('tourist');
    Route::get('/is-vizesi', [VisaTypeController::class, 'business'])->name('business');
    Route::get('/ogrenci-vizesi', [VisaTypeController::class, 'student'])->name('student');
    Route::get('/transit-vizesi', [VisaTypeController::class, 'transit'])->name('transit');
    Route::get('/aile-birlesimi-vizesi', [VisaTypeController::class, 'family'])->name('family');
    Route::get('/schengen-vizesi', [VisaTypeController::class, 'schengen'])->name('schengen');
});

// Ülkeler - Her ülke için SEO friendly URL
Route::prefix('ulkeler')->name('countries.')->group(function () {
    Route::get('/', [CountryController::class, 'country_index'])->name('index');

    // Popüler destinasyonlar
    Route::get('/amerika-vizesi', [CountryController::class, 'usa'])->name('usa');
    Route::get('/kanada-vizesi', [CountryController::class, 'canada'])->name('canada');
    Route::get('/ingiltere-vizesi', [CountryController::class, 'uk'])->name('uk');
    Route::get('/almanya-vizesi', [CountryController::class, 'germany'])->name('germany');
    Route::get('/fransa-vizesi', [CountryController::class, 'france'])->name('france');
    Route::get('/italya-vizesi', [CountryController::class, 'italy'])->name('italy');
    Route::get('/ispanya-vizesi', [CountryController::class, 'spain'])->name('spain');
    Route::get('/hollanda-vizesi', [CountryController::class, 'netherlands'])->name('netherlands');
    Route::get('/avustralya-vizesi', [CountryController::class, 'australia'])->name('australia');
    Route::get('/japonya-vizesi', [CountryController::class, 'japan'])->name('japan');
    Route::get('/cin-vizesi', [CountryController::class, 'china'])->name('china');
    Route::get('/rusya-vizesi', [CountryController::class, 'russia'])->name('russia');
    Route::get('/dubai-vizesi', [CountryController::class, 'uae'])->name('uae');

    // Genel ülke detay sayfası
    Route::get('/{country:slug}', [CountryController::class, 'show'])->name('show');
});

// Başvuru Süreci
Route::prefix('basvuru-sureci')->name('application-process.')->group(function () {
    Route::get('/', [ApplicationProcessController::class, 'index'])->name('index');
    Route::get('/gerekli-belgeler', [ApplicationProcessController::class, 'documents'])->name('documents');
    Route::get('/randevu-alma', [ApplicationProcessController::class, 'appointment'])->name('appointment');
    Route::get('/vize-ucretleri', [ApplicationProcessController::class, 'fees'])->name('fees');
    Route::get('/bekleme-sureleri', [ApplicationProcessController::class, 'processing-times'])->name('processing-times');
    Route::get('/vize-reddi-durumunda', [ApplicationProcessController::class, 'rejection'])->name('rejection');
});

// Hizmetlerimiz
Route::prefix('hizmetlerimiz')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'service_index'])->name('index');
    Route::get('/vize-danismanligi', [ServiceController::class, 'consultation'])->name('consultation');
    Route::get('/belge-hazirlik', [ServiceController::class, 'document-preparation'])->name('document-preparation');
    Route::get('/randevu-alma-hizmeti', [ServiceController::class, 'appointment-service'])->name('appointment-service');
    Route::get('/vize-takip', [ServiceController::class, 'tracking'])->name('tracking');
    Route::get('/acil-vize', [ServiceController::class, 'urgent-visa'])->name('urgent-visa');
    Route::get('/grup-vize', [ServiceController::class, 'group-visa'])->name('group-visa');
    Route::get('/vize-sigortasi', [ServiceController::class, 'visa-insurance'])->name('visa-insurance');
    Route::get('/tercume-hizmeti', [ServiceController::class, 'translation'])->name('translation');
});

// İletişim ve Form İşlemleri
Route::prefix('iletisim')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/mesaj-gonder', [ContactController::class, 'send'])->name('send');
    Route::get('/subelerimiz', [ContactController::class, 'branches'])->name('branches');
});

Route::get('/hakkimizda', [ContactController::class, 'about_us'])->name('about.us');

// // Blog - SEO için kritik
// Route::prefix('blog')->name('blog.')->group(function () {
//     Route::get('/', [BlogController::class, 'index'])->name('index');
//     Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('show');
// });

// Public Blog Routes (Frontend)
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

// Admin Blog Routes (Backend - Auth middleware gerekli)
Route::prefix('admin/blog')->name('admin.blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'adminIndex'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/', [BlogController::class, 'store'])->name('store');
    Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('edit');
    Route::put('/{blog}', [BlogController::class, 'update'])->name('update');
    Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('destroy');

    // AJAX Routes
    Route::post('/{blog}/toggle-featured', [BlogController::class, 'toggleFeatured'])->name('toggle-featured');
    Route::post('/{blog}/update-status', [BlogController::class, 'updateStatus'])->name('update-status');
});

// API Routes (AJAX istekleri için)
Route::prefix('api/blog')->name('api.blog.')->group(function () {
    Route::get('/recent', [BlogController::class, 'getRecentBlogs'])->name('recent');
    Route::get('/popular', [BlogController::class, 'getPopularBlogs'])->name('popular');
    Route::get('/search', [BlogController::class, 'searchBlogs'])->name('search');
});


// SEO ve Sitemap
// Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');
// Route::get('/robots.txt', [HomeController::class, 'robots'])->name('robots');

<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RedirectController;
use App\Livewire\Pages\Aboutus;
use App\Livewire\Pages\Academics;
use App\Livewire\Pages\Activities;
use App\Livewire\Pages\Admissions;
use App\Livewire\Pages\AwardsAchievements;
use App\Livewire\Pages\BsdSchool;
use App\Livewire\Pages\Calendar;
use App\Livewire\Pages\Carrer;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\DetailArticle;
use App\Livewire\Pages\EarlyYears;
use App\Livewire\Pages\Extracurricular;
use App\Livewire\Pages\Faq;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\HowToApply;
use App\Livewire\Pages\LavenueSchools;
use App\Livewire\Pages\Leadership;
use App\Livewire\Pages\MedanSchool;
use App\Livewire\Pages\News;
use App\Livewire\Pages\Ourapproach;
use App\Livewire\Pages\Ourschools;
use App\Livewire\Pages\OverviewAdmissions;
use App\Livewire\Pages\SentulSchool;
use App\Livewire\Pages\Steam;
use App\Livewire\Pages\SurabayaSchool;
use App\Livewire\Test;
use App\Models\Page;
use Illuminate\Support\Facades\Route;


Route::post('/form', [FormController::class, 'submit']);
Route::get("/", Home::class);
Route::get("/aboutus", Aboutus::class);
Route::get("/aboutus/ourapproach", Ourapproach::class);
Route::get('/aboutus/leadership', Leadership::class);

Route::get('/steam', Steam::class);
Route::get("/academics", Academics::class);
Route::get('/academics/early-years', EarlyYears::class);
Route::get('/academics/elementary-school', \App\Livewire\Pages\ElementarySchool::class);
Route::get('/academics/middle-school', \App\Livewire\Pages\MiddleSchool::class);
Route::get('/academics/high-school', \App\Livewire\Pages\HighSchool::class);
Route::get('/academics/online-school', \App\Livewire\Pages\OnlineSchool::class);
Route::get("/academics/calendars", Calendar::class);
Route::get("/ourschools", Ourschools::class);
Route::get("/ourschools/lavenue", LavenueSchools::class);
Route::get('/ourschools/bsd', BsdSchool::class);
Route::get('/ourschools/sentul', SentulSchool::class);
Route::get('/ourschools/surabaya', SurabayaSchool::class);
Route::get('/ourschools/medan', MedanSchool::class);

Route::get("/activities", Activities::class);
Route::get('/activities/extracurricular', Extracurricular::class);
Route::get('/activities/awards-achievements', AwardsAchievements::class);
Route::get('/admissions', Admissions::class);
Route::get("/admissions/overview", OverviewAdmissions::class);
Route::get("/admissions/how-to-apply", HowToApply::class);
Route::get("/career", Carrer::class);
Route::get("/news", News::class);
Route::get('/contact', Contact::class);
Route::get("/faq", Faq::class);

Route::get("/news/{slug}", DetailArticle::class)->name("read-article");

Route::get("/{slug}", function ( $slug) {
    $page = Page::where("slug", $slug)->firstOrFail();

    $locale = app()->getLocale();

    $content = match ($locale) {
        "id" => $page->content_id,
        "en" => $page->content_en
    };

    return view("page", [
        "page" => $page,
        "content" => json_decode($content, true),
    ]);
})->name("dynamic-page");

Route::get("/login", function () {
    \Illuminate\Support\Facades\Auth::attempt([
        "email" => "admin@gmail.com",
        "password" => "admin"
    ]);
})->name("login");

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

// Redirect Area

Route::get('/id/tentang-kami', function () {
    session()->put('locale', "id");
    return redirect('/aboutus', 301); // 301 untuk redirect permanen

});
Route::get('/id/sekolah-menengah-atas', function () {
    session()->put('locale', "id");
    return redirect('/academics/high-school', 301); // 301 untuk redirect permanen

});
Route::get('id/kampus-lavenue/', function () {
    session()->put('locale', "id");
    return redirect('/ourschools/lavenue', 301); // 301 untuk redirect permanen

});
Route::get('id/karir/', function () {
    session()->put('locale', "id");
    return redirect('/career', 301); // 301 untuk redirect permanen

});
Route::get('id/beranda/', function () {
    session()->put('locale', "id");
    return redirect('/', 301); // 301 untuk redirect permanen

});
Route::get('/id/penerimaan-siswa-sampoerna-academy/', function () {
    session()->put('locale', "id");
    return redirect('/admissions/overview', 301); // 301 untuk redirect permanen

});
Route::get('id/', function () {
    session()->put('locale', "id");
    return redirect('/', 301); // 301 untuk redirect permanen

});
Route::get('id/kampus-bsd/', function () {
    session()->put('locale', "id");
    return redirect('/ourschools/bsd', 301); // 301 untuk redirect permanen

});

// Redirect For Article
Route::get('id/transformasi-geometri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/transformasi-geometri', 301);
});

Route::get('id/pendidikan-inklusif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pendidikan-inklusif', 301);
});

Route::get('id/problem-based-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/problem-based-learning', 301);
});

Route::get('id/reproduksi-bakteri-penjelasan-jenis-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/reproduksi-bakteri-penjelasan-jenis-dan-contohnya', 301);
});

Route::get('id/noun-phrase-pengertian-pola-rumus-dan-contoh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/noun-phrase-pengertian-pola-rumus-dan-contoh', 301);
});

Route::get('id/persamaan-linear/', function () {
    session()->put('locale', 'id');
    return redirect('/news/persamaan-linear', 301);
});

Route::get('id/rumus-deret-geometri-tak-hingga/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-deret-geometri-tak-hingga', 301);
});

Route::get('id/pengertian-sel-volta/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-sel-volta', 301);
});

Route::get('id/katrol-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/katrol-adalah', 301);
});

Route::get('id/penjelasan-mengenai-pembelahan-sel-mitosis-dan-meiosis/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penjelasan-mengenai-pembelahan-sel-mitosis-dan-meiosis', 301);
});

Route::get('id/pengertian-sintesis-protein/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-sintesis-protein', 301);
});

Route::get('id/teori-belajar-humanistik-pengertian-ciri-tujuan-hingga-manfaatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-belajar-humanistik-pengertian-ciri-tujuan-hingga-manfaatnya', 301);
});

Route::get('id/alkali-tanah-unsur-sifat-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/alkali-tanah-unsur-sifat-dan-contoh-soal', 301);
});

Route::get('id/pengertian-program-linear/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-program-linear', 301);
});

Route::get('id/liberalisme-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/liberalisme-adalah', 301);
});

Route::get('id/gaya-belajar-visual-auditori-dan-kinestetik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/gaya-belajar-visual-auditori-dan-kinestetik', 301);
});

Route::get('id/pengertian-korosi-proses-faktor-dampak-cara-pencegahan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-korosi-proses-faktor-dampak-cara-pencegahan', 301);
});

Route::get('id/fungsi-komposisi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fungsi-komposisi', 301);
});

Route::get('id/pengertian-dan-bentuk-aljabar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-dan-bentuk-aljabar', 301);
});

Route::get('id/stoikiometri-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/stoikiometri-adalah', 301);
});

Route::get('id/rumus-teorema-pythagoras/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-teorema-pythagoras', 301);
});

Route::get('id/perubahan-wujud-benda/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perubahan-wujud-benda', 301);
});

Route::get('id/paragraf-deduktif-dan-induktif-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/paragraf-deduktif-dan-induktif-adalah', 301);
});

Route::get('id/respirasi-aerob/', function () {
    session()->put('locale', 'id');
    return redirect('/news/respirasi-aerob', 301);
});

Route::get('id/pesawat-sederhana-pengertian-jenis-rumus-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pesawat-sederhana-pengertian-jenis-rumus-dan-contoh-soal', 301);
});

Route::get('id/hereditas-pengertian-teori-mendel-dan-pola-pada-manusia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hereditas-pengertian-teori-mendel-dan-pola-pada-manusia', 301);
});

Route::get('id/kalor-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kalor-adalah', 301);
});

Route::get('id/archaebacteria-pengertian-ciri-ciri-contoh-manfaatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/archaebacteria-pengertian-ciri-ciri-contoh-manfaatnya', 301);
});

Route::get('id/energi-tak-terbarukan-arti-jenis-manfaat-dan-contoh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/energi-tak-terbarukan-arti-jenis-manfaat-dan-contoh', 301);
});

Route::get('id/notasi-ilmiah-pengertian-tujuan-rumus-hingga-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/notasi-ilmiah-pengertian-tujuan-rumus-hingga-contoh-soal', 301);
});

Route::get('id/jangka-sorong-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/jangka-sorong-adalah', 301);
});

Route::get('id/penginderaan-jauh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penginderaan-jauh', 301);
});

Route::get('id/teori-kebutuhan-maslow/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-kebutuhan-maslow', 301);
});

Route::get('id/konsentrasi-larutan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/konsentrasi-larutan', 301);
});

Route::get('id/eksoterm-dan-endoterm/', function () {
    session()->put('locale', 'id');
    return redirect('/news/eksoterm-dan-endoterm', 301);
});

Route::get('id/rumus-slovin/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-slovin', 301);
});

Route::get('id/persamaan-trigonometri-sin-cos-tangen-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/persamaan-trigonometri-sin-cos-tangen-contoh-soal', 301);
});

Route::get('id/subject-verb-agreement/', function () {
    session()->put('locale', 'id');
    return redirect('/news/subject-verb-agreement', 301);
});

Route::get('id/pengertian-passive-voice/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-passive-voice', 301);
});

Route::get('id/permutasi-dan-kombinasi-pengertian-rumus-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/permutasi-dan-kombinasi-pengertian-rumus-dan-contoh-soal', 301);
});

Route::get('id/panca-indera-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/panca-indera-adalah', 301);
});

Route::get('id/pengertian-menyublim-proses-contoh-dan-prosesnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-menyublim-proses-contoh-dan-prosesnya', 301);
});

Route::get('id/rumah-adat-betawi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumah-adat-betawi', 301);
});

Route::get('id/penerapan-kpk-dan-fpb-dalam-kehidupan-sehari-hari/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penerapan-kpk-dan-fpb-dalam-kehidupan-sehari-hari', 301);
});

Route::get('id/problem-based-learning-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/problem-based-learning-sampoerna-academy', 301);
});

Route::get('id/eubacteria-pengertian-ciri-ciri-struktur-dan-klasifikasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/eubacteria-pengertian-ciri-ciri-struktur-dan-klasifikasi', 301);
});

Route::get('id/kerajaan-medang-kamulan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-medang-kamulan', 301);
});

Route::get('id/karya-tulis-ilmiah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/karya-tulis-ilmiah', 301);
});

Route::get('id/sifat-distributif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-distributif', 301);
});

Route::get('id/pengertian-hidroponik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-hidroponik', 301);
});

Route::get('id/sifat-asosiatif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-asosiatif', 301);
});

Route::get('id/pengertian-discovery-learning-langkah-kelebihan-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-discovery-learning-langkah-kelebihan-dan-contohnya', 301);
});

Route::get('id/dilatasi-adalah-bagian-penting-geometri-rumus-dan-contoh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/dilatasi-adalah-bagian-penting-geometri-rumus-dan-contoh', 301);
});

Route::get('id/penerimaan-siswa-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penerimaan-siswa-sampoerna-academy', 301);
});

Route::get('id/pengertian-oksidasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-oksidasi', 301);
});

Route::get('id/teori-atom-mekanika-kuantum/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-atom-mekanika-kuantum', 301);
});

Route::get('id/pecahan-desimal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pecahan-desimal', 301);
});

Route::get('id/worksheet-for-kindergarten/', function () {
    session()->put('locale', 'id');
    return redirect('/news/worksheet-for-kindergarten', 301);
});

Route::get('id/gerund-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/gerund-adalah', 301);
});

Route::get('id/laju-reaksi-pengertian-rumus-dan-faktor-yang-mempengaruhinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/laju-reaksi-pengertian-rumus-dan-faktor-yang-mempengaruhinya', 301);
});

Route::get('id/contoh-diagram-venn/', function () {
    session()->put('locale', 'id');
    return redirect('/news/contoh-diagram-venn', 301);
});

Route::get('id/5-contoh-game-based-learning-yang-bisa-dicoba-dalam-kelas/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-contoh-game-based-learning-yang-bisa-dicoba-dalam-kelas', 301);
});

Route::get('id/termodinamika/', function () {
    session()->put('locale', 'id');
    return redirect('/news/termodinamika', 301);
});

Route::get('id/pengertian-gradien-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-gradien-dan-contoh-soal', 301);
});

Route::get('id/limit-fungsi-trigonometri-rumus-sifat-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/limit-fungsi-trigonometri-rumus-sifat-dan-contoh-soal', 301);
});

Route::get('id/distribusi-peluang-binomial-pengertian-tabel-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/distribusi-peluang-binomial-pengertian-tabel-dan-contoh-soal', 301);
});

Route::get('id/hukum-coulomb-pengertian-rumus-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-coulomb-pengertian-rumus-dan-contoh-soal', 301);
});

Route::get('id/pengertian-perubahan-sosial-proses-faktor-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-perubahan-sosial-proses-faktor-dan-contohnya', 301);
});

Route::get('id/hukum-ohm/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-ohm', 301);
});

Route::get('id/momen-inersia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/momen-inersia', 301);
});

Route::get('id/antropologi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/antropologi-adalah', 301);
});

Route::get('id/pengertian-kapilaritas-rumus-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-kapilaritas-rumus-dan-contohnya', 301);
});

Route::get('id/pengertian-zaman-neozoikum-ciri-ciri-dan-pembagiannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-zaman-neozoikum-ciri-ciri-dan-pembagiannya', 301);
});

Route::get('id/teori-belajar-behavioristik-prinsip-hukum-dan-cirinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-belajar-behavioristik-prinsip-hukum-dan-cirinya', 301);
});

Route::get('id/bangun-ruang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bangun-ruang', 301);
});

Route::get('id/pengertian-fluida-statis-besaran-tekanan-dan-hukumnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-fluida-statis-besaran-tekanan-dan-hukumnya', 301);
});

Route::get('id/game-based-learning-metode-pembelajaran-yang-menyenangkan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/game-based-learning-metode-pembelajaran-yang-menyenangkan', 301);
});

Route::get('id/proses-terjadinya-hibridisasi-kimia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/proses-terjadinya-hibridisasi-kimia', 301);
});

Route::get('id/apa-itu-uji-benedict-prosedur-dan-pembuatannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-uji-benedict-prosedur-dan-pembuatannya', 301);
});

Route::get('id/mengenal-teori-gestalt-dan-penerapannya-dalam-pembelajaran/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-teori-gestalt-dan-penerapannya-dalam-pembelajaran', 301);
});

Route::get('id/pengertian-hukum-newton-3/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-hukum-newton-3', 301);
});

Route::get('id/rumus-molaritas/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-molaritas', 301);
});

Route::get('id/mengenal-3-jenis-kecerdasan-iq-eq-dan-sq/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-3-jenis-kecerdasan-iq-eq-dan-sq', 301);
});

Route::get('id/teori-lempeng-tektonik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-lempeng-tektonik', 301);
});

Route::get('id/pengertian-kromatografi-cara-kerja-dan-tipenya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-kromatografi-cara-kerja-dan-tipenya', 301);
});

Route::get('id/10-penerapan-sains-dalam-kehidupan-sehari-hari/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-penerapan-sains-dalam-kehidupan-sehari-hari', 301);
});

Route::get('id/tata-surya-planet/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tata-surya-planet', 301);
});

Route::get('id/kerajaan-kalingga/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-kalingga', 301);
});

Route::get('id/pendidikan-multikultural/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pendidikan-multikultural', 301);
});

Route::get('id/induksi-elektromagnetik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/induksi-elektromagnetik', 301);
});

Route::get('id/5-alasan-kenapa-singapore-menjadi-negara-maju-se-asia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-alasan-kenapa-singapore-menjadi-negara-maju-se-asia', 301);
});

Route::get('id/10-kegiatan-sekolah-ini-dukung-kesehatan-mental-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-kegiatan-sekolah-ini-dukung-kesehatan-mental-remaja', 301);
});

Route::get('id/kesetimbangan-kimia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kesetimbangan-kimia', 301);
});

Route::get('id/pengertian-causative-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-causative-dan-contohnya', 301);
});

Route::get('id/biaya-sekolah-internasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/biaya-sekolah-internasional', 301);
});

Route::get('id/xilem-dan-floem/', function () {
    session()->put('locale', 'id');
    return redirect('/news/xilem-dan-floem', 301);
});

Route::get('id/pengertian-gelombang-elektronik-sejarah-sumber-dan-jenisnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-gelombang-elektronik-sejarah-sumber-dan-jenisnya', 301);
});

Route::get('id/hukum-bernoulli/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-bernoulli', 301);
});

Route::get('id/jajar-genjang-rumus-luas-keliling-sifat-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/jajar-genjang-rumus-luas-keliling-sifat-dan-contoh-soal', 301);
});

Route::get('id/cyanobacteria-arti-ciri-ciri-klasifikasi-hingga-perannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cyanobacteria-arti-ciri-ciri-klasifikasi-hingga-perannya', 301);
});

Route::get('id/hukum-archimedes/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-archimedes', 301);
});

Route::get('id/pembiasan-cahaya-pengertian-hukumdan-penerapannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pembiasan-cahaya-pengertian-hukumdan-penerapannya', 301);
});

Route::get('id/hukum-pascal-arti-bunyi-hukum-prinsip-rumus-dan-contoh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-pascal-arti-bunyi-hukum-prinsip-rumus-dan-contoh', 301);
});

Route::get('id/turunan-benzena/', function () {
    session()->put('locale', 'id');
    return redirect('/news/turunan-benzena', 301);
});

Route::get('id/nama-nama-galaksi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/nama-nama-galaksi', 301);
});

Route::get('id/piramida-penduduk/', function () {
    session()->put('locale', 'id');
    return redirect('/news/piramida-penduduk', 301);
});

Route::get('id/5-hak-dan-kewajiban-sebagai-seorang-siswa-di-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-hak-dan-kewajiban-sebagai-seorang-siswa-di-sekolah', 301);
});

Route::get('id/bilangan-oksidasi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bilangan-oksidasi-adalah', 301);
});

Route::get('id/pengertian-hukum-avogadro-penemu-contoh-dan-penerapan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-hukum-avogadro-penemu-contoh-dan-penerapan', 301);
});

Route::get('id/10-alat-berburu-manusia-purba/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-alat-berburu-manusia-purba', 301);
});

Route::get('id/adjective-clause/', function () {
    session()->put('locale', 'id');
    return redirect('/news/adjective-clause', 301);
});

Route::get('id/sifat-benda-padat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-benda-padat', 301);
});

Route::get('id/hukum-dasar-kimia-dari-para-ahli/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-dasar-kimia-dari-para-ahli', 301);
});

Route::get('id/kerajaan-islam-di-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-islam-di-indonesia', 301);
});

Route::get('id/hukum-hooke/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-hooke', 301);
});

Route::get('id/pengertian-deret-aritmatika-sejarah-rumus-dan-contoh-soalnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-deret-aritmatika-sejarah-rumus-dan-contoh-soalnya', 301);
});

Route::get('id/senyawa-kimia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/senyawa-kimia', 301);
});

Route::get('id/pengertian-diferensiasi-sosial/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-diferensiasi-sosial', 301);
});

Route::get('id/persamaan-reaksi-kimia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/persamaan-reaksi-kimia', 301);
});

Route::get('id/apa-itu-siklus-krebs-sejarah-tahapan-manfaat-dan-fungsi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-siklus-krebs-sejarah-tahapan-manfaat-dan-fungsi', 301);
});

Route::get('id/piramida-makanan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/piramida-makanan', 301);
});

Route::get('id/perbedaan-cerpen-dan-novel/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perbedaan-cerpen-dan-novel', 301);
});

Route::get('id/mengenal-teori-psikoanalisis-sebagai-salah-satu-aliran-dalam-ilmu-psikologi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-teori-psikoanalisis-sebagai-salah-satu-aliran-dalam-ilmu-psikologi', 301);
});

Route::get('id/mengenal-rumus-molekul-unsur-dan-senyawa-dan-perhitungannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-rumus-molekul-unsur-dan-senyawa-dan-perhitungannya', 301);
});

Route::get('id/teori-asam-basa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-asam-basa', 301);
});

Route::get('id/majas-sinekdoke/', function () {
    session()->put('locale', 'id');
    return redirect('/news/majas-sinekdoke', 301);
});

Route::get('id/hukum-newton/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-newton', 301);
});

Route::get('id/sifat-komutatif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-komutatif', 301);
});

Route::get('id/rumus-persamaan-kuadrat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-persamaan-kuadrat', 301);
});

Route::get('id/perkembangan-kognitif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perkembangan-kognitif', 301);
});

Route::get('id/rumus-gaya-lorentz-dan-penerapannya-dalam-kehidupan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-gaya-lorentz-dan-penerapannya-dalam-kehidupan', 301);
});

Route::get('id/pengertian-sifat-enzim/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-sifat-enzim', 301);
});

Route::get('id/contoh-tumbuhan-gymnospermae/', function () {
    session()->put('locale', 'id');
    return redirect('/news/contoh-tumbuhan-gymnospermae', 301);
});

Route::get('id/rumus-energi-kinetik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-energi-kinetik', 301);
});

Route::get('id/keterampilan-hidup-yang-wajib-dimiliki-siswa-sma/', function () {
    session()->put('locale', 'id');
    return redirect('/news/keterampilan-hidup-yang-wajib-dimiliki-siswa-sma', 301);
});

Route::get('id/sejarah-kapak-batu-kegunaan-dan-bahan-pembuatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-kapak-batu-kegunaan-dan-bahan-pembuatan', 301);
});

Route::get('id/contoh-tumbuhan-dikotil/', function () {
    session()->put('locale', 'id');
    return redirect('/news/contoh-tumbuhan-dikotil', 301);
});

Route::get('id/pengertian-fotosintesis-proses-jenis-manfaatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-fotosintesis-proses-jenis-manfaatnya', 301);
});

Route::get('id/memahami-gravitasi-newton/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-gravitasi-newton', 301);
});

Route::get('id/pengertian-hidrolik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-hidrolik', 301);
});

Route::get('id/subtropis-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/subtropis-adalah', 301);
});

Route::get('id/pengertian-pantun/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-pantun', 301);
});

Route::get('id/perpindahan-kalor/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perpindahan-kalor', 301);
});

Route::get('id/listrik-statis/', function () {
    session()->put('locale', 'id');
    return redirect('/news/listrik-statis', 301);
});

Route::get('id/koordinat-kartesius/', function () {
    session()->put('locale', 'id');
    return redirect('/news/koordinat-kartesius', 301);
});

Route::get('id/sistem-endokrin/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sistem-endokrin', 301);
});

Route::get('id/musyawarah-mufakat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/musyawarah-mufakat', 301);
});

Route::get('id/biosfer-adalah-bagian-penting-kehidupan-arti-dan-fungsi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/biosfer-adalah-bagian-penting-kehidupan-arti-dan-fungsi', 301);
});

Route::get('id/simak-penjelasan-lengkap-tentang-siklus-calvin-fotosintesis/', function () {
    session()->put('locale', 'id');
    return redirect('/news/simak-penjelasan-lengkap-tentang-siklus-calvin-fotosintesis', 301);
});

Route::get('id/7-dampak-positif-sekolah-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-dampak-positif-sekolah-online', 301);
});

Route::get('id/porifera-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/porifera-adalah', 301);
});

Route::get('id/mengenal-olahraga-lempar-lembing-beserta-tekniknya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-olahraga-lempar-lembing-beserta-tekniknya', 301);
});

Route::get('id/interaksi-sosial-pengertian-ciri-syarat-faktor/', function () {
    session()->put('locale', 'id');
    return redirect('/news/interaksi-sosial-pengertian-ciri-syarat-faktor', 301);
});

Route::get('id/ketahanan-nasional-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ketahanan-nasional-adalah', 301);
});

Route::get('id/sejarah-pesawat-kertas/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-pesawat-kertas', 301);
});

Route::get('id/aturan-sinus/', function () {
    session()->put('locale', 'id');
    return redirect('/news/aturan-sinus', 301);
});

Route::get('id/fungsi-lidah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fungsi-lidah', 301);
});

Route::get('id/permasalahan-sosial-pengertian-faktor-penyebab-dampak-dan-solusi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/permasalahan-sosial-pengertian-faktor-penyebab-dampak-dan-solusi', 301);
});

Route::get('id/sifat-kimia-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-kimia-adalah', 301);
});

Route::get('id/pengertian-konflik-sosial/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-konflik-sosial', 301);
});

Route::get('id/inilah-6-alasan-masuk-osis-yang-harus-pelajar-baru-ketahui/', function () {
    session()->put('locale', 'id');
    return redirect('/news/inilah-6-alasan-masuk-osis-yang-harus-pelajar-baru-ketahui', 301);
});

Route::get('id/teori-heliosentris/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-heliosentris', 301);
});

Route::get('id/pengertian-bimbingan-konseling-manfaat-fungsi-dan-tekniknya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-bimbingan-konseling-manfaat-fungsi-dan-tekniknya', 301);
});

Route::get('id/dampak-positif-dan-negatif-westernisasi-pada-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/dampak-positif-dan-negatif-westernisasi-pada-remaja', 301);
});

Route::get('id/pengertian-sandi-morse-sejarah-dan-rumusnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-sandi-morse-sejarah-dan-rumusnya', 301);
});

Route::get('id/pengertian-dan-contoh-bioma/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-dan-contoh-bioma', 301);
});

Route::get('id/hibridisasi-pengertian-bentuk-molekul-cara-menentukannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hibridisasi-pengertian-bentuk-molekul-cara-menentukannya', 301);
});

Route::get('id/primordialisme-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/primordialisme-adalah', 301);
});

Route::get('id/pengertian-fermentasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-fermentasi', 301);
});

Route::get('id/sifat-logaritma-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-logaritma-dan-contohnya', 301);
});

Route::get('id/mengenal-angin-muson-pengertian-jenis-dan-dampaknya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-angin-muson-pengertian-jenis-dan-dampaknya', 301);
});

Route::get('id/present-participle/', function () {
    session()->put('locale', 'id');
    return redirect('/news/present-participle', 301);
});

Route::get('id/akar-serabut-pengertian-jenis-dan-contoh-tanaman/', function () {
    session()->put('locale', 'id');
    return redirect('/news/akar-serabut-pengertian-jenis-dan-contoh-tanaman', 301);
});

Route::get('id/hukum-faraday/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-faraday', 301);
});

Route::get('id/kerajaan-tarumanegara/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-tarumanegara', 301);
});

Route::get('id/contoh-proyek-steam-yang-dapat-dilakukan-di-sekolah-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/contoh-proyek-steam-yang-dapat-dilakukan-di-sekolah-online', 301);
});

Route::get('id/pengertian-larutan-elektrolit/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-larutan-elektrolit', 301);
});

Route::get('id/meningkatkan-kepedulian-sosial-di-kalangan-siswa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-kepedulian-sosial-di-kalangan-siswa', 301);
});

Route::get('id/pengertian-integral-parsial-fungsi-dan-aplikasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-integral-parsial-fungsi-dan-aplikasinya', 301);
});

Route::get('id/hukum-pemantulan-cahaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hukum-pemantulan-cahaya', 301);
});

Route::get('id/metakognitif-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/metakognitif-adalah', 301);
});

Route::get('id/fisika-kuantum/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fisika-kuantum', 301);
});

Route::get('id/rhizoma-pengertian-dan-contoh-tumbuhannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rhizoma-pengertian-dan-contoh-tumbuhannya', 301);
});

Route::get('id/yuk-mengenal-jenis-jenis-awan-dan-karakteristiknya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-mengenal-jenis-jenis-awan-dan-karakteristiknya', 301);
});

Route::get('id/apa-itu-diferensiasi-produk-pengertian-manfaat-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-diferensiasi-produk-pengertian-manfaat-dan-contohnya', 301);
});

Route::get('id/pengertian-entrepreneurship-tujuan-manfaat-dan-tahapannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-entrepreneurship-tujuan-manfaat-dan-tahapannya', 301);
});

Route::get('id/kenali-definisi-dan-ciri-ciri-bullying-di-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-definisi-dan-ciri-ciri-bullying-di-sekolah', 301);
});

Route::get('id/pengertian-gaya-dorong-gaya-apung-ukuran-dan-rumusnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-gaya-dorong-gaya-apung-ukuran-dan-rumusnya', 301);
});

Route::get('id/memahami-awal-mula-pembentukan-alam-semesta-lewat-teori-nebula/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-awal-mula-pembentukan-alam-semesta-lewat-teori-nebula', 301);
});

Route::get('id/sejarah-perang-dunia-1/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-perang-dunia-1', 301);
});

Route::get('id/pengertian-dan-contoh-kapitalisme/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-dan-contoh-kapitalisme', 301);
});

Route::get('id/pengertian-globalisasi-karakter-proses-dan-dampaknya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-globalisasi-karakter-proses-dan-dampaknya', 301);
});

Route::get('id/energi-alternatif-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/energi-alternatif-adalah', 301);
});

Route::get('id/rumus-trigonometri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rumus-trigonometri', 301);
});

Route::get('id/senam-ritmik-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/senam-ritmik-adalah', 301);
});

Route::get('id/manfaat-ilmu-biologi-dalam-berbagai-bidang-kehidupan-manusia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-ilmu-biologi-dalam-berbagai-bidang-kehidupan-manusia', 301);
});

Route::get('id/8-rekomendasi-film-kartun-edukatif-terbaik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/8-rekomendasi-film-kartun-edukatif-terbaik', 301);
});

Route::get('id/mengenal-10-jenis-tes-psikologi-bukan-cuma-tes-kepribadian/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-10-jenis-tes-psikologi-bukan-cuma-tes-kepribadian', 301);
});

Route::get('id/inquiry-based-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/inquiry-based-learning', 301);
});

Route::get('id/karakteristik-negara-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/karakteristik-negara-indonesia', 301);
});

Route::get('id/mengenal-zaman-paleozoikum-beserta-ciri-cirinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-zaman-paleozoikum-beserta-ciri-cirinya', 301);
});

Route::get('id/pedosfer/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pedosfer', 301);
});

Route::get('id/fungsi-lambung-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fungsi-lambung-adalah', 301);
});

Route::get('id/mengenal-pengertian-bunga-majemuk-skema-pembayaran-rumus-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-pengertian-bunga-majemuk-skema-pembayaran-rumus-dan-contoh-soal', 301);
});

Route::get('id/teori-atom-dalton/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-atom-dalton', 301);
});

Route::get('id/10-rekomendasi-aplikasi-belajar-bahasa-asing-gratis-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-rekomendasi-aplikasi-belajar-bahasa-asing-gratis-untuk-anak', 301);
});

Route::get('id/pengertian-molekul-senyawa-atom-dan-penerapannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-molekul-senyawa-atom-dan-penerapannya', 301);
});

Route::get('id/apa-itu-fomo-kenali-dampak-positif-dan-negatif-pada-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-fomo-kenali-dampak-positif-dan-negatif-pada-remaja', 301);
});

Route::get('id/pengertian-dan-fungsi-nukleus-inti-sel-pada-tumbuhan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-dan-fungsi-nukleus-inti-sel-pada-tumbuhan', 301);
});

Route::get('id/pengertian-suku-banyak-pembagian-contoh-dan-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-suku-banyak-pembagian-contoh-dan-soal', 301);
});

Route::get('id/tips-kegiatan-mengajarkan-life-skill-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-kegiatan-mengajarkan-life-skill-untuk-anak', 301);
});

Route::get('id/diagram-batang-pengertian-jenis-cara-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/diagram-batang-pengertian-jenis-cara-contoh-soal', 301);
});

Route::get('id/10-rekomendasi-film-terbaik-inspirasi-kuliah-kedokteran/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-rekomendasi-film-terbaik-inspirasi-kuliah-kedokteran', 301);
});

Route::get('id/bilangan-kuantum-pengertian-jenis-dan-cara-menghitung/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bilangan-kuantum-pengertian-jenis-dan-cara-menghitung', 301);
});

Route::get('id/kurikulum-internasional-yang-ada-pada-sekolah-di-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kurikulum-internasional-yang-ada-pada-sekolah-di-indonesia', 301);
});

Route::get('id/trapesium/', function () {
    session()->put('locale', 'id');
    return redirect('/news/trapesium', 301);
});

Route::get('id/tumbuhan-angiospermae-ciri-cara-reproduksi-dan-klasifikasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tumbuhan-angiospermae-ciri-cara-reproduksi-dan-klasifikasinya', 301);
});

Route::get('id/hidrolisis-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hidrolisis-adalah', 301);
});

Route::get('id/belah-ketupat-rumus-luas-keliling-sifat-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belah-ketupat-rumus-luas-keliling-sifat-dan-contoh-soal', 301);
});

Route::get('id/kumpulan-rumus-matematika/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kumpulan-rumus-matematika', 301);
});

Route::get('id/mengenal-sistem-pendidikan-di-jepang-yang-maju/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-sistem-pendidikan-di-jepang-yang-maju', 301);
});

Route::get('id/penjelasan-sifat-cahaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penjelasan-sifat-cahaya', 301);
});

Route::get('id/7-macam-karakter-anak-usia-dini-yang-perlu-mama-tahu/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-macam-karakter-anak-usia-dini-yang-perlu-mama-tahu', 301);
});

Route::get('id/gerbang-logika/', function () {
    session()->put('locale', 'id');
    return redirect('/news/gerbang-logika', 301);
});

Route::get('id/ciri-anak-kinestetik-cara-mengembangkannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ciri-anak-kinestetik-cara-mengembangkannya', 301);
});

Route::get('id/mengenal-teori-kausalitas-hukum-sebab-akibat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-teori-kausalitas-hukum-sebab-akibat', 301);
});

Route::get('id/hidrolisis-garam-pengertian-jenis-reaksi-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hidrolisis-garam-pengertian-jenis-reaksi-dan-contoh-soal', 301);
});

Route::get('id/apa-itu-hewan-primata-kenali-spesies-primata-di-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-hewan-primata-kenali-spesies-primata-di-indonesia', 301);
});

Route::get('id/rekomendasi-situs-belajar-matematika-online-gratis-terbaik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rekomendasi-situs-belajar-matematika-online-gratis-terbaik', 301);
});

Route::get('id/tumbuhan-monokotil/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tumbuhan-monokotil', 301);
});

Route::get('id/memahami-pengertian-bilangan-bulat-negatif-dan-positif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-pengertian-bilangan-bulat-negatif-dan-positif', 301);
});

Route::get('id/cause-and-effect/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cause-and-effect', 301);
});

Route::get('id/proses-pembuatan-bioplastik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/proses-pembuatan-bioplastik', 301);
});

Route::get('id/pencemaran-lingkungan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pencemaran-lingkungan', 301);
});

Route::get('id/pengertian-el-nino/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-el-nino', 301);
});

Route::get('id/perkenalan-diri-dalam-bahasa-inggris/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perkenalan-diri-dalam-bahasa-inggris', 301);
});

Route::get('id/pembelajaran-kontekstual-pengertian-tujuan-manfaat-dan-prinsipnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pembelajaran-kontekstual-pengertian-tujuan-manfaat-dan-prinsipnya', 301);
});

Route::get('id/pengertian-bilangan-prima-beserta-himpunannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-bilangan-prima-beserta-himpunannya', 301);
});

Route::get('id/yuk-mengenal-lebih-dalam-semaphore-sejarah-manfaat-dan-gerakan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-mengenal-lebih-dalam-semaphore-sejarah-manfaat-dan-gerakan', 301);
});

Route::get('id/reward-pengertian-jenis-tujuan-faktor-dan-indikatornya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/reward-pengertian-jenis-tujuan-faktor-dan-indikatornya', 301);
});

Route::get('id/tahap-perkembangan-remaja-berdasarkan-usia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tahap-perkembangan-remaja-berdasarkan-usia', 301);
});

Route::get('id/hewan-omnivora/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-omnivora', 301);
});

Route::get('id/struktur-organisasi-kelas/', function () {
    session()->put('locale', 'id');
    return redirect('/news/struktur-organisasi-kelas', 301);
});

Route::get('id/interaksi-sosial-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/interaksi-sosial-adalah', 301);
});

Route::get('id/nama-hari-dalam-bahasa-inggris-dan-contoh-kalimatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/nama-hari-dalam-bahasa-inggris-dan-contoh-kalimatnya', 301);
});

Route::get('id/cabang-olahraga-atletik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cabang-olahraga-atletik', 301);
});

Route::get('id/5-milestone-psikologi-perkembangan-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-milestone-psikologi-perkembangan-anak', 301);
});

Route::get('id/pengertian-subjunctive/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-subjunctive', 301);
});

Route::get('id/pengertian-hukum-lavoisier-penemu-dan-percobaannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-hukum-lavoisier-penemu-dan-percobaannya', 301);
});

Route::get('id/pengertian-nikotin/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-nikotin', 301);
});

Route::get('id/apa-itu-ice-breaking-ini-pengertian-contoh-permainannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-ice-breaking-ini-pengertian-contoh-permainannya', 301);
});

Route::get('id/benarkah-colombus-bukan-orang-pertama-penemu-benua-amerika/', function () {
    session()->put('locale', 'id');
    return redirect('/news/benarkah-colombus-bukan-orang-pertama-penemu-benua-amerika', 301);
});

Route::get('id/tabel-periodik-unsur-kimia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tabel-periodik-unsur-kimia', 301);
});

Route::get('id/mengenal-fungsi-plastida-beserta-jenisnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-fungsi-plastida-beserta-jenisnya', 301);
});

Route::get('id/fungsi-membran-sel/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fungsi-membran-sel', 301);
});

Route::get('id/project-based-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/project-based-learning', 301);
});

Route::get('id/iklim-tropis-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/iklim-tropis-adalah', 301);
});

Route::get('id/apa-itu-mitologi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-mitologi', 301);
});

Route::get('id/metode-mind-mapping-pengertian-manfaat-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/metode-mind-mapping-pengertian-manfaat-dan-contohnya', 301);
});

Route::get('id/lapisan-atmosfer/', function () {
    session()->put('locale', 'id');
    return redirect('/news/lapisan-atmosfer', 301);
});

Route::get('id/erosi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/erosi-adalah', 301);
});

Route::get('id/ict-pengertian-fungsi-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ict-pengertian-fungsi-dan-contohnya', 301);
});

Route::get('id/hewan-avertebrata/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-avertebrata', 301);
});

Route::get('id/pengertian-trigonometri-konsep-rumus-sin-cos-tan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-trigonometri-konsep-rumus-sin-cos-tan', 301);
});

Route::get('id/besaran-turunan-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/besaran-turunan-adalah', 301);
});

Route::get('id/kisah-wirausaha-sukses-di-era-digital/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kisah-wirausaha-sukses-di-era-digital', 301);
});

Route::get('id/negara-pecahan-uni-soviet/', function () {
    session()->put('locale', 'id');
    return redirect('/news/negara-pecahan-uni-soviet', 301);
});

Route::get('id/5-strategi-stimulasi-panca-indra-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-strategi-stimulasi-panca-indra-anak', 301);
});

Route::get('id/sejarah-sumpah-pemuda/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-sumpah-pemuda', 301);
});

Route::get('id/pengertian-karbon-dioksida/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-karbon-dioksida', 301);
});

Route::get('id/mengenal-struktur-ribosom-beserta-fungsinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-struktur-ribosom-beserta-fungsinya', 301);
});

Route::get('id/litosfer-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/litosfer-adalah', 301);
});

Route::get('id/7-cara-mencegah-sifat-senioritas-anak-di-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-cara-mencegah-sifat-senioritas-anak-di-sekolah', 301);
});

Route::get('id/mengenal-7-nama-pahlawan-indonesia-dari-timur/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-7-nama-pahlawan-indonesia-dari-timur', 301);
});

Route::get('id/titrasi-asam-basa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/titrasi-asam-basa', 301);
});

Route::get('id/apa-itu-calistung-tips-dan-usia-ideal-ajarkan-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-calistung-tips-dan-usia-ideal-ajarkan-pada-anak', 301);
});

Route::get('id/apa-itu-hewan-berdarah-dingin-atau-poikiloterm/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-hewan-berdarah-dingin-atau-poikiloterm', 301);
});

Route::get('id/kerajaan-majapahit/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-majapahit', 301);
});

Route::get('id/apa-itu-rangkaian-seri-dan-paralel/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-rangkaian-seri-dan-paralel', 301);
});

Route::get('id/fungsi-otak-kanan-dan-kiri-pada-manusia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fungsi-otak-kanan-dan-kiri-pada-manusia', 301);
});

Route::get('id/hewan-ruminansia-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-ruminansia-adalah', 301);
});

Route::get('id/bilangan-cacah-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bilangan-cacah-adalah', 301);
});

Route::get('id/proses-terjadinya-pelangi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/proses-terjadinya-pelangi', 301);
});

Route::get('id/hewan-vertebrata/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-vertebrata', 301);
});

Route::get('id/tips-cara-mengajarkan-coding-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-cara-mengajarkan-coding-untuk-anak', 301);
});

Route::get('id/usia-ideal-anak-untuk-playgroup-pg-dan-pentingnya-sosialisasi-bagi-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/usia-ideal-anak-untuk-playgroup-pg-dan-pentingnya-sosialisasi-bagi-anak', 301);
});

Route::get('id/mengenal-kurikulum-international-baccalaureate-ib/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-kurikulum-international-baccalaureate-ib', 301);
});

Route::get('id/turunan-fungsi-aljabar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/turunan-fungsi-aljabar', 301);
});

Route::get('id/dampak-pencemaran-air/', function () {
    session()->put('locale', 'id');
    return redirect('/news/dampak-pencemaran-air', 301);
});

Route::get('id/diet-sehat-untuk-remaja-contek-7-menu-praktis-ini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/diet-sehat-untuk-remaja-contek-7-menu-praktis-ini', 301);
});

Route::get('id/definisi-intercultural-communication/', function () {
    session()->put('locale', 'id');
    return redirect('/news/definisi-intercultural-communication', 301);
});

Route::get('id/peninggalan-kerajaan-kediri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/peninggalan-kerajaan-kediri', 301);
});

Route::get('id/pengetian-lembaga-sosial/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengetian-lembaga-sosial', 301);
});

Route::get('id/kenali-6-emosi-dasar-manusia-beserta-fungsi-dan-cara-kerjanya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-6-emosi-dasar-manusia-beserta-fungsi-dan-cara-kerjanya', 301);
});

Route::get('id/fixed-mindset-dan-growth-mindset/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fixed-mindset-dan-growth-mindset', 301);
});

Route::get('id/sekolah-menengah-atas/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-menengah-atas', 301);
});

Route::get('id/fosfor-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fosfor-adalah', 301);
});

Route::get('id/pengertian-antroposfer-rumus-dan-contoh-soal/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-antroposfer-rumus-dan-contoh-soal', 301);
});

Route::get('id/pengertian-dongeng/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-dongeng', 301);
});

Route::get('id/7-fungsi-dan-peranan-pancasila-bagi-bangsa-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-fungsi-dan-peranan-pancasila-bagi-bangsa-indonesia', 301);
});

Route::get('id/mengenal-apa-itu-robotik-dan-pentingnya-di-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-apa-itu-robotik-dan-pentingnya-di-masa-depan', 301);
});

Route::get('id/pubertas-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pubertas-adalah', 301);
});

Route::get('id/majas-hiperbola-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/majas-hiperbola-adalah', 301);
});

Route::get('id/sekolah-dasar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-dasar', 301);
});

Route::get('id/pahlawan-nasional-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pahlawan-nasional-indonesia', 301);
});

Route::get('id/apa-itu-intransitive-verb/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-intransitive-verb', 301);
});

Route::get('id/sifat-magnet/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sifat-magnet', 301);
});

Route::get('id/konsep-berpikir-diakronik-karakter-ciri-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/konsep-berpikir-diakronik-karakter-ciri-dan-contohnya', 301);
});

Route::get('id/spora-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/spora-adalah', 301);
});

Route::get('id/dinamika-populasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/dinamika-populasi', 301);
});

Route::get('id/kerajaan-kutai/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-kutai', 301);
});

Route::get('id/pra-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pra-sekolah', 301);
});

Route::get('id/mengenal-zaman-mesozoikum-dan-periodenya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-zaman-mesozoikum-dan-periodenya', 301);
});

Route::get('id/keterampilan-sosial-yang-perlu-dimiliki-sang-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/keterampilan-sosial-yang-perlu-dimiliki-sang-anak', 301);
});

Route::get('id/prasekolah-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/prasekolah-sampoerna-academy', 301);
});

Route::get('id/energi-bunyi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/energi-bunyi-adalah', 301);
});

Route::get('id/mengapa-hewan-langka-harus-dilindungi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengapa-hewan-langka-harus-dilindungi', 301);
});

Route::get('id/cara-daur-ulang-sampah-plastik-dan-manfaat-bagi-lingkungan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cara-daur-ulang-sampah-plastik-dan-manfaat-bagi-lingkungan', 301);
});

Route::get('id/pengertian-bath-bomb/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-bath-bomb', 301);
});

Route::get('id/3-perubahan-besar-masa-transisi-sd-ke-smp-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/3-perubahan-besar-masa-transisi-sd-ke-smp-untuk-anak', 301);
});

Route::get('id/kerajaan-mataram-kuno/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-mataram-kuno', 301);
});

Route::get('id/pronoun-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pronoun-adalah', 301);
});

Route::get('id/pengertian-lari-estafet/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-lari-estafet', 301);
});

Route::get('id/mengenal-apa-itu-trias-politika-dan-penerapannya-di-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-apa-itu-trias-politika-dan-penerapannya-di-indonesia', 301);
});

Route::get('id/tips-memahami-perbedaan-kebutuhan-dan-keinginan-penting/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-memahami-perbedaan-kebutuhan-dan-keinginan-penting', 301);
});

Route::get('id/pentingnya-lingkungan-sekolah-nyaman-dan-sehat-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-lingkungan-sekolah-nyaman-dan-sehat-untuk-anak', 301);
});

Route::get('id/konsep-berpikir-sinkronik-dan-penerapannya-pada-kejadian-lampau/', function () {
    session()->put('locale', 'id');
    return redirect('/news/konsep-berpikir-sinkronik-dan-penerapannya-pada-kejadian-lampau', 301);
});

Route::get('id/pembahasan-rumus-permutasi-dan-perhitungannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pembahasan-rumus-permutasi-dan-perhitungannya', 301);
});

Route::get('id/mengenal-ciri-ciri-kecerdasan-visual-spasial-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-ciri-ciri-kecerdasan-visual-spasial-pada-anak', 301);
});

Route::get('id/8-manfaat-mindfulness-pada-anak-dan-cara-seru-melatihnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/8-manfaat-mindfulness-pada-anak-dan-cara-seru-melatihnya', 301);
});

Route::get('id/mengenal-personalized-learning-pembelajaran-yang-dipersonalisasi-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-personalized-learning-pembelajaran-yang-dipersonalisasi-di-sampoerna-academy', 301);
});

Route::get('id/tantangan-dan-peluang-pendidikan-di-era-digital/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tantangan-dan-peluang-pendidikan-di-era-digital', 301);
});

Route::get('id/proses-osmosis-kentang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/proses-osmosis-kentang', 301);
});

Route::get('id/10-fakta-anak-pertama-dan-keunikannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-fakta-anak-pertama-dan-keunikannya', 301);
});

Route::get('id/5-alasan-kenapa-bahasa-inggris-menjadi-bahasa-internasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-alasan-kenapa-bahasa-inggris-menjadi-bahasa-internasional', 301);
});

Route::get('id/membangun-kecerdasan-emosional-dan-intelektual-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membangun-kecerdasan-emosional-dan-intelektual-pada-anak', 301);
});

Route::get('id/apa-itu-ferris-wheel/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-ferris-wheel', 301);
});

Route::get('id/7-cara-membentuk-sifat-positif-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-cara-membentuk-sifat-positif-anak', 301);
});

Route::get('id/8-museum-di-jakarta-ramah-anak-wisata-rekreasi-plus-edukasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/8-museum-di-jakarta-ramah-anak-wisata-rekreasi-plus-edukasi', 301);
});

Route::get('id/pengertian-komik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-komik', 301);
});

Route::get('id/meningkatkan-daya-ingat-anak-melalui-cara-belajar-efektif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-daya-ingat-anak-melalui-cara-belajar-efektif', 301);
});

Route::get('id/5-cara-meningkatkan-produktivitas-dalam-belajar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-cara-meningkatkan-produktivitas-dalam-belajar', 301);
});

Route::get('id/cara-optimalkan-tools-belajar-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cara-optimalkan-tools-belajar-online', 301);
});

Route::get('id/5-keterampilan-penting-yang-harus-dikuasai-oleh-siswa-sma/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-keterampilan-penting-yang-harus-dikuasai-oleh-siswa-sma', 301);
});

Route::get('id/singapore-math-pengertian-keunggulan-serta-penerapannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/singapore-math-pengertian-keunggulan-serta-penerapannya', 301);
});

Route::get('id/7-arti-imajinasi-beserta-perannya-dalam-kehidupan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-arti-imajinasi-beserta-perannya-dalam-kehidupan', 301);
});

Route::get('id/determinan-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/determinan-adalah', 301);
});

Route::get('id/sistem-organ-manusia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sistem-organ-manusia', 301);
});

Route::get('id/inilah-7-fakta-menakjubkan-bintang-sirius/', function () {
    session()->put('locale', 'id');
    return redirect('/news/inilah-7-fakta-menakjubkan-bintang-sirius', 301);
});

Route::get('id/lapisan-tanah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/lapisan-tanah', 301);
});

Route::get('id/mempelajari-perkembangbiakan-generatif-pada-hewan-dan-tumbuhan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mempelajari-perkembangbiakan-generatif-pada-hewan-dan-tumbuhan', 301);
});

Route::get('id/comparison-degree/', function () {
    session()->put('locale', 'id');
    return redirect('/news/comparison-degree', 301);
});

Route::get('id/ini-sejarah-dan-tahapan-batik-yang-harus-kamu-ketahui/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ini-sejarah-dan-tahapan-batik-yang-harus-kamu-ketahui', 301);
});

Route::get('id/apa-itu-parenting-berikut-pengertian-serta-tipsnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-parenting-berikut-pengertian-serta-tipsnya', 301);
});

Route::get('id/benua-australia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/benua-australia', 301);
});

Route::get('id/critical-thinking-pengertian-manfaat-dan-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/critical-thinking-pengertian-manfaat-dan-contohnya', 301);
});

Route::get('id/pengertian-cermin-cekung-sifat-hingga-manfaat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-cermin-cekung-sifat-hingga-manfaat', 301);
});

Route::get('id/pengertian-suspension-bridge/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-suspension-bridge', 301);
});

Route::get('id/apa-itu-discord/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-discord', 301);
});

Route::get('id/contoh-gaya-tak-sentuh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/contoh-gaya-tak-sentuh', 301);
});

Route::get('id/konduksi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/konduksi-adalah', 301);
});

Route::get('id/teori-karl-marx/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-karl-marx', 301);
});

Route::get('id/argumentasi-adalah-pengertian-ciri-ciri-dan-struktur/', function () {
    session()->put('locale', 'id');
    return redirect('/news/argumentasi-adalah-pengertian-ciri-ciri-dan-struktur', 301);
});

Route::get('id/hortatory-exposition/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hortatory-exposition', 301);
});

Route::get('id/kurikulum-igcse-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kurikulum-igcse-sampoerna-academy', 301);
});

Route::get('id/rotasi-bumi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/rotasi-bumi-adalah', 301);
});

Route::get('id/gerhana-bulan-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/gerhana-bulan-adalah', 301);
});

Route::get('id/sekolah-internasional-vs-sekolah-konvensional-perbandingan-kualitas-pendidikan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-internasional-vs-sekolah-konvensional-perbandingan-kualitas-pendidikan', 301);
});

Route::get('id/7-aplikasi-terbaik-untuk-belajar-berbagai-pelajaran-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-aplikasi-terbaik-untuk-belajar-berbagai-pelajaran-sekolah', 301);
});

Route::get('id/10-cara-mengajari-anak-bersosialisasi-sejak-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-cara-mengajari-anak-bersosialisasi-sejak-dini', 301);
});

Route::get('id/pengertian-bentuk-eksponen/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-bentuk-eksponen', 301);
});

Route::get('id/mengenal-apa-itu-debat-dan-struktur-teks-debat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-apa-itu-debat-dan-struktur-teks-debat', 301);
});

Route::get('id/pentingnya-mengenal-pelajaran-informatika-sedari-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-mengenal-pelajaran-informatika-sedari-dini', 301);
});

Route::get('id/nokturnal-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/nokturnal-adalah', 301);
});

Route::get('id/mengenal-metode-pembelajaran-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-metode-pembelajaran-steam', 301);
});

Route::get('id/jenis-jenis-ujian-akhir/', function () {
    session()->put('locale', 'id');
    return redirect('/news/jenis-jenis-ujian-akhir', 301);
});

Route::get('id/7-manfaat-bermain-di-luar-ruangan-untuk-toddler/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-manfaat-bermain-di-luar-ruangan-untuk-toddler', 301);
});

Route::get('id/simulasi-black-hole/', function () {
    session()->put('locale', 'id');
    return redirect('/news/simulasi-black-hole', 301);
});

Route::get('id/hewan-herbivora-pengertian-ciri-ciri-dan-contoh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-herbivora-pengertian-ciri-ciri-dan-contoh', 301);
});

Route::get('id/pengertian-dan-proses-terjadinya-fenomena-supernova/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-dan-proses-terjadinya-fenomena-supernova', 301);
});

Route::get('id/kerajaan-sriwijaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-sriwijaya', 301);
});

Route::get('id/tips-cara-belajar-calistung-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-cara-belajar-calistung-untuk-anak', 301);
});

Route::get('id/mengenal-sistem-pendidikan-di-sekolah-internasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-sistem-pendidikan-di-sekolah-internasional', 301);
});

Route::get('id/kurikulum-cambridge-igcse-definisi-keunggulan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kurikulum-cambridge-igcse-definisi-keunggulan', 301);
});

Route::get('id/peran-seni-dalam-pendidikan-di-sekolah-dasar-sampoerna-academy-medan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/peran-seni-dalam-pendidikan-di-sekolah-dasar-sampoerna-academy-medan', 301);
});

Route::get('id/mengenal-zaman-arkaikum-zaman-tertua-di-bumi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-zaman-arkaikum-zaman-tertua-di-bumi', 301);
});

Route::get('id/tips-cara-mengajarkan-menggambar-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-cara-mengajarkan-menggambar-untuk-anak', 301);
});

Route::get('id/5-fakta-pohon-unik-yang-harus-kamu-ketahui/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-fakta-pohon-unik-yang-harus-kamu-ketahui', 301);
});

Route::get('id/palung-mariana/', function () {
    session()->put('locale', 'id');
    return redirect('/news/palung-mariana', 301);
});

Route::get('id/bioteknologi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bioteknologi-adalah', 301);
});

Route::get('id/present-perfect-tense-pengertian-kegunaan-dan-contoh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/present-perfect-tense-pengertian-kegunaan-dan-contoh', 301);
});

Route::get('id/pengertian-koloid-jenis-sifat-dan-cara-membuatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-koloid-jenis-sifat-dan-cara-membuatnya', 301);
});

Route::get('id/pengertian-superlative-degree/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-superlative-degree', 301);
});

Route::get('id/manfaat-dan-pentingnya-membuat-to-do-list/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-dan-pentingnya-membuat-to-do-list', 301);
});

Route::get('id/aplikasi-belajar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/aplikasi-belajar', 301);
});

Route::get('id/pentingnya-pendidikan-lingkungan-hidup-untuk-anak-usia-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-pendidikan-lingkungan-hidup-untuk-anak-usia-dini', 301);
});

Route::get('id/mengenal-analytical-exposition-text-beserta-contohnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-analytical-exposition-text-beserta-contohnya', 301);
});

Route::get('id/sekolah-menengah-pertama/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-menengah-pertama', 301);
});

Route::get('id/penjelasan-sistem-peredaran-darah-jenis-dan-manfaatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penjelasan-sistem-peredaran-darah-jenis-dan-manfaatnya', 301);
});

Route::get('id/5-tren-teknologi-terbaru-yang-akan-mengubah-dunia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-tren-teknologi-terbaru-yang-akan-mengubah-dunia', 301);
});

Route::get('id/kenali-5-penyebab-emosi-yang-tidak-terkontrol/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-5-penyebab-emosi-yang-tidak-terkontrol', 301);
});

Route::get('id/teori-kontraksi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teori-kontraksi', 301);
});

Route::get('id/fleksibilitas-aksesibilitas-sebagai-keunggulan-sekolah-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fleksibilitas-aksesibilitas-sebagai-keunggulan-sekolah-online', 301);
});

Route::get('id/asam-sulfat-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/asam-sulfat-adalah', 301);
});

Route::get('id/apa-yang-dipelajari-si-kecil-di-pre-school/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-yang-dipelajari-si-kecil-di-pre-school', 301);
});

Route::get('id/kerajaan-singasari/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kerajaan-singasari', 301);
});

Route::get('id/anak-malas-belajar-7-kunci-mengatasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/anak-malas-belajar-7-kunci-mengatasinya', 301);
});

Route::get('id/angka-romawi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/angka-romawi', 301);
});

Route::get('id/distance-learning-inovasi-model-pembelajaran-masa-kini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/distance-learning-inovasi-model-pembelajaran-masa-kini', 301);
});

Route::get('id/10-strategi-sukses-untuk-belajar-secara-online-di-era-digital/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-strategi-sukses-untuk-belajar-secara-online-di-era-digital', 301);
});

Route::get('id/hewan-karnivora-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-karnivora-adalah', 301);
});

Route::get('id/kenali-7-peraih-nobel-prize-termuda-bisa-ditiru/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-7-peraih-nobel-prize-termuda-bisa-ditiru', 301);
});

Route::get('id/perbedaan-generasi-milenial-dan-gen-z-yang-dianggap-manja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perbedaan-generasi-milenial-dan-gen-z-yang-dianggap-manja', 301);
});

Route::get('id/7-rekomendasi-buku-belajar-coding-yang-cocok-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-rekomendasi-buku-belajar-coding-yang-cocok-untuk-anak', 301);
});

Route::get('id/pemanasan-global-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pemanasan-global-adalah', 301);
});

Route::get('id/7-tips-meningkatkan-interaksi-sosial-saat-belajar-di-rumah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-tips-meningkatkan-interaksi-sosial-saat-belajar-di-rumah', 301);
});

Route::get('id/kenali-kurikulum-ieyc-untuk-jenjang-early-learning-sekolah-internasional-di-jakarta/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-kurikulum-ieyc-untuk-jenjang-early-learning-sekolah-internasional-di-jakarta', 301);
});

Route::get('id/memahami-gejala-vulkanisme-erupsi-dan-bentuk-gunung-berapi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-gejala-vulkanisme-erupsi-dan-bentuk-gunung-berapi', 301);
});

Route::get('id/feedback-adalah-pengertian-jenis-dan-fungsi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/feedback-adalah-pengertian-jenis-dan-fungsi', 301);
});

Route::get('id/yuk-intip-5-tips-belajar-matematika-yang-menyenangkan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-intip-5-tips-belajar-matematika-yang-menyenangkan', 301);
});

Route::get('id/kenali-perkembangan-regulasi-diri-untuk-anak-usia-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-perkembangan-regulasi-diri-untuk-anak-usia-dini', 301);
});

Route::get('id/21st-century-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/21st-century-learning', 301);
});

Route::get('id/yuk-belajar-menghitung-konsep-rumus-peluang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-belajar-menghitung-konsep-rumus-peluang', 301);
});

Route::get('id/manfaat-berjemur-di-pagi-hari/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-berjemur-di-pagi-hari', 301);
});

Route::get('id/ibdp-dan-keunggulannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ibdp-dan-keunggulannya', 301);
});

Route::get('id/pertanyaan-umum/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pertanyaan-umum', 301);
});

Route::get('id/efek-rumah-kaca/', function () {
    session()->put('locale', 'id');
    return redirect('/news/efek-rumah-kaca', 301);
});

Route::get('id/manfaat-field-trip/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-field-trip', 301);
});

Route::get('id/memahami-stratifikasi-sosial-dan-faktor-terbentuknya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-stratifikasi-sosial-dan-faktor-terbentuknya', 301);
});

Route::get('id/penerimaan-siswa-jalur-afirmasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penerimaan-siswa-jalur-afirmasi', 301);
});

Route::get('id/united-nations-day/', function () {
    session()->put('locale', 'id');
    return redirect('/news/united-nations-day', 301);
});

Route::get('id/mengenal-sat-test-dan-tips-mempersiapkannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-sat-test-dan-tips-mempersiapkannya', 301);
});

Route::get('id/cara-menjadi-siswa-berprestasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cara-menjadi-siswa-berprestasi', 301);
});

Route::get('id/sejarah-bilangan-prima-dan-manfaatnya-di-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-bilangan-prima-dan-manfaatnya-di-masa-depan', 301);
});

Route::get('id/kata-kerja-dalam-bahasa-inggris/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kata-kerja-dalam-bahasa-inggris', 301);
});

Route::get('id/pentingnya-mengembangkan-keterampilan-sosial-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-mengembangkan-keterampilan-sosial-pada-anak', 301);
});

Route::get('id/full-online-learning-vs-blended-learning-menentukan-mana-yang-lebih-tepat-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/full-online-learning-vs-blended-learning-menentukan-mana-yang-lebih-tepat-untuk-anak', 301);
});

Route::get('id/pengertian-kondensasi-jenis-bentuk-dan-klasifikasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-kondensasi-jenis-bentuk-dan-klasifikasinya', 301);
});

Route::get('id/usia-ideal-anak-masuk-pra-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/usia-ideal-anak-masuk-pra-sekolah', 301);
});

Route::get('id/10-cara-mendidik-anak-agar-mandiri-sejak-kecil/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-cara-mendidik-anak-agar-mandiri-sejak-kecil', 301);
});

Route::get('id/cara-kerja-disinfektan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cara-kerja-disinfektan', 301);
});

Route::get('id/pentingnya-keseimbangan-belajar-bagi-para-siswa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-keseimbangan-belajar-bagi-para-siswa', 301);
});

Route::get('id/akibat-revolusi-bumi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/akibat-revolusi-bumi', 301);
});

Route::get('id/7-tips-menghadapi-mood-swing-pada-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-tips-menghadapi-mood-swing-pada-remaja', 301);
});

Route::get('id/mengapa-metode-pembelajaran-steam-perlu-diterapkan-di-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengapa-metode-pembelajaran-steam-perlu-diterapkan-di-sekolah', 301);
});

Route::get('id/memilih-sekolah-internasional-di-sentul-bogor-wajib-perhatikan-hal-ini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memilih-sekolah-internasional-di-sentul-bogor-wajib-perhatikan-hal-ini', 301);
});

Route::get('id/berkembangnya-sekolah-online-di-indonesia-benefitnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/berkembangnya-sekolah-online-di-indonesia-benefitnya', 301);
});

Route::get('id/perbedaan-ib-diplomma-cambridge-programme/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perbedaan-ib-diplomma-cambridge-programme', 301);
});

Route::get('id/kurikulum-sa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kurikulum-sa', 301);
});

Route::get('id/sampoerna-academy-bsd-secara-resmi-dibuka/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-bsd-secara-resmi-dibuka', 301);
});

Route::get('id/pengertian-fps/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-fps', 301);
});

Route::get('id/mata-pelajaran-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mata-pelajaran-di-sampoerna-academy', 301);
});

Route::get('id/wajib-tahu-kenali-perbedaan-food-loss-dan-food-waste/', function () {
    session()->put('locale', 'id');
    return redirect('/news/wajib-tahu-kenali-perbedaan-food-loss-dan-food-waste', 301);
});

Route::get('id/belajar-hidup-sederhana-dari-orang-orang-terkaya-di-dunia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-hidup-sederhana-dari-orang-orang-terkaya-di-dunia', 301);
});

Route::get('id/mengenal-permainan-yang-mengasah-kreativitas-anak-usia-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-permainan-yang-mengasah-kreativitas-anak-usia-dini', 301);
});

Route::get('id/masa-depan-pendidikan-sekolah-online-atau-sekolah-konvensional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/masa-depan-pendidikan-sekolah-online-atau-sekolah-konvensional', 301);
});

Route::get('id/ketahui-perbedaan-antara-acp-ib-dan-a-level/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ketahui-perbedaan-antara-acp-ib-dan-a-level', 301);
});

Route::get('id/mengenal-nomophobia-pada-remaja-dan-cara-mengatasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-nomophobia-pada-remaja-dan-cara-mengatasinya', 301);
});

Route::get('id/apakah-hujan-meteor-berbahaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apakah-hujan-meteor-berbahaya', 301);
});

Route::get('id/pengaruh-media-sosial-dalam-kehidupan-bermasyarakat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengaruh-media-sosial-dalam-kehidupan-bermasyarakat', 301);
});

Route::get('id/endemik-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/endemik-adalah', 301);
});

Route::get('id/apa-itu-hovercraft/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-hovercraft', 301);
});

Route::get('id/tips-untuk-orangtua-bagaimana-mendukung-anak-saat-belajar-di-rumah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-untuk-orangtua-bagaimana-mendukung-anak-saat-belajar-di-rumah', 301);
});

Route::get('id/hewan-mamalia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hewan-mamalia', 301);
});

Route::get('id/sekolah-internasional-terbaik-di-jakarta-selatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-internasional-terbaik-di-jakarta-selatan', 301);
});

Route::get('id/meningkatkan-literasi-digital-pada-siswa-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-literasi-digital-pada-siswa-sampoerna-academy', 301);
});

Route::get('id/mengenal-lebih-dalam-petrichor-aroma-setelah-hujan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-lebih-dalam-petrichor-aroma-setelah-hujan', 301);
});

Route::get('id/tips-menabung-untuk-pelajar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-menabung-untuk-pelajar', 301);
});

Route::get('id/membangun-kebiasaan-membaca-buku/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membangun-kebiasaan-membaca-buku', 301);
});

Route::get('id/waspadai-7-dampak-oversharing-pada-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/waspadai-7-dampak-oversharing-pada-remaja', 301);
});

Route::get('id/keterampilan-abad-ke-21-yang-dibutuhkan-anak-di-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/keterampilan-abad-ke-21-yang-dibutuhkan-anak-di-masa-depan', 301);
});

Route::get('id/8-penyebab-otot-tidak-berkembang-meski-rajin-olahraga/', function () {
    session()->put('locale', 'id');
    return redirect('/news/8-penyebab-otot-tidak-berkembang-meski-rajin-olahraga', 301);
});

Route::get('id/pentingnya-memilih-sekolah-yang-cocok-dengan-gaya-belajar-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-memilih-sekolah-yang-cocok-dengan-gaya-belajar-anak', 301);
});

Route::get('id/cara-mengajukan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cara-mengajukan', 301);
});

Route::get('id/pentingnya-mengajarkan-toleransi-sejak-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-mengajarkan-toleransi-sejak-dini', 301);
});

Route::get('id/otonomi-daerah-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/otonomi-daerah-adalah', 301);
});

Route::get('id/4-efek-alkohol-alkohol-ke-saraf-dan-otak-manusia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/4-efek-alkohol-alkohol-ke-saraf-dan-otak-manusia', 301);
});

Route::get('id/pentingnya-mengajarkan-bahasa-asing-dari-kecil/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-mengajarkan-bahasa-asing-dari-kecil', 301);
});

Route::get('id/belajar-pola-bilangan-beserta-rumusnya-bersama-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-pola-bilangan-beserta-rumusnya-bersama-sampoerna-academy', 301);
});

Route::get('id/belajar-ipa-dengan-cara-yang-menyenangkan-untuk-siswa-sma/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-ipa-dengan-cara-yang-menyenangkan-untuk-siswa-sma', 301);
});

Route::get('id/trilingual-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/trilingual-di-sampoerna-academy', 301);
});

Route::get('id/menjaga-fokus-saat-mengikuti-belajar-daring/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menjaga-fokus-saat-mengikuti-belajar-daring', 301);
});

Route::get('id/bagaimana-tunanetra-mengenal-warna/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bagaimana-tunanetra-mengenal-warna', 301);
});

Route::get('id/mean-median-modus/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mean-median-modus', 301);
});

Route::get('id/learning-management-system/', function () {
    session()->put('locale', 'id');
    return redirect('/news/learning-management-system', 301);
});

Route::get('id/pahami-bentuk-kecerdasan-emosional-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pahami-bentuk-kecerdasan-emosional-anak', 301);
});

Route::get('id/berikan-10-kalimat-pujian-ini-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/berikan-10-kalimat-pujian-ini-untuk-anak', 301);
});

Route::get('id/kenali-7-permainan-tradisional-anak-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-7-permainan-tradisional-anak-indonesia', 301);
});

Route::get('id/manfaat-bimbingan-karir-dan-universitas-bagi-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-bimbingan-karir-dan-universitas-bagi-remaja', 301);
});

Route::get('id/daftar-ekstrakurikuler-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/daftar-ekstrakurikuler-di-sampoerna-academy', 301);
});

Route::get('id/bantu-anak-menghitung-rumus-trapesium-yuk-mom/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bantu-anak-menghitung-rumus-trapesium-yuk-mom', 301);
});

Route::get('id/dampak-pencemaran-udara/', function () {
    session()->put('locale', 'id');
    return redirect('/news/dampak-pencemaran-udara', 301);
});

Route::get('id/10-cara-melatih-percaya-diri-anak-perempuan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-cara-melatih-percaya-diri-anak-perempuan', 301);
});

Route::get('id/ciri-ciri-planet-mars/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ciri-ciri-planet-mars', 301);
});

Route::get('id/mengenal-sejarah-perkembangan-trem-dari-masa-ke-masa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-sejarah-perkembangan-trem-dari-masa-ke-masa', 301);
});

Route::get('id/mengenal-konsep-bioteknologi-jenis-dan-produk-yang-dihasilkan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-konsep-bioteknologi-jenis-dan-produk-yang-dihasilkan', 301);
});

Route::get('id/testimoni-alumni-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/testimoni-alumni-sampoerna-academy', 301);
});

Route::get('id/5-cara-menumbuhkan-berpikir-positif-dalam-diri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-cara-menumbuhkan-berpikir-positif-dalam-diri', 301);
});

Route::get('id/cambridge-assessment/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cambridge-assessment', 301);
});

Route::get('id/21st-century-learning-untuk-generasi-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/21st-century-learning-untuk-generasi-masa-depan', 301);
});

Route::get('id/pengertian-motif-ekonomi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-motif-ekonomi', 301);
});

Route::get('id/project-fluida-statis/', function () {
    session()->put('locale', 'id');
    return redirect('/news/project-fluida-statis', 301);
});

Route::get('id/memahami-contoh-sikap-toleransi-di-berbagai-bidang-kehidupan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-contoh-sikap-toleransi-di-berbagai-bidang-kehidupan', 301);
});

Route::get('id/7-basic-manners-yang-harus-diajarkan-kepada-anak-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-basic-manners-yang-harus-diajarkan-kepada-anak-anak', 301);
});

Route::get('id/mengapa-memilih-menyekolahkan-anak-di-international-school-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengapa-memilih-menyekolahkan-anak-di-international-school-indonesia', 301);
});

Route::get('id/portofolio-belajar-untuk-mengetahui-perkembangan-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/portofolio-belajar-untuk-mengetahui-perkembangan-anak', 301);
});

Route::get('id/negara-maritim-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/negara-maritim-adalah', 301);
});

Route::get('id/sejarah-dan-cerita-di-balik-rumus-pythagoras/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-dan-cerita-di-balik-rumus-pythagoras', 301);
});

Route::get('id/lipat-kertas-dan-pengaplikasian-terhadap-teknologi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/lipat-kertas-dan-pengaplikasian-terhadap-teknologi', 301);
});

Route::get('id/fasilitas-sekolah-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fasilitas-sekolah-sampoerna-academy', 301);
});

Route::get('id/kenali-gaya-belajar-anak-dan-cara-mengoptimalkannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-gaya-belajar-anak-dan-cara-mengoptimalkannya', 301);
});

Route::get('id/menanam-dengan-sistem-hidroponik-project-rezkyandra-team/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menanam-dengan-sistem-hidroponik-project-rezkyandra-team', 301);
});

Route::get('id/ketahui-tentang-digital-ecosystem-dan-manfaatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ketahui-tentang-digital-ecosystem-dan-manfaatnya', 301);
});

Route::get('id/5-ide-kelas-online-untuk-anak-agar-belajar-makin-seru/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-ide-kelas-online-untuk-anak-agar-belajar-makin-seru', 301);
});

Route::get('id/10-jenis-makanan-untuk-menambah-daya-ingat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-jenis-makanan-untuk-menambah-daya-ingat', 301);
});

Route::get('id/5-alasan-memilih-sampoerna-academy-sekolah-pilihan-terbaik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-alasan-memilih-sampoerna-academy-sekolah-pilihan-terbaik', 301);
});

Route::get('id/yuk-simak-penjelasan-tentang-solar-panel-oleh-omar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-simak-penjelasan-tentang-solar-panel-oleh-omar', 301);
});

Route::get('id/tips-meningkatkan-kemampuan-bahasa-inggris-ala-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-meningkatkan-kemampuan-bahasa-inggris-ala-sampoerna-academy', 301);
});

Route::get('id/5-tips-memulai-small-talk-dalam-bahasa-inggris/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-tips-memulai-small-talk-dalam-bahasa-inggris', 301);
});

Route::get('id/7-kesalahan-parenting-sebabkan-anak-tidak-percaya-diri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-kesalahan-parenting-sebabkan-anak-tidak-percaya-diri', 301);
});

Route::get('id/bagaimana-cara-membangun-passion-dalam-diri-sendiri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bagaimana-cara-membangun-passion-dalam-diri-sendiri', 301);
});

Route::get('id/memperkuat-perkembangan-moral-dan-etika-anak-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memperkuat-perkembangan-moral-dan-etika-anak-anak', 301);
});

Route::get('id/belajar-matematika-standar-internasional-coba-intip-sekolah-internasional-di-jakarta-ini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-matematika-standar-internasional-coba-intip-sekolah-internasional-di-jakarta-ini', 301);
});

Route::get('id/reboisasi-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/reboisasi-adalah', 301);
});

Route::get('id/manfaat-vitamin-d-untuk-mengatasi-mood-swing-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-vitamin-d-untuk-mengatasi-mood-swing-anak', 301);
});

Route::get('id/sampoerna-academy-merayakan-pencapaian-luar-biasa-di-seamo-2023/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-merayakan-pencapaian-luar-biasa-di-seamo-2023', 301);
});

Route::get('id/metode-pembelajaran-steam-untuk-memecahkan-masalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/metode-pembelajaran-steam-untuk-memecahkan-masalah', 301);
});

Route::get('id/metode-steam-education-penerapan-pada-sekolah-internasional-di-bogor-dan-sentul/', function () {
    session()->put('locale', 'id');
    return redirect('/news/metode-steam-education-penerapan-pada-sekolah-internasional-di-bogor-dan-sentul', 301);
});

Route::get('id/pembelajaran-steam-untuk-meningkatkan-kemampuan-kolaborasi-dan-kreativitas-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pembelajaran-steam-untuk-meningkatkan-kemampuan-kolaborasi-dan-kreativitas-anak', 301);
});

Route::get('id/tips-cara-belajar-bahasa-inggris-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-cara-belajar-bahasa-inggris-untuk-anak', 301);
});

Route::get('id/5-cara-menghafal-dengan-cepat-dan-mudah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-cara-menghafal-dengan-cepat-dan-mudah', 301);
});

Route::get('id/tips-cara-belajar-menulis-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-cara-belajar-menulis-untuk-anak', 301);
});

Route::get('id/menjadi-self-directed-learner-tips-dan-trik-untuk-sukses-dalam-pembelajaran-online-di-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menjadi-self-directed-learner-tips-dan-trik-untuk-sukses-dalam-pembelajaran-online-di-masa-depan', 301);
});

Route::get('id/6-cara-efektif-meningkatkan-pembelajaran-online-pada-anak-usia-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/6-cara-efektif-meningkatkan-pembelajaran-online-pada-anak-usia-dini', 301);
});

Route::get('id/pentingnya-belajar-mitigasi-bencana-sejak-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-belajar-mitigasi-bencana-sejak-dini', 301);
});

Route::get('id/pendidikan-sebagai-modal-sosial-untuk-membangun-bangsa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pendidikan-sebagai-modal-sosial-untuk-membangun-bangsa', 301);
});

Route::get('id/pengertian-kelompok-sosial/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-kelompok-sosial', 301);
});

Route::get('id/asesmen-nasional-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/asesmen-nasional-adalah', 301);
});

Route::get('id/tertarik-belajar-sastra-intip-7-profesi-berikut-di-bidang-sastra/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tertarik-belajar-sastra-intip-7-profesi-berikut-di-bidang-sastra', 301);
});

Route::get('id/kecerdasan-budaya-kompetensi-bahasa-kecakapan-abad-21-wajib-dimiliki-generasi-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kecerdasan-budaya-kompetensi-bahasa-kecakapan-abad-21-wajib-dimiliki-generasi-masa-depan', 301);
});

Route::get('id/arduino-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/arduino-di-sampoerna-academy', 301);
});

Route::get('id/mengembangkan-keterampilan-interpersonal-yang-esensial/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengembangkan-keterampilan-interpersonal-yang-esensial', 301);
});

Route::get('id/sampoerna-academy-menjadi-pilihan-terbaik-untuk-masa-depan-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-menjadi-pilihan-terbaik-untuk-masa-depan-anak', 301);
});

Route::get('id/ini-5-cara-menghilangkan-rasa-takut-yang-efektif/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ini-5-cara-menghilangkan-rasa-takut-yang-efektif', 301);
});

Route::get('id/bekal-makan-siang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bekal-makan-siang', 301);
});

Route::get('id/ingin-belajar-astronomi-intip-5-profesi-di-bidang-astronomi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ingin-belajar-astronomi-intip-5-profesi-di-bidang-astronomi', 301);
});

Route::get('id/sadfishing-tren-pamer-kesedihan-di-media-sosial/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sadfishing-tren-pamer-kesedihan-di-media-sosial', 301);
});

Route::get('id/tips-untuk-mencapai-score-maksimal-di-tes-igcse/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-untuk-mencapai-score-maksimal-di-tes-igcse', 301);
});

Route::get('id/terapi-untuk-remaja-yang-kecanduan-pornografi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/terapi-untuk-remaja-yang-kecanduan-pornografi', 301);
});

Route::get('id/memperkenalkan-tahapan-design-thinking-pada-anak-usia-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memperkenalkan-tahapan-design-thinking-pada-anak-usia-dini', 301);
});

Route::get('id/tips-mempersiapkan-diri-untuk-ujian-nasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-mempersiapkan-diri-untuk-ujian-nasional', 301);
});

Route::get('id/manfaat-menulis-cerita-pada-anak-usia-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-menulis-cerita-pada-anak-usia-dini', 301);
});

Route::get('id/8-buku-nonfiksi-ringan-yang-perlu-anak-anda-baca/', function () {
    session()->put('locale', 'id');
    return redirect('/news/8-buku-nonfiksi-ringan-yang-perlu-anak-anda-baca', 301);
});

Route::get('id/7-tips-persiapan-masuk-sekolah-menengah-atas-sma-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-tips-persiapan-masuk-sekolah-menengah-atas-sma-di-sampoerna-academy', 301);
});

Route::get('id/kenali-ciri-ciri-dan-dampak-pola-asuh-otoriter-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-ciri-ciri-dan-dampak-pola-asuh-otoriter-pada-anak', 301);
});

Route::get('id/proses-belajar-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/proses-belajar-anak', 301);
});

Route::get('id/para-siswa-sampoerna-academy-unggul-di-amo-2023/', function () {
    session()->put('locale', 'id');
    return redirect('/news/para-siswa-sampoerna-academy-unggul-di-amo-2023', 301);
});

Route::get('id/mengapa-disaat-hujan-datang-perasaan-mengantuk-dan-lapar/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengapa-disaat-hujan-datang-perasaan-mengantuk-dan-lapar', 301);
});

Route::get('id/manfaat-ekstrakurikuler-musik-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-ekstrakurikuler-musik-di-sampoerna-academy', 301);
});

Route::get('id/pendidikan-karakter-berbasis-steam-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pendidikan-karakter-berbasis-steam-di-sampoerna-academy', 301);
});

Route::get('id/belajar-sistem-irigasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-sistem-irigasi', 301);
});

Route::get('id/tips-untuk-mengatasi-kesulitan-belajar-saat-sekolah-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-untuk-mengatasi-kesulitan-belajar-saat-sekolah-online', 301);
});

Route::get('id/mendengarkan-musik-bisa-meredakan-stres-ini-faktanya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mendengarkan-musik-bisa-meredakan-stres-ini-faktanya', 301);
});

Route::get('id/manfaat-bermain-video-game-untuk-perkembangan-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-bermain-video-game-untuk-perkembangan-anak', 301);
});

Route::get('id/yuk-mengukur-kemampuan-siswa-dengan-4-jenis-asesmen-ini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-mengukur-kemampuan-siswa-dengan-4-jenis-asesmen-ini', 301);
});

Route::get('id/pembelajaran-kimia-dengan-metode-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pembelajaran-kimia-dengan-metode-steam', 301);
});

Route::get('id/memilih-sekolah-dengan-metode-pembelajaran-steam-untuk-anak-2/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memilih-sekolah-dengan-metode-pembelajaran-steam-untuk-anak-2', 301);
});

Route::get('id/pengertian-imigrasi-beserta-dengan-contoh-pelanggarannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-imigrasi-beserta-dengan-contoh-pelanggarannya', 301);
});

Route::get('id/apa-warna-matahari-sebenarnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-warna-matahari-sebenarnya', 301);
});

Route::get('id/memahami-siklus-hidrologi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-siklus-hidrologi', 301);
});

Route::get('id/project-turbin-angin/', function () {
    session()->put('locale', 'id');
    return redirect('/news/project-turbin-angin', 301);
});

Route::get('id/tips-jitu-cara-menjaga-konsentrasi-saat-belajar-di-rumah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-jitu-cara-menjaga-konsentrasi-saat-belajar-di-rumah', 301);
});

Route::get('id/mengapa-memilih-pendidikan-sekolah-dini-toddler-di-medan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengapa-memilih-pendidikan-sekolah-dini-toddler-di-medan', 301);
});

Route::get('id/perlukah-si-kecil-masuk-preschool/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perlukah-si-kecil-masuk-preschool', 301);
});

Route::get('id/program-program-unggulan-di-sekolah-online-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/program-program-unggulan-di-sekolah-online-sampoerna-academy', 301);
});

Route::get('id/mengenal-pengertian-fungsi-dan-jenis-karbohidrat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-pengertian-fungsi-dan-jenis-karbohidrat', 301);
});

Route::get('id/7-dampak-pemanasan-global-bagi-bumi-dan-kesehatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-dampak-pemanasan-global-bagi-bumi-dan-kesehatan', 301);
});

Route::get('id/mengenal-pancasila-fungsi-nilai-dan-arti-lambang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-pancasila-fungsi-nilai-dan-arti-lambang', 301);
});

Route::get('id/kurikulum-cambridge-pengertian-dan-ini-sekolah-internasional-yang-terapkanya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kurikulum-cambridge-pengertian-dan-ini-sekolah-internasional-yang-terapkanya', 301);
});

Route::get('id/ini-dia-5-cara-atasi-kecanduan-gadget-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ini-dia-5-cara-atasi-kecanduan-gadget-pada-anak', 301);
});

Route::get('id/project-based-learning-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/project-based-learning-sampoerna-academy', 301);
});

Route::get('id/belajar-dari-mana-saja-di-sampoerna-academy-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-dari-mana-saja-di-sampoerna-academy-online', 301);
});

Route::get('id/tahun-kabisat-adalah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tahun-kabisat-adalah', 301);
});

Route::get('id/apa-fungsi-hormon-tiroid/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-fungsi-hormon-tiroid', 301);
});

Route::get('id/tips-menjaga-kesehatan-organ-sistem-pernapasan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-menjaga-kesehatan-organ-sistem-pernapasan', 301);
});

Route::get('id/ini-penyebab-bau-badan-dan-cara-ampuh-mengatasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ini-penyebab-bau-badan-dan-cara-ampuh-mengatasinya', 301);
});

Route::get('id/7-kota-tertua-di-indonesia-menurut-sejarah-berdirinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-kota-tertua-di-indonesia-menurut-sejarah-berdirinya', 301);
});

Route::get('id/6-dampak-perubahan-iklim-di-bumi-yang-harus-diwaspadai/', function () {
    session()->put('locale', 'id');
    return redirect('/news/6-dampak-perubahan-iklim-di-bumi-yang-harus-diwaspadai', 301);
});

Route::get('id/kenali-4-manfaat-mencuci-tangan-dengan-sabun/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-4-manfaat-mencuci-tangan-dengan-sabun', 301);
});

Route::get('id/tips-meningkatkan-kemampuan-bahasa-asing-melalui-pembelajaran-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-meningkatkan-kemampuan-bahasa-asing-melalui-pembelajaran-online', 301);
});

Route::get('id/trik-membaca-bagi-yang-tidak-suka-membaca/', function () {
    session()->put('locale', 'id');
    return redirect('/news/trik-membaca-bagi-yang-tidak-suka-membaca', 301);
});

Route::get('id/5-alasan-mengapa-ibdp-diakui-oleh-universitas-terkemuka-di-dunia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-alasan-mengapa-ibdp-diakui-oleh-universitas-terkemuka-di-dunia', 301);
});

Route::get('id/kegunaan-teknologi-dalam-pembelajaran-steam-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kegunaan-teknologi-dalam-pembelajaran-steam-online', 301);
});

Route::get('id/penerapan-kurikulum-sekolah-internasional-di-jakarta-selatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penerapan-kurikulum-sekolah-internasional-di-jakarta-selatan', 301);
});

Route::get('id/apakah-sekolah-online-dapat-melanjutkan-kuliah-ke-luar-negeri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apakah-sekolah-online-dapat-melanjutkan-kuliah-ke-luar-negeri', 301);
});

Route::get('id/sekolah-dasar-sampoerna/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-dasar-sampoerna', 301);
});

Route::get('id/sa-dalam-angka/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sa-dalam-angka', 301);
});

Route::get('id/yuk-intip-si-cerdas-nicholas-ngasikin-membuat-terrarium/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-intip-si-cerdas-nicholas-ngasikin-membuat-terrarium', 301);
});

Route::get('id/sejarah-sumpah-pemuda-teks-tokoh-makna-untuk-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sejarah-sumpah-pemuda-teks-tokoh-makna-untuk-indonesia', 301);
});

Route::get('id/5-dampak-negatif-merokok-bagi-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-dampak-negatif-merokok-bagi-remaja', 301);
});

Route::get('id/pengertian-limbah-jenis-jenis-dan-cara-mengatasinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-limbah-jenis-jenis-dan-cara-mengatasinya', 301);
});

Route::get('id/pentingnya-literasi-digital/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-literasi-digital', 301);
});

Route::get('id/self-sustained-terrarium-mengembangkan-kreativitas-dan-kesadaran-lingkungan-melalui-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/self-sustained-terrarium-mengembangkan-kreativitas-dan-kesadaran-lingkungan-melalui-steam', 301);
});

Route::get('id/manfaat-belajar-sambil-bermain-untuk-toddler-sa-sentul/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-belajar-sambil-bermain-untuk-toddler-sa-sentul', 301);
});

Route::get('id/kenali-toxic-relationship-pada-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-toxic-relationship-pada-remaja', 301);
});

Route::get('id/7-buah-untuk-menurunkan-kolestrol-dan-darah-tinggi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-buah-untuk-menurunkan-kolestrol-dan-darah-tinggi', 301);
});

Route::get('id/mengenal-personal-statement-dan-tips-cara-membuatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-personal-statement-dan-tips-cara-membuatnya', 301);
});

Route::get('id/belajar-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-online', 301);
});

Route::get('id/bagaimana-dampak-limbah-plastik-di-laut/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bagaimana-dampak-limbah-plastik-di-laut', 301);
});

Route::get('id/donor-plasma-konvalesen-pengertian-syarat-biaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/donor-plasma-konvalesen-pengertian-syarat-biaya', 301);
});

Route::get('id/menyambut-masa-depan-dengan-transformasi-pendidikan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menyambut-masa-depan-dengan-transformasi-pendidikan', 301);
});

Route::get('id/pembelajaran-jarak-jauh-sebagai-model-pembelajaran-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pembelajaran-jarak-jauh-sebagai-model-pembelajaran-masa-depan', 301);
});

Route::get('id/tips-ide-mainan-sensory-play-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-ide-mainan-sensory-play-untuk-anak', 301);
});

Route::get('id/tampilan-baru-sampoerna-academy-medan-kampus-cipto/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tampilan-baru-sampoerna-academy-medan-kampus-cipto', 301);
});

Route::get('id/5-tips-untuk-mendapatkan-beasiswa-impianmu/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-tips-untuk-mendapatkan-beasiswa-impianmu', 301);
});

Route::get('id/tips-cara-mengatasi-pengaruh-internet-bagi-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-cara-mengatasi-pengaruh-internet-bagi-anak', 301);
});

Route::get('id/project-game-online-karya-siswa-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/project-game-online-karya-siswa-sampoerna-academy', 301);
});

Route::get('id/sampoerna-academy-menyediakan-pendidikan-berkualitas-dunia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-menyediakan-pendidikan-berkualitas-dunia', 301);
});

Route::get('id/lulusan-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/lulusan-sampoerna-academy', 301);
});

Route::get('id/fenomena-la-nina/', function () {
    session()->put('locale', 'id');
    return redirect('/news/fenomena-la-nina', 301);
});

Route::get('id/apakah-video-game-dan-esports-baik-untuk-sang-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apakah-video-game-dan-esports-baik-untuk-sang-anak', 301);
});

Route::get('id/mengenal-anatomi-organ-atau-alat-reproduksi-wanita-dan-fungsinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-anatomi-organ-atau-alat-reproduksi-wanita-dan-fungsinya', 301);
});

Route::get('id/membentuk-karakter-kepemimpinan-anak-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membentuk-karakter-kepemimpinan-anak-di-sampoerna-academy', 301);
});

Route::get('id/home-schooling-vs-pendidikan-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/home-schooling-vs-pendidikan-online', 301);
});

Route::get('id/steam-projects-bagaimana-tanah-dapat-mempengaruhi-ph-air/', function () {
    session()->put('locale', 'id');
    return redirect('/news/steam-projects-bagaimana-tanah-dapat-mempengaruhi-ph-air', 301);
});

Route::get('id/mengenal-pembelajaran-imersif-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-pembelajaran-imersif-di-sampoerna-academy', 301);
});

Route::get('id/metode-pengajaran/', function () {
    session()->put('locale', 'id');
    return redirect('/news/metode-pengajaran', 301);
});

Route::get('id/meningkatkan-kemampuan-kognitif-melalui-pembelajaran-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-kemampuan-kognitif-melalui-pembelajaran-online', 301);
});

Route::get('id/perencanaan-studi-ke-universitas-setelah-lulus-ib-diploma-program/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perencanaan-studi-ke-universitas-setelah-lulus-ib-diploma-program', 301);
});

Route::get('id/sampoerna-academy-pengembangan-karakter-lewat-metode-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-pengembangan-karakter-lewat-metode-steam', 301);
});

Route::get('id/pendidikan-anak-usia-dini-paud-definisi-manfaat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pendidikan-anak-usia-dini-paud-definisi-manfaat', 301);
});

Route::get('id/orang-tua-harus-tahu-5-dampak-bullying-bagi-korban-dan-pelaku/', function () {
    session()->put('locale', 'id');
    return redirect('/news/orang-tua-harus-tahu-5-dampak-bullying-bagi-korban-dan-pelaku', 301);
});

Route::get('id/apa-perbedaan-hari-anak-nasional-dan-hari-anak-internasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-perbedaan-hari-anak-nasional-dan-hari-anak-internasional', 301);
});

Route::get('id/8-tips-dukungan-keluarga-untuk-sikecil-saat-belajar-di-rumah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/8-tips-dukungan-keluarga-untuk-sikecil-saat-belajar-di-rumah', 301);
});

Route::get('id/belajar-sains-dengan-metode-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-sains-dengan-metode-steam', 301);
});

Route::get('id/kenali-lebih-lanjut-sekolah-internasional-di-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-lebih-lanjut-sekolah-internasional-di-indonesia', 301);
});

Route::get('id/mengajarkan-problem-solving-sejak-dini-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengajarkan-problem-solving-sejak-dini-pada-anak', 301);
});

Route::get('id/metode-pembelajaran-steam-dapat-meningkatkan-kreativitas-siswa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/metode-pembelajaran-steam-dapat-meningkatkan-kreativitas-siswa', 301);
});

Route::get('id/sistem-pendidikan-terpadu-untuk-generasi-muda-yang-gemilang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sistem-pendidikan-terpadu-untuk-generasi-muda-yang-gemilang', 301);
});

Route::get('id/5-cara-mengasah-pikiran-kreatif-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-cara-mengasah-pikiran-kreatif-anak', 301);
});

Route::get('id/bukti-kami-besarkan-jawara-matematika-24-medali-dari-wmi-2018-di-seoul-korea-selatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bukti-kami-besarkan-jawara-matematika-24-medali-dari-wmi-2018-di-seoul-korea-selatan', 301);
});

Route::get('id/sampoerna-academy-menggandeng-blcu-untuk-pengajaran-bahasa-mandarin/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-menggandeng-blcu-untuk-pengajaran-bahasa-mandarin', 301);
});

Route::get('id/eksplorasi-diri-melalui-ragam-ekstrakurikuler-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/eksplorasi-diri-melalui-ragam-ekstrakurikuler-sampoerna-academy', 301);
});

Route::get('id/siswa-sampoerna-academy-raih-medali-di-world-scholars-cup-bangkok-global-round/', function () {
    session()->put('locale', 'id');
    return redirect('/news/siswa-sampoerna-academy-raih-medali-di-world-scholars-cup-bangkok-global-round', 301);
});

Route::get('id/mengenal-lima-negara-pendiri-asean-dan-sejarahnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-lima-negara-pendiri-asean-dan-sejarahnya', 301);
});

Route::get('id/mengenal-istilah-guilt-tripping-dalam-mengasuh-si-kecil/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-istilah-guilt-tripping-dalam-mengasuh-si-kecil', 301);
});

Route::get('id/apa-perbedaan-sekolah-internasional-di-jakarta-dengan-sekolah-nasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-perbedaan-sekolah-internasional-di-jakarta-dengan-sekolah-nasional', 301);
});

Route::get('id/tips-dan-teknik-belajar-efektif-yang-kamu-harus-tahu/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-dan-teknik-belajar-efektif-yang-kamu-harus-tahu', 301);
});

Route::get('id/tips-memilih-sekolah-internasional-di-surabaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-memilih-sekolah-internasional-di-surabaya', 301);
});

Route::get('id/6-minuman-untuk-daya-tahan-tubuh-yang-lebih-kuat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/6-minuman-untuk-daya-tahan-tubuh-yang-lebih-kuat', 301);
});

Route::get('id/mengenal-sistem-sks-universitas-di-luar-negeri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-sistem-sks-universitas-di-luar-negeri', 301);
});

Route::get('id/apa-itu-demokrasi-definisi-dan-sejarah-demokrasi-di-indonesia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-demokrasi-definisi-dan-sejarah-demokrasi-di-indonesia', 301);
});

Route::get('id/apa-itu-self-love-ini-manfaat-dan-cara-menerapkannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-self-love-ini-manfaat-dan-cara-menerapkannya', 301);
});

Route::get('id/7-manfaat-jalan-kaki-untuk-kesehatan-tubuh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-manfaat-jalan-kaki-untuk-kesehatan-tubuh', 301);
});

Route::get('id/ketahui-cara-menghadapi-epilepsi-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ketahui-cara-menghadapi-epilepsi-pada-anak', 301);
});

Route::get('id/protein-pengertian-dan-manfaatnya-bagi-kesehatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/protein-pengertian-dan-manfaatnya-bagi-kesehatan', 301);
});

Route::get('id/menumbuhkan-semangat-belajar-dalam-landasan-pendidikan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menumbuhkan-semangat-belajar-dalam-landasan-pendidikan', 301);
});

Route::get('id/bangun-pembelajaran-sosial-dan-emosional-di-sekolah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bangun-pembelajaran-sosial-dan-emosional-di-sekolah', 301);
});

Route::get('id/steam-dan-project-based-learning-mengapa-memilih-keduanya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/steam-dan-project-based-learning-mengapa-memilih-keduanya', 301);
});

Route::get('id/penerapan-kurikulum-cambridge-sekolah-internasional-jakarta/', function () {
    session()->put('locale', 'id');
    return redirect('/news/penerapan-kurikulum-cambridge-sekolah-internasional-jakarta', 301);
});

Route::get('id/dukung-terciptanya-inovator-muda-sampoerna-academy-kembali-gelar-steam-expo-2024/', function () {
    session()->put('locale', 'id');
    return redirect('/news/dukung-terciptanya-inovator-muda-sampoerna-academy-kembali-gelar-steam-expo-2024', 301);
});

Route::get('id/pengalaman-belajar-di-sekolah-internasional-di-tangerang-selatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengalaman-belajar-di-sekolah-internasional-di-tangerang-selatan', 301);
});

Route::get('id/pelajar-pelajar-sa-diterima-di-universitas-berkelas-dunia/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pelajar-pelajar-sa-diterima-di-universitas-berkelas-dunia', 301);
});

Route::get('id/kelebihan-sekolah-internasional-dalam-persiapan-karir-global/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kelebihan-sekolah-internasional-dalam-persiapan-karir-global', 301);
});

Route::get('id/catat-ini-keunggulan-sekolah-internasional-di-jakarta/', function () {
    session()->put('locale', 'id');
    return redirect('/news/catat-ini-keunggulan-sekolah-internasional-di-jakarta', 301);
});

Route::get('id/kemitraan-sampoerna-academy-dukung-persiapan-kuliah-luar-negeri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kemitraan-sampoerna-academy-dukung-persiapan-kuliah-luar-negeri', 301);
});

Route::get('id/5-kriteria-sekolah-internasional-di-tangerang-selatan-yang-berkualitas/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-kriteria-sekolah-internasional-di-tangerang-selatan-yang-berkualitas', 301);
});

Route::get('id/berpikir-kreatif-dengan-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/berpikir-kreatif-dengan-steam', 301);
});

Route::get('id/yuk-ketahui-media-pembelajaran-daring-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-ketahui-media-pembelajaran-daring-di-sampoerna-academy', 301);
});

Route::get('id/hal-yang-wajib-diketahui-sebelum-berencana-kuliah-di-luar-negeri/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hal-yang-wajib-diketahui-sebelum-berencana-kuliah-di-luar-negeri', 301);
});

Route::get('id/pendidikan-online-vs-homeschooling-efektif-mana/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pendidikan-online-vs-homeschooling-efektif-mana', 301);
});

Route::get('id/membangun-pemahaman-berpikir-perkembangan-kognitif-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membangun-pemahaman-berpikir-perkembangan-kognitif-anak', 301);
});

Route::get('id/gaya-hidup-minimalis-kunci-menuju-keuangan-yang-sehat-dan-stabil/', function () {
    session()->put('locale', 'id');
    return redirect('/news/gaya-hidup-minimalis-kunci-menuju-keuangan-yang-sehat-dan-stabil', 301);
});

Route::get('id/manfaat-journaling-untuk-kesehatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-journaling-untuk-kesehatan', 301);
});

Route::get('id/pentingnya-mengenal-minat-anak-sedari-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-mengenal-minat-anak-sedari-dini', 301);
});

Route::get('id/tingkatkan-kecintaan-terhadap-laut-sampoerna-academy-bersama-komunitas-parenting-gelar-workshop-save-the-ocean/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tingkatkan-kecintaan-terhadap-laut-sampoerna-academy-bersama-komunitas-parenting-gelar-workshop-save-the-ocean', 301);
});

Route::get('id/keunggulan-masuk-sekolah-internasional-di-bogor-dan-sentul/', function () {
    session()->put('locale', 'id');
    return redirect('/news/keunggulan-masuk-sekolah-internasional-di-bogor-dan-sentul', 301);
});

Route::get('id/membangun-generasi-unggul-dengan-pembelajaran-yang-holistik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membangun-generasi-unggul-dengan-pembelajaran-yang-holistik', 301);
});

Route::get('id/sekolah-internasional-di-medan-mengapa-harus-metode-pembelajaran-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-internasional-di-medan-mengapa-harus-metode-pembelajaran-steam', 301);
});

Route::get('id/sampoerna-academy-rayakan-10-tahun-dedikasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-rayakan-10-tahun-dedikasi', 301);
});

Route::get('id/media-pembelajaran-yang-digunakan-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/media-pembelajaran-yang-digunakan-di-sampoerna-academy', 301);
});

Route::get('id/mengenal-program-pengembangan-gaya-kepemimpinan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-program-pengembangan-gaya-kepemimpinan', 301);
});

Route::get('id/manfaat-pembelajaran-berbasis-teknologi-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/manfaat-pembelajaran-berbasis-teknologi-di-sampoerna-academy', 301);
});

Route::get('id/membuka-jendela-dunia-teknologi-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membuka-jendela-dunia-teknologi-di-sampoerna-academy', 301);
});

Route::get('id/kenali-apa-itu-migrasi-penduduk/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-apa-itu-migrasi-penduduk', 301);
});

Route::get('id/apa-itu-toefl-kenali-definisinya-dan-tips-belajarnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-toefl-kenali-definisinya-dan-tips-belajarnya', 301);
});

Route::get('id/7-manfaat-berenang-untuk-kesehatan-tubuh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-manfaat-berenang-untuk-kesehatan-tubuh', 301);
});

Route::get('id/pengertian-tumor-otak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pengertian-tumor-otak', 301);
});

Route::get('id/mengenal-metode-pembelajaran-discovery-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-metode-pembelajaran-discovery-learning', 301);
});

Route::get('id/waspada-radiasi-blue-light-pada-mata-akibat-gadget/', function () {
    session()->put('locale', 'id');
    return redirect('/news/waspada-radiasi-blue-light-pada-mata-akibat-gadget', 301);
});

Route::get('id/mengenal-kanker-tenggorokan-dalang-kematian-oppenheimer/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-kanker-tenggorokan-dalang-kematian-oppenheimer', 301);
});

Route::get('id/mengenali-ikigai-filosofi-jepang-untuk-hidup-berbahagia-setiap-hari/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenali-ikigai-filosofi-jepang-untuk-hidup-berbahagia-setiap-hari', 301);
});

Route::get('id/aplikasi-rapor-online-inovasi-digital-di-bidang-pendidikan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/aplikasi-rapor-online-inovasi-digital-di-bidang-pendidikan', 301);
});

Route::get('id/membaca-buku-dapat-meningkatkan-memori-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membaca-buku-dapat-meningkatkan-memori-anak', 301);
});

Route::get('id/yuk-gabung-sekolah-internasional-di-medan-dan-raih-manfaatnya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-gabung-sekolah-internasional-di-medan-dan-raih-manfaatnya', 301);
});

Route::get('id/sekolah-internasional-medan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-internasional-medan', 301);
});

Route::get('id/sistem-pendidikan-berkualitas-tinggi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sistem-pendidikan-berkualitas-tinggi', 301);
});

Route::get('id/project-steam-sampoerna-academy-sentul-membuat-roket-dari-kaleng-film/', function () {
    session()->put('locale', 'id');
    return redirect('/news/project-steam-sampoerna-academy-sentul-membuat-roket-dari-kaleng-film', 301);
});

Route::get('id/mengoptimalkan-pembelajaran-pada-anak-dengan-filosofi-reggio/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengoptimalkan-pembelajaran-pada-anak-dengan-filosofi-reggio', 301);
});

Route::get('id/pameran-robotik-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pameran-robotik-di-sampoerna-academy', 301);
});

Route::get('id/10-tahun-prestasi-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/10-tahun-prestasi-sampoerna-academy', 301);
});

Route::get('id/bimbingan-konseling-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bimbingan-konseling-sampoerna-academy', 301);
});

Route::get('id/menjawab-tantangan-pendidikan-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menjawab-tantangan-pendidikan-masa-depan', 301);
});

Route::get('id/masa-depan-siswa-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/masa-depan-siswa-sampoerna-academy', 301);
});

Route::get('id/sampoerna-academy-dorong-generasi-alpha-menghargai-keberagaman-melalui-edukasi-berbasis-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-dorong-generasi-alpha-menghargai-keberagaman-melalui-edukasi-berbasis-steam', 301);
});

Route::get('id/membentuk-generasi-cerdas-melalui-sekolah-online-sampoerna/', function () {
    session()->put('locale', 'id');
    return redirect('/news/membentuk-generasi-cerdas-melalui-sekolah-online-sampoerna', 301);
});

Route::get('id/meningkatkan-minat-belajar-anak-dengan-metode-pembelajaran-steam/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-minat-belajar-anak-dengan-metode-pembelajaran-steam', 301);
});

Route::get('id/sampoerna-academy-hadirkan-buku-cerita-berkualitas-karya-para-siswa/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-hadirkan-buku-cerita-berkualitas-karya-para-siswa', 301);
});

Route::get('id/kesiapan-sampoerna-academy-hadapi-pendidikan-era-society-5-0/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kesiapan-sampoerna-academy-hadapi-pendidikan-era-society-5-0', 301);
});

Route::get('id/tips-sukses-belajar-steam-secara-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-sukses-belajar-steam-secara-online', 301);
});

Route::get('id/yuk-pahami-apa-itu-perpindahan-panas-secara-konveksi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/yuk-pahami-apa-itu-perpindahan-panas-secara-konveksi', 301);
});

Route::get('id/apa-itu-fobia-pengertian-penyebab-dan-pengobatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-fobia-pengertian-penyebab-dan-pengobatan', 301);
});

Route::get('id/apa-itu-ielts-dan-tips-cara-mempersiapkannya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-ielts-dan-tips-cara-mempersiapkannya', 301);
});

Route::get('id/5-metode-belajar-yang-efektif-dan-menyenangkan-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-metode-belajar-yang-efektif-dan-menyenangkan-untuk-anak', 301);
});

Route::get('id/5-manfaat-minum-air-putih-untuk-kesehatan-tubuh/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-manfaat-minum-air-putih-untuk-kesehatan-tubuh', 301);
});

Route::get('id/mengapa-sekolah-online-menjadi-masa-depan-pendidikan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengapa-sekolah-online-menjadi-masa-depan-pendidikan', 301);
});

Route::get('id/sekolah-internasional-populer-di-tangerang-selatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-internasional-populer-di-tangerang-selatan', 301);
});

Route::get('id/jakarta-selatan-gudangnya-sma-internasional-dengan-kurikulum-terbaik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/jakarta-selatan-gudangnya-sma-internasional-dengan-kurikulum-terbaik', 301);
});

Route::get('id/tips-mengatasi-kecanduan-bermain-handphone/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-mengatasi-kecanduan-bermain-handphone', 301);
});

Route::get('id/bagaimana-mengatasi-kecanduan-gadget-pada-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bagaimana-mengatasi-kecanduan-gadget-pada-anak', 301);
});

Route::get('id/7-manfaat-cokelat-dan-tips-aman-mengonsumsinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-manfaat-cokelat-dan-tips-aman-mengonsumsinya', 301);
});

Route::get('id/perayaan-ulang-tahun-ke-10-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/perayaan-ulang-tahun-ke-10-sampoerna-academy', 301);
});

Route::get('id/7-jenis-kegiatan-bakar-kalori-ala-siswa-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-jenis-kegiatan-bakar-kalori-ala-siswa-sampoerna-academy', 301);
});

Route::get('id/international-baccalaureate-diploma-programme/', function () {
    session()->put('locale', 'id');
    return redirect('/news/international-baccalaureate-diploma-programme', 301);
});

Route::get('id/sekolah-internasional-terbaik/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sekolah-internasional-terbaik', 301);
});

Route::get('id/memilih-fasilitas-sekolah-internasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memilih-fasilitas-sekolah-internasional', 301);
});

Route::get('id/menjaga-produktivitas-saat-belajar-di-rumah-dengan-aktivitas-seru/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menjaga-produktivitas-saat-belajar-di-rumah-dengan-aktivitas-seru', 301);
});

Route::get('id/ingin-masuk-sekolah-internasional-surabaya-perhatikan-5-hal-ini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/ingin-masuk-sekolah-internasional-surabaya-perhatikan-5-hal-ini', 301);
});

Route::get('id/5-cara-memupuk-rasa-percaya-diri-anak-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-cara-memupuk-rasa-percaya-diri-anak-di-sampoerna-academy', 301);
});

Route::get('id/teknologi-dan-pendidikan-sekolah-online-sebagai-solusi-masa-depan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/teknologi-dan-pendidikan-sekolah-online-sebagai-solusi-masa-depan', 301);
});

Route::get('id/cari-tahu-sarana-alternatif-ilmu-parenting-di-era-digital/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cari-tahu-sarana-alternatif-ilmu-parenting-di-era-digital', 301);
});

Route::get('id/meningkatkan-rasa-ingin-tahu-melalui-inquiry-based-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-rasa-ingin-tahu-melalui-inquiry-based-learning', 301);
});

Route::get('id/7-kalimat-ini-tak-boleh-dikatakan-ke-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/7-kalimat-ini-tak-boleh-dikatakan-ke-anak', 301);
});

Route::get('id/keseruan-pembelajaran-daring-dengan-project-based-learning/', function () {
    session()->put('locale', 'id');
    return redirect('/news/keseruan-pembelajaran-daring-dengan-project-based-learning', 301);
});

Route::get('id/sampoerna-academy-raih-penghargaan-outstanding-cambridge/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-raih-penghargaan-outstanding-cambridge', 301);
});

Route::get('id/standar-internasional-untuk-masa-depan-yang-gemilang/', function () {
    session()->put('locale', 'id');
    return redirect('/news/standar-internasional-untuk-masa-depan-yang-gemilang', 301);
});

Route::get('id/daftar-sekolah-internasional-di-surabaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/daftar-sekolah-internasional-di-surabaya', 301);
});

Route::get('id/cara-mudah-dan-alami-meningkatkan-daya-ingat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/cara-mudah-dan-alami-meningkatkan-daya-ingat', 301);
});

Route::get('id/kenali-jenis-tantrum-yang-sering-dilakukan-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kenali-jenis-tantrum-yang-sering-dilakukan-anak', 301);
});

Route::get('id/5-tips-menjaga-kesehatan-gigi-dan-mulut/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-tips-menjaga-kesehatan-gigi-dan-mulut', 301);
});

Route::get('id/apa-itu-kolesterol-gejala-penyebab-pengobatan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/apa-itu-kolesterol-gejala-penyebab-pengobatan', 301);
});

Route::get('id/5-tips-hidup-sehat-yang-bikin-kamu-panjang-umur/', function () {
    session()->put('locale', 'id');
    return redirect('/news/5-tips-hidup-sehat-yang-bikin-kamu-panjang-umur', 301);
});

Route::get('id/3-keunggulan-sekolah-internasional-di-surabaya-yang-wajib-ketahui/', function () {
    session()->put('locale', 'id');
    return redirect('/news/3-keunggulan-sekolah-internasional-di-surabaya-yang-wajib-ketahui', 301);
});

Route::get('id/hari-gizi-nasional-2024-generasi-cerdas-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hari-gizi-nasional-2024-generasi-cerdas-sampoerna-academy', 301);
});

Route::get('id/tips-memilih-sekolah-menengah-pertama-internasional-yang-tepat/', function () {
    session()->put('locale', 'id');
    return redirect('/news/tips-memilih-sekolah-menengah-pertama-internasional-yang-tepat', 301);
});

Route::get('id/bagaimana-sampoerna-academy-pastikan-keberhasilan-virtual-school-selama-pandemi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/bagaimana-sampoerna-academy-pastikan-keberhasilan-virtual-school-selama-pandemi', 301);
});

Route::get('id/eranya-teknologi-dorong-anak-belajar-coding-sejak-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/eranya-teknologi-dorong-anak-belajar-coding-sejak-dini', 301);
});

Route::get('id/sampoerna-academy-bangun-kampus-baru-di-surabaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-bangun-kampus-baru-di-surabaya', 301);
});

Route::get('id/pentingnya-pendidikan-karakter-di-sekolah-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/pentingnya-pendidikan-karakter-di-sekolah-online', 301);
});

Route::get('id/memahami-vitamin-d-untuk-kesehatan-siswa-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memahami-vitamin-d-untuk-kesehatan-siswa-sampoerna-academy', 301);
});

Route::get('id/new-newton-5-cara-mudah-taklukkan-fisika/', function () {
    session()->put('locale', 'id');
    return redirect('/news/new-newton-5-cara-mudah-taklukkan-fisika', 301);
});

Route::get('id/belajar-online-di-sa-untuk-meningkatkan-kemampuan-komunikasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-online-di-sa-untuk-meningkatkan-kemampuan-komunikasi', 301);
});

Route::get('id/persiapan-untuk-17-agustus-ini-beda-paskibra-dan-paskibraka/', function () {
    session()->put('locale', 'id');
    return redirect('/news/persiapan-untuk-17-agustus-ini-beda-paskibra-dan-paskibraka', 301);
});

Route::get('id/belajar-pendekatan-pemrograman-pada-anak-sejak-dini/', function () {
    session()->put('locale', 'id');
    return redirect('/news/belajar-pendekatan-pemrograman-pada-anak-sejak-dini', 301);
});

Route::get('id/international-school-jakarta/', function () {
    session()->put('locale', 'id');
    return redirect('/news/international-school-jakarta', 301);
});

Route::get('id/benarkah-ada-air-di-bulan-ini-temuan-baru-ilmuwan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/benarkah-ada-air-di-bulan-ini-temuan-baru-ilmuwan', 301);
});

Route::get('id/topping-off-kampus-sampoerna-academy-surabaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/topping-off-kampus-sampoerna-academy-surabaya', 301);
});

Route::get('id/selebrasi-sampoerna-academy-surabaya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/selebrasi-sampoerna-academy-surabaya', 301);
});

Route::get('id/mengajarkan-anak-bahasa-inggris-dengan-cara-yang-menyenangkan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengajarkan-anak-bahasa-inggris-dengan-cara-yang-menyenangkan', 301);
});

Route::get('id/sampoerna-academy-bersinar-melalui-perayaan-tahun-baru-imlek-bertema-the-descendant-of-the-dragon/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-bersinar-melalui-perayaan-tahun-baru-imlek-bertema-the-descendant-of-the-dragon', 301);
});

Route::get('id/mengenal-quarter-life-crisis-dan-cara-menghadapinya/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-quarter-life-crisis-dan-cara-menghadapinya', 301);
});

Route::get('id/mendorong-prestasi-anak-melalui-pendidikan-sekolah-internasional/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mendorong-prestasi-anak-melalui-pendidikan-sekolah-internasional', 301);
});

Route::get('id/mengenal-istilah-guilt-tripping-dalam-mengasuh-si-kecil-2/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-istilah-guilt-tripping-dalam-mengasuh-si-kecil-2', 301);
});

Route::get('id/sampoerna-academy-tekankan-pentingnya-sinergi-guru-orang-tua-dan-siswa-dalam-keberhasilan-belajar-anak-selama-virtual-schooling/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-tekankan-pentingnya-sinergi-guru-orang-tua-dan-siswa-dalam-keberhasilan-belajar-anak-selama-virtual-schooling', 301);
});

Route::get('id/6-cara-ampuh-membuat-cv-yang-menarik-agar-dilirik-oleh-hrd/', function () {
    session()->put('locale', 'id');
    return redirect('/news/6-cara-ampuh-membuat-cv-yang-menarik-agar-dilirik-oleh-hrd', 301);
});

Route::get('id/mengejutkan-ini-alasan-siswa-memilih-sekolah-internasional-di-jakarta/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengejutkan-ini-alasan-siswa-memilih-sekolah-internasional-di-jakarta', 301);
});

Route::get('id/mengenal-pembelajaran-steam-di-sampoerna-academy-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mengenal-pembelajaran-steam-di-sampoerna-academy-online', 301);
});

Route::get('id/sampoerna-academy-menerapkan-metode-steam-untuk-semangati-siswa-belajar-selama-virtual-schooling-di-rumah/', function () {
    session()->put('locale', 'id');
    return redirect('/news/sampoerna-academy-menerapkan-metode-steam-untuk-semangati-siswa-belajar-selama-virtual-schooling-di-rumah', 301);
});

Route::get('id/berfokus-pada-pendidikan-steam-sampoerna-academy-mempersiapkan-masa-depan-anak-anak-di-era-teknologi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/berfokus-pada-pendidikan-steam-sampoerna-academy-mempersiapkan-masa-depan-anak-anak-di-era-teknologi', 301);
});

Route::get('id/berapa-jam-tidur-yang-baik-untuk-remaja/', function () {
    session()->put('locale', 'id');
    return redirect('/news/berapa-jam-tidur-yang-baik-untuk-remaja', 301);
});

Route::get('id/mewujudkan-ide-sang-anak-menjadi-kenyataan/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mewujudkan-ide-sang-anak-menjadi-kenyataan', 301);
});

Route::get('id/menjadi-orangtua-daring/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menjadi-orangtua-daring', 301);
});

Route::get('id/menyambut-tahun-baru-imlek-2024-semangat-baru-di-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/menyambut-tahun-baru-imlek-2024-semangat-baru-di-sampoerna-academy', 301);
});

Route::get('id/kampus-sampoerna/', function () {
    session()->put('locale', 'id');
    return redirect('/news/kampus-sampoerna', 301);
});

Route::get('id/hadir-di-ubud-writers-readers-festival-2022-sampoerna-academy-inspirasi-pembentukan-kreativitas-pada-anak-melalui-literasi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/hadir-di-ubud-writers-readers-festival-2022-sampoerna-academy-inspirasi-pembentukan-kreativitas-pada-anak-melalui-literasi', 301);
});

Route::get('id/meningkatkan-pembelajaran-aktif-bersama-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/meningkatkan-pembelajaran-aktif-bersama-sampoerna-academy', 301);
});

Route::get('id/international-school-manfaat-bagi-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/international-school-manfaat-bagi-anak', 301);
});

Route::get('id/timothy-abisha-dari-sampoerna-academy-meraih-medali-perak-dalam-acara-internasional-ieyi/', function () {
    session()->put('locale', 'id');
    return redirect('/news/timothy-abisha-dari-sampoerna-academy-meraih-medali-perak-dalam-acara-internasional-ieyi', 301);
});

Route::get('id/memilih-sekolah-dengan-metode-pembelajaran-steam-untuk-anak/', function () {
    session()->put('locale', 'id');
    return redirect('/news/memilih-sekolah-dengan-metode-pembelajaran-steam-untuk-anak', 301);
});

Route::get('id/mempersiapkan-masa-depan-bersama-sampoerna-academy-online/', function () {
    session()->put('locale', 'id');
    return redirect('/news/mempersiapkan-masa-depan-bersama-sampoerna-academy-online', 301);
});

Route::get('id/juara-ii-dan-medali-hitam-dalam-kompetisi-matematika-asia-tenggara-seamc-2018/', function () {
    session()->put('locale', 'id');
    return redirect('/news/juara-ii-dan-medali-hitam-dalam-kompetisi-matematika-asia-tenggara-seamc-2018', 301);
});

Route::get('id/program-literasi-sampoerna-academy/', function () {
    session()->put('locale', 'id');
    return redirect('/news/program-literasi-sampoerna-academy', 301);
});

//Route::get('{slug}', [RedirectController::class, 'redirect_article_en'])->where('slug', '.*');
//Route::get('{slug}', [RedirectController::class, 'redirect_article_id'])->where('slug', '.*');

<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackSurveiController;
use App\Http\Controllers\FeedbackSurveiDosenController;
use App\Http\Controllers\FeedbackSurveiMahasiswaController;
use App\Http\Controllers\FeedbackSurveiMitraController;
use App\Http\Controllers\FeedbackSurveiPenggunaLulusanController;
use App\Http\Controllers\FeedbackSurveiTendikController;
use App\Http\Controllers\SurveiKepuasanMahasiswaController;
use App\Http\Controllers\SurveiKepuasanDosenController;
use App\Http\Controllers\SurveiKepuasanMitraController;
use App\Http\Controllers\SurveiKepuasanPenggunaLulusanController;
use App\Http\Controllers\SurveiKepuasanTendikController;
use App\Http\Controllers\TanggapanTendikController;
use App\Http\Controllers\TanggapanPenggunaLulusanController;
use App\Http\Controllers\TanggapanMitraController;
use App\Http\Controllers\TanggapanMahasiswaController;
use App\Http\Controllers\TanggapanDosenController;
use App\Http\Controllers\HasilSurveiKepuasanDosenController;
use App\Http\Controllers\HasilSurveiKepuasanMahasiswaController;
use App\Http\Controllers\HasilSurveiKepuasanMitraController;
use App\Http\Controllers\HasilSurveiKepuasanPenggunaLulusanController;
use App\Http\Controllers\HasilSurveiKepuasanTendikController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route dashboard and authentication
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/login', [AuthenticationController::class, 'login'])->middleware('guest')->name('login');
Route::middleware(['auth:mahasiswa,dosen,tendik,tpmf,dekan,wadek,gpm,kaprodi'])->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});

// Route change roled based on jabatan dosen
Route::post('/changeRole', [AuthenticationController::class, 'changeRole'])->name('changeRole');
Route::post('/backDosen', [AuthenticationController::class, 'switchToDosen'])->name('backDosen');

// Route survei kepuasan
Route::get('/surveiMhs', [SurveiKepuasanMahasiswaController::class, 'create'])->middleware('auth:mahasiswa', 'checkRole:mahasiswa');
Route::post('/surveiMhs', [SurveiKepuasanMahasiswaController::class, 'store'])->middleware('auth:mahasiswa', 'checkRole:mahasiswa');
Route::get('/surveiDsn', [SurveiKepuasanDosenController::class, 'create'])->middleware('auth:dosen', 'checkRole:dosen');
Route::post('/surveiDsn', [SurveiKepuasanDosenController::class, 'store'])->middleware('auth:dosen', 'checkRole:dosen');
Route::get('/surveiTendik', [SurveiKepuasanTendikController::class, 'create'])->middleware('auth:tendik', 'checkRole:tendik');
Route::post('/surveiTendik', [SurveiKepuasanTendikController::class, 'store'])->middleware('auth:tendik', 'checkRole:tendik');
Route::get('/surveiMitra', [SurveiKepuasanMitraController::class, 'create'])->middleware('redirectAuthenticatedUsers');
Route::post('/surveiMitra', [SurveiKepuasanMitraController::class, 'store'])->middleware('redirectAuthenticatedUsers');
Route::get('/surveiPenggunaLulusan', [SurveiKepuasanPenggunaLulusanController::class, 'create'])->middleware('redirectAuthenticatedUsers');
Route::post('/surveiPenggunaLulusan', [SurveiKepuasanPenggunaLulusanController::class, 'store'])->middleware('redirectAuthenticatedUsers');
Route::get('/get-mahasiswas', [SurveiKepuasanPenggunaLulusanController::class, 'getMahasiswas']);


// Route feedback survei
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-dosen', [FeedbackSurveiDosenController::class, 'indexFeedbackDosen'])->name('feedbackDosen');
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-mahasiswa', [FeedbackSurveiMahasiswaController::class, 'indexFeedbackMahasiswa'])->name('feedbackMahasiswa');
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-pengguna-lulusan', [FeedbackSurveiPenggunaLulusanController::class, 'indexFeedbackPenggunaLulusan'])->name('feedbackStakeHolder');
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-mitra', [FeedbackSurveiMitraController::class, 'indexFeedbackMitra'])->name('feedbackMitra');
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-tendik', [FeedbackSurveiTendikController::class, 'indexFeedbackTendik'])->name('feedbackTendik');

//Route filter feedback survei
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-dosen/filter', [FeedbackSurveiDosenController::class, 'filter']);
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-mahasiswa/filter', [FeedbackSurveiMahasiswaController::class, 'filter']);
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-pengguna-lulusan/filter', [FeedbackSurveiPenggunaLulusanController::class, 'filter']);
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-mitra/filter', [FeedbackSurveiMitraController::class, 'filter']);
Route::get('/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-tendik/filter', [FeedbackSurveiTendikController::class, 'filter']);


// Route hasil survey
Route::get('/hasildosen', [HasilSurveiKepuasanDosenController::class, 'show']);
Route::get('/hasilmahasiswa', [HasilSurveiKepuasanMahasiswaController::class, 'show']);
Route::get('/hasilmitra', [HasilSurveiKepuasanMitraController::class, 'show']);
Route::get('/hasiltendik', [HasilSurveiKepuasanTendikController::class, 'show']);
Route::get('/hasilpenggunalulusan', [HasilSurveiKepuasanPenggunaLulusanController::class, 'show']);

//Route cetak pdf hasil survey
Route::get('/hasildosen/cetak_pdf', [HasilSurveiKepuasanDosenController::class, 'cetak_pdf']);

//route cetak excel hasil survey
Route::get('/hasildosen/cetak_excel', [HasilSurveiKepuasanDosenController::class, 'cetak_excel']);

// Route filter hasil survey
Route::get('/hasildosen/filter', [HasilSurveiKepuasanDosenController::class, 'filter']);
Route::get('/hasilmahasiswa/filter', [HasilSurveiKepuasanMahasiswaController::class, 'Filter']);
Route::get('/hasilmitra/filter', [HasilSurveiKepuasanMitraController::class, 'filter']);
Route::get('/hasiltendik/filter', [HasilSurveiKepuasanTendikController::class, 'filter']);
Route::get('/hasilpenggunalulusan/filter', [HasilSurveiKepuasanPenggunaLulusanController::class, 'filter']);

Route::get('/forbidden', function () {
    return view('errors.403');
})->name('forbidden');

Route::get('/restricted', function () {
    return view('errors.restricted');
})->name('restricted');

Route::get('/tes', function () {
    return view('tes', []);
});

//Route tanggapan

Route::middleware(['auth:tpmf,dekan,wadek'])->group(function () {
    Route::get('/TanggapanTendik', [TanggapanTendikController::class, 'index']);
    Route::get('/FeedbackTendik', [TanggapanTendikController::class, 'create']);
    Route::post('/FeedbackTendik', [TanggapanTendikController::class, 'store']);
    Route::get('/TanggapanTendik/Edit/{aktor}', [TanggapanTendikController::class, 'edit'])->name('tanggapantendik.edit');
    Route::put('/TanggapanTendik/{aktor}', [TanggapanTendikController::class, 'update'])->name('tanggapantendik.update');

});

Route::middleware(['auth:tpmf,dekan,wadek'])->group(function () {
    Route::get('/TanggapanDosen', [TanggapanDosenController::class, 'index']);
    Route::get('/FeedbackDosen', [TanggapanDosenController::class, 'create']);
    Route::post('/FeedbackDosen', [TanggapanDosenController::class, 'store']);
    Route::get('/TanggapanDosen/Edit/{aktor}', [TanggapanDosenController::class, 'edit'])->name('tanggapandosen.edit');
    Route::put('/TanggapanDosen/{aktor}', [TanggapanDosenController::class, 'update'])->name('tanggapandosen.update');
});

Route::middleware(['auth:tpmf,dekan,wadek'])->group(function () {
    Route::get('/TanggapanMitra', [TanggapanMitraController::class, 'index']);
    Route::get('/FeedbackMitra', [TanggapanMitraController::class, 'create']);
    Route::post('/FeedbackMitra', [TanggapanMitraController::class, 'store']);
    Route::get('/TanggapanMitra/Edit/{aktor}', [TanggapanMitraController::class, 'edit'])->name('tanggapanmitra.edit');
    Route::put('/TanggapanMitra/{aktor}', [TanggapanMitraController::class, 'update'])->name('tanggapanmitra.update');
});

Route::middleware(['auth:gpm,dekan,wadek,kaprodi'])->group(function () {
    Route::get('/TanggapanMahasiswa', [TanggapanMahasiswaController::class, 'index']);
    Route::get('/FeedbackMahasiswa', [TanggapanMahasiswaController::class, 'create']);
    Route::post('/FeedbackMahasiswa', [TanggapanMahasiswaController::class, 'store']);
    Route::get('/TanggapanMahasiswa/Edit/{aktor}', [TanggapanMahasiswaController::class, 'edit'])->name('tanggapanmahasiswa.edit');
    Route::put('/TanggapanMahasiswa/{aktor}', [TanggapanMahasiswaController::class, 'update'])->name('tanggapanmahasiswa.update');
    
});

Route::middleware(['auth:gpm,dekan,wadek,kaprodi'])->group(function () {
    Route::get('/TanggapanPenggunaLulusan', [TanggapanPenggunaLulusanController::class, 'index']);
    Route::get('/FeedbackPenggunaLulusan', [TanggapanPenggunaLulusanController::class, 'create']);
    Route::post('/FeedbackPenggunaLulusan', [TanggapanPenggunaLulusanController::class, 'store']);
    Route::get('/TanggapanPenggunaLulusan/Edit/{aktor}', [TanggapanPenggunaLulusanController::class, 'edit'])->name('tanggapanpenggunalulusan.edit');
    Route::put('/TanggapanPenggunaLulusan/{aktor}', [TanggapanPenggunaLulusanController::class, 'update'])->name('tanggapanpenggunalulusan.update');


});

// Export excel
Route::get('/export-excell', [HasilSurveiKepuasanDosenController::class, 'tes']);


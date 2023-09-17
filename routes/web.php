<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SurveiKepuasanMahasiswaController;
use App\Http\Controllers\SurveiKepuasanDosenController;
use App\Http\Controllers\SurveiKepuasanMitraController;
use App\Http\Controllers\SurveiKepuasanPenggunaLulusanController;
use App\Http\Controllers\SurveiKepuasanTendikController;
use App\Http\Controllers\TanggapanTPMFTendikController;
use App\Http\Controllers\TanggapanGPMMitraController;
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

Route::get('/', function () {
    return view('index', []);
})->middleware('guest')->name('dashboard');


Route::post('/login', [AuthenticationController::class, 'login'])->middleware('guest')->name('login');

Route::middleware(['auth:mahasiswa,dosen'])->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});

Route::get('/surveiMhs', [SurveiKepuasanMahasiswaController::class, 'create'])->middleware('auth:mahasiswa', 'checkRole:mahasiswa');
Route::post('/surveiMhs', [SurveiKepuasanMahasiswaController::class, 'store'])->middleware('auth:mahasiswa', 'checkRole:mahasiswa');
Route::get('/surveiDsn', [SurveiKepuasanDosenController::class, 'create'])->middleware('auth:dosen', 'checkRole:dosen');
Route::post('/surveiDsn', [SurveiKepuasanDosenController::class, 'store'])->middleware('auth:dosen', 'checkRole:dosen');
Route::get('/surveiMitra', [SurveiKepuasanMitraController::class, 'create']);
Route::post('/surveiMitra', [SurveiKepuasanMitraController::class, 'store']);
Route::get('/surveiPenggunaLulusan', [SurveiKepuasanPenggunaLulusanController::class, 'create']);
Route::post('/surveiPenggunaLulusan', [SurveiKepuasanPenggunaLulusanController::class, 'store']);
Route::get('/surveiTendik', [SurveiKepuasanTendikController::class, 'create']);
Route::post('/surveiTendik', [SurveiKepuasanTendikController::class, 'store']);

Route::get('/feedbackdosen', function () {
    return view('feedback_survei.feedback_dosen', []);
});
Route::get('/feedbackmahasiswa', function () {
    return view('feedback_survei.feedback_mahasiswa', []);
});
Route::get('/feedbackstakeholder', function () {
    return view('feedback_survei.feedback_stakeholder', []);
});
Route::get('/feedbackmitra', function () {
    return view('feedback_survei.feedback_mitra', []);
});
Route::get('/feedbacktendik', function () {
    return view('feedback_survei.feedback_tendik', []);
});

Route::get('/hasildosen', function () {
    return view('hasil_survei.hasil_survei_dosen', []);
});
Route::get('/hasilmahasiswa', function () {
    return view('hasil_survei.hasil_survei_mhs', []);
});
Route::get('/hasilstakeholder', function () {
    return view('hasil_survei.hasil_survei_pengguna_lulusan', []);
});
Route::get('/hasilmitra', function () {
    return view('hasil_survei.hasil_survei_mitra', []);
});
Route::get('/hasiltendik', function () {
    return view('hasil_survei.hasil_survei_tendik', []);
});

Route::get('/forbidden', function () {
    return view('errors.403');
})->name('forbidden');

Route::get('/tes', function () {
    return view('tes', []);
});

//route tanggapan
Route::get('/tanggapantendik', function () {
    return view('tanggapan.tanggapan_tendik', []);
});

Route::get('/tanggapandosen', function () {
    return view('tanggapan.tanggapan_dosen', []);
});

Route::get('/tanggapanmahasiswa', function () {
    return view('tanggapan.tanggapan_mahasiswa', []);
});

Route::get('/tanggapanmitra', function () {
    return view('tanggapan.tanggapan_mitra', []);
});

Route::get('/tanggapanpenggunalulusan', function () {
    return view('tanggapan.tanggapan_pengguna_lulusan', []);
});

//tanggapan tpmf
Route::get('/tanggapantpmftendik', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_tendik', []);
});
Route::get('/tanggapangpmmitra', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_mitra', []);
});

//tanggapan dekan
Route::get('/tanggapandekantendik', function () {
    return view('tanggapan.tanggapan_dekan.tanggapan_dekan_tendik', []);
});
Route::get('/tanggapandekanmitra', function () {
    return view('tanggapan.tanggapan_dekan.tanggapan_dekan_mitra', []);
});

//create tanggapan
Route::get('/TanggapanTPMFTendik', [TanggapanTPMFTendikController::class, 'create']);
Route::post('/TanggapanTPMFTendik', [TanggapanTPMFTendikController::class, 'store']);
Route::get('/TanggapanGPMMitra', [TanggapanGPMMitraController::class, 'create']);
Route::post('/TanggapanGPMMitra', [TanggapanGPMMitraController::class, 'store']);

<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SurveiKepuasanMahasiswaController;
use App\Http\Controllers\SurveiKepuasanDosenController;
use App\Http\Controllers\SurveiKepuasanMitraController;
use App\Http\Controllers\SurveiKepuasanPenggunaLulusanController;
use App\Http\Controllers\SurveiKepuasanTendikController;
use App\Http\Controllers\HasilSurveiKepuasanDosenController;
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

Route::middleware(['auth:mahasiswa,dosen,tendik'])->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});

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

// Route::get('/hasildosen', function () {
//     return view('hasil_survei.hasil_survei_dosen', [HasilSurveiKepuasanDosenController::class]);
// });
Route::get('/hasildosen', [HasilSurveiKepuasanDosenController::class, 'index'])->name('hasil_survei.hasil_survei_dosen');
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
Route::get('/restricted', function () {
    return view('errors.restricted');
})->name('restricted');

Route::get('/tes', function () {
    return view('tes', []);
});

<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SurveiKepuasaanController;
use App\Http\Controllers\SurveiKepuasanMahasiswaController;
use App\Http\Controllers\SurveiKepuasanDosenController;
use App\Http\Controllers\SurveiKepuasanMitraController;
use App\Http\Controllers\SurveiKepuasanPenggunaLulusanController;
use App\Http\Controllers\SurveiKepuasanTendikController;
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
})->name('dashboard');

Route::get('/surveiMhs', [SurveiKepuasaanController::class, 'create'])->middleware('auth:mahasiswa');
Route::post('/surveiMhs', [SurveiKepuasaanController::class, 'store'])->middleware('auth:mahasiswa');

Route::post('/login', [AuthenticationController::class, 'login'])->middleware('guest');
// Route::post('/logout', [AuthenticationController::class, 'logout']);

Route::middleware(['auth:mahasiswa,dosen'])->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});

Route::get('/surveiMhs', [SurveiKepuasanMahasiswaController::class, 'create']);
Route::post('/surveiMhs', [SurveiKepuasanMahasiswaController::class, 'store']);
Route::get('/surveiMitra', [SurveiKepuasanMitraController::class, 'create']);
Route::post('/surveiMitra', [SurveiKepuasanMitraController::class, 'store']);
Route::get('/surveiPenggunaLulusan', [SurveiKepuasanPenggunaLulusanController::class, 'create']);
Route::post('/surveiPenggunaLulusan', [SurveiKepuasanPenggunaLulusanController::class, 'store']);
Route::get('/surveiTendik', [SurveiKepuasanTendikController::class, 'create']);
Route::post('/surveiTendik', [SurveiKepuasanTendikController::class, 'store']);
Route::get('/surveiDsn', [SurveiKepuasanDosenController::class,'create']);
Route::post('/surveiDsn', [SurveiKepuasanDosenController::class, 'store']);

Route::get('/surveiDsn', function () {
    return view('survei.survei_dosen', []);
});
Route::get('/surveiTendik', function () {
    return view('survei.survei_tendik', []);
});
Route::get('/surveiMitra', function () {
    return view('survei.survei_mitra', []);
});
Route::get('/surveiPenggunaLulusan', function () {
    return view('survei.survei_pengguna_lulusan', []);
});
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

Route::get('/tes', function () {
    return view('tes', []);
});

// Route::get('/survei/surveiMhs', 'SurveiKepuasaanController@create')->name('survei.survei_mhs');

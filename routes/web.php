<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SurveiKepuasaanController;
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
});

Route::get('/surveiMhs', [SurveiKepuasaanController::class, 'create']);
Route::post('/surveiMhs', [SurveiKepuasaanController::class, 'store']);

// Route::get('/login', [AuthenticationController::class, 'index']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout']);


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

Route::get('/tes', function () {
    return view('tes', []);
});

// Route::get('/survei/surveiMhs', 'SurveiKepuasaanController@create')->name('survei.survei_mhs');


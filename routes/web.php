<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UpayaDosenController;
use App\Http\Controllers\UpayaMahasiswaController;
use App\Http\Controllers\UpayaTendikController;
use App\Http\Controllers\UpayaMitraController;
use App\Http\Controllers\UpayaPenggunaLulusanController;
use App\Http\Controllers\SurveiKepuasanMahasiswaController;
use App\Http\Controllers\SurveiKepuasanDosenController;
use App\Http\Controllers\SurveiKepuasanMitraController;
use App\Http\Controllers\SurveiKepuasanPenggunaLulusanController;
use App\Http\Controllers\SurveiKepuasanTendikController;
use App\Http\Controllers\TanggapanGPMMahasiswaController;
use App\Http\Controllers\TanggapanGPMPenggunaLulusanController;
use App\Http\Controllers\TanggapanTPMFTendikController;
use App\Http\Controllers\TanggapanTPMFMitraController;
use App\Http\Controllers\TanggapanTPMFDosenController;
use App\Http\Controllers\TanggapanTendikController;
use App\Http\Controllers\TanggapanPenggunaLulusanController;
use App\Http\Controllers\TanggapanMitraController;
use App\Http\Controllers\TanggapanMahasiswaController;
use App\Http\Controllers\TanggapanDosenController;
use App\Http\Controllers\HasilSurveiKepuasanDosenController;
use App\Http\Controllers\HasilSurveiKepuasanMahasiswaController;
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
Route::middleware(['auth:mahasiswa,dosen,tendik,tpmf,dekan,wadek,gpm'])->group(function () {
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

// Route upaya survei
Route::get('/upayadosen', [UpayaDosenController::class, 'show'])->name('upayadosen');;
Route::get('/upayamahasiswa', [UpayaMahasiswaController::class, 'show'])->name('upayamahasiswa');;
Route::get('/upayatendik', [UpayaTendikController::class, 'show'])->name('upayatendik');;
Route::get('/upayamitra', [UpayaMitraController::class, 'show'])->name('upayamitra');;
Route::get('/upayapenggunalulusan', [UpayaPenggunaLulusanController::class, 'show'])->name('upayapenggunalulusan');;

//hasil
Route::get('/hasildosen', [HasilSurveiKepuasanDosenController::class, 'show']);
Route::get('/hasilmahasiswa', [HasilSurveiKepuasanMahasiswaController::class, 'show']);
Route::get('/hasiltendik', [HasilSurveiKepuasanTendikController::class, 'show']);
// Route feedback survei
Route::get('/FeedbackDosen', [FeedbackSurveiController::class, 'indexFeedbackDosen'])->name('feedbackDosen');
Route::get('/FeedbackMahasiswa', [FeedbackSurveiController::class, 'indexFeedbackMahasiswa'])->name('feedbackMahasiswa');
Route::get('/FeedbackStakeHolder', [FeedbackSurveiController::class, 'indexFeedbackPenggunaLulusan'])->name('feedbackStakeHolder');
Route::get('/FeedbackMitra', [FeedbackSurveiController::class, 'indexFeedbackMitra'])->name('feedbackMitra');
Route::get('/FeedbackTendik', [FeedbackSurveiController::class, 'indexFeedbackTendik'])->name('feedbackTendik');

// Route::get('/hasildosen', function () {
//     return view('hasil_survei.hasil_survei_dosen', [HasilSurveiKepuasanDosenController::class]);
// });
Route::get('/hasildosen', [HasilSurveiKepuasanDosenController::class, 'show']);
Route::get('/hasilmahasiswa', [HasilSurveiKepuasanMahasiswaController::class, 'show']);
Route::get('/hasiltendik', [HasilSurveiKepuasanTendikController::class, 'show']);
Route::get('/hasilstakeholder', function () {
    return view('hasil_survei.hasil_survei_pengguna_lulusan', []);
});
Route::get('/hasilmitra', function () {
    return view('hasil_survei.hasil_survei_mitra', []);
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

//Route tanggapan
Route::get('/tanggapantendik', [TanggapanTendikController::class, 'show']);
Route::get('/tanggapandosen', [TanggapanDosenController::class, 'show']);
Route::get('/tanggapanmahasiswa', [TanggapanMahasiswaController::class, 'show']);
Route::get('/tanggapanmitra', [TanggapanMitraController::class, 'show']);
Route::get('/tanggapanpenggunalulusan', [TanggapanPenggunaLulusanController::class, 'show']);

//tanggapan tpmf
Route::get('/tanggapantpmftendik', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_tendik', []);
});
Route::get('/tanggapantpmfmitra', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_mitra', []);
});
Route::get('/tanggapantpmfdosen', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_dosen', []);
});
Route::get('/tanggapangpmmahasiswa', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_mahasiswa', []);
});
Route::get('/tanggapangpmpenggunalulusan', function () {
    return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_pengguna_lulusan', []);
});

//create tanggapan TPMF
Route::get('/TanggapanTPMFTendik', [TanggapanTPMFTendikController::class, 'create']);
Route::post('/TanggapanTPMFTendik', [TanggapanTPMFTendikController::class, 'store']);
Route::get('/TanggapanTPMFMitra', [TanggapanTPMFMitraController::class, 'create']);
Route::post('/TanggapanTPMFMitra', [TanggapanTPMFMitraController::class, 'store']);
Route::get('/TanggapanTPMFDosen', [TanggapanTPMFDosenController::class, 'create']);
Route::post('/TanggapanTPMFDosen', [TanggapanTPMFDosenController::class, 'store']);
Route::get('/TanggapanGPMMahasiswa', [TanggapanGPMMahasiswaController::class, 'create']);
Route::post('/TanggapanGPMMahasiswa', [TanggapanGPMMahasiswaController::class, 'store']);
Route::get('/TanggapanGPMPenggunaLulusan', [TanggapanGPMPenggunaLulusanController::class, 'create']);
Route::post('/TanggapanGPMPenggunaLulusan', [TanggapanGPMPenggunaLulusanController::class, 'store']);
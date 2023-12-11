<?php

namespace App\Http\Controllers;
use App\Models\pernyataan;
use App\Models\feedback_mahasiswa;

use Illuminate\Http\Request;

class FeedbackSurveiMahasiswaController extends Controller
{
    public function indexFeedbackMahasiswa(Request $request)
    {
        $tahun = $request->input('tahun');
        $pernyataan = pernyataan::where('status', 'pernyataan_mahasiswa')->first();
        $feedbackKaprodi = feedback_mahasiswa::whereYear('updated_at', $tahun)->where('aktor', 'Kaprodi')->latest()->first();
        $feedbackDekan = feedback_mahasiswa::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_mahasiswa::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackKaprodi) {
            $feedbackKaprodi = new feedback_mahasiswa();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mahasiswa();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_mahasiswa', [
            'feedbackKaprodi' => $feedbackKaprodi,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }
    public function Filter(Request $request)
    {
        $programStudi = $request->input('program_studi');
        if (stripos($programStudi, 'sarjana') !== false) {
            // Ganti "program studi sarjana" menjadi "departemen"
            $programStudi = str_ireplace('sarjana', 'Departemen', $programStudi);
        }
        // dd($programStudi);

        $tahun = $request->input('tahun');
        $pernyataan = pernyataan::where('status', 'pernyataan_mahasiswa')->first();
        $feedbackKaprodi = feedback_mahasiswa::whereYear('updated_at', $tahun)->where('aktor', 'Kaprodi')->where('status', 'LIKE', "%$programStudi%")->latest()->first();
        $feedbackDekan = feedback_mahasiswa::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->where('status', 'LIKE', "%$programStudi%")->latest()->first();
        $uniqueYears = feedback_mahasiswa::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackKaprodi) {
            $feedbackKaprodi = new feedback_mahasiswa();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mahasiswa();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_mahasiswa', [
            'feedbackKaprodi' => $feedbackKaprodi,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }
}

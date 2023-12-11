<?php

namespace App\Http\Controllers;

use App\Models\pernyataan;
use App\Models\feedback_stakeholder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class FeedbackSurveiPenggunaLulusanController extends Controller
{
    public function indexFeedbackPenggunaLulusan(Request $request)
    {
        $tahun = $request->input('tahun');
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        $feedbackKaprodi = feedback_stakeholder::whereYear('updated_at', $tahun)->where('aktor', 'Kaprodi')->latest()->first();
        $feedbackDekan = feedback_stakeholder::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_stakeholder::selectRaw('YEAR(updated_at) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');
        if (!$feedbackKaprodi) {
            $feedbackKaprodi = new feedback_stakeholder();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_stakeholder();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_pengguna_lulusan', [
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
        $tahun = $request->input('tahun');
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        $feedbackKaprodi = feedback_stakeholder::whereYear('updated_at', $tahun)->where('aktor', 'Kaprodi')->where('status', 'LIKE', "%$programStudi%")->latest()->first();
        $feedbackDekan = feedback_stakeholder::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->where('status', 'LIKE', "%$programStudi%")->latest()->first();
        $uniqueYears = feedback_stakeholder::selectRaw('YEAR(updated_at) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');
        if (!$feedbackKaprodi) {
            $feedbackKaprodi = new feedback_stakeholder();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_stakeholder();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_pengguna_lulusan', [
            'feedbackKaprodi' => $feedbackKaprodi,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }
}

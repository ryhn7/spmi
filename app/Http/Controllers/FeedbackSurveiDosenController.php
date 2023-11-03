<?php

namespace App\Http\Controllers;
use App\Models\pernyataan;
use App\Models\feedback_dosen;

use Illuminate\Http\Request;

class FeedbackSurveiDosenController extends Controller
{
    //
    public function indexFeedbackDosen()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_dosen')->first();
        $feedbackTpmf = feedback_dosen::where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_dosen::where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_dosen::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_dosen();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_dosen();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_dosen', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }

    public function Filter(Request $request)
    {
        $tahun = $request->input('tahun');
        $pernyataan = pernyataan::where('status', 'pernyataan_dosen')->first();
        $feedbackTpmf = feedback_dosen::whereYear('updated_at', $tahun)->where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_dosen::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_dosen::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_dosen();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_dosen();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_dosen', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }
}

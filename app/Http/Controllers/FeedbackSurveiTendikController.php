<?php

namespace App\Http\Controllers;
use App\Models\pernyataan;
use App\Models\feedback_tendik;
use Illuminate\Http\Request;

class FeedbackSurveiTendikController extends Controller
{
    //
    public function indexFeedbackTendik()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_tendik')->first();
        $feedbackTpmf = feedback_tendik::where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_tendik::where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_tendik::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_tendik();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_tendik();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_tendik',[
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
        $feedbackTpmf = feedback_tendik::whereYear('updated_at', $tahun)->where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_tendik::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_tendik::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_tendik();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_tendik();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_tendik', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }
}

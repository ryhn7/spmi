<?php

namespace App\Http\Controllers;
use App\Models\pernyataan;
use App\Models\feedback_mitra;
use Illuminate\Http\Request;

class FeedbackSurveiMitraController extends Controller
{
    //
    public function indexFeedbackMitra()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        $feedbackTpmf = feedback_mitra::where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_mitra::where('aktor', 'Dekan')->latest()->first();
        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_mitra();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mitra();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_mitra', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
        ]);
    }
    public function Filter(Request $request)
    {
        $tahun = $request->input('tahun');
        $pernyataan = pernyataan::where('status', 'pernyataan_dosen')->first();
        $feedbackTpmf = feedback_mitra::whereYear('updated_at', $tahun)->where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_mitra::whereYear('updated_at', $tahun)->where('aktor', 'Dekan')->latest()->first();
        $uniqueYears = feedback_mitra::selectRaw('YEAR(updated_at) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_mitra();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mitra();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_mitra', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'uniqueYears' => $uniqueYears
        ]);
    }
}

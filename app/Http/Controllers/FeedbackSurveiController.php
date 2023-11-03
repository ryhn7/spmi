<?php

namespace App\Http\Controllers;

use App\Models\pernyataan;
use App\Models\feedback_dosen;
use App\Models\feedback_tendik;
use App\Models\feedback_mitra;
use Illuminate\Http\Request;

class FeedbackSurveiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function indexFeedbackMahasiswa()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mahasiswa')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_mahasiswa', compact('pernyataan'));
    }
    public function indexFeedbackTendik()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_tendik')->first();
        $feedbackTpmf = feedback_tendik::where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_tendik::where('aktor', 'Dekan')->latest()->first();
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
        ]);
    }
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
    public function indexFeedbackPenggunaLulusan()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_pengguna_lulusan', compact('pernyataan'));
    }
}

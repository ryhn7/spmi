<?php

namespace App\Http\Controllers;
use App\Models\pernyataan;
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
        $feedback = pernyataan::where('status', 'pernyataan_dosen')->first();
        if (!$feedback) {
            $feedback = new pernyataan();
        }
        return view('feedback_survei.feedback_dosen', compact('feedback'));
    }
    public function indexFeedbackMahasiswa()
    {
        $feedback = pernyataan::where('status', 'pernyataan_mahasiswa')->first();
        if (!$feedback) {
            $feedback = new pernyataan();
        }
        return view('feedback_survei.feedback_mahasiswa', compact('feedback'));
    }
    public function indexFeedbackTendik()
    {
        $feedback = pernyataan::where('status', 'pernyataan_tendik')->first();
        if (!$feedback) {
            $feedback = new pernyataan();
        }
        return view('feedback_survei.feedback_tendik', compact('feedback'));
    }
    public function indexFeedbackMitra()
    {
        $feedback = pernyataan::where('status', 'pernyataan_mitra')->first();
        if (!$feedback) {
            $feedback = new pernyataan();
        }
        return view('feedback_survei.feedback_mitra', compact('feedback'));
    }
    public function indexFeedbackPenggunaLulusan()
    {
        $feedback = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$feedback) {
            $feedback = new pernyataan();
        }
        return view('feedback_survei.feedback_pengguna_lulusan', compact('feedback'));
    }
}
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
        $pernyataan = pernyataan::where('status', 'pernyataan_dosen')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_dosen', compact('pernyataan'));
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
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_tendik', compact('pernyataan'));
    }
    public function indexFeedbackMitra()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('feedback_survei.feedback_mitra', compact('pernyataan'));
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
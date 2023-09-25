<?php

namespace App\Http\Controllers;

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
        return view('feedback_survei.feedback_dosen');
    }
    public function indexFeedbackMahasiswa()
    {
        return view('feedback_survei.feedback_mahasiswa');
    }
    public function indexFeedbackTendik()
    {
        return view('feedback_survei.feedback_tendik');
    }
    public function indexFeedbackMitra()
    {
        return view('feedback_survei.feedback_mitra');
    }
    public function indexFeedbackPenggunaLulusan()
    {
        return view('feedback_survei.feedback_pengguna_lulusan');
    }

}
<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class UpayaDosenController extends Controller
{
    //
    public function create()
    {
        return view('feedback_survei.feedback_dosen');
    }

    public function show()
    {
        $feedback = pertanyaan::where('status', 'pernyataan_dosen')->first();


        if (!$feedback) {
            $feedback = new pertanyaan();
        }

        return view('feedback_survei.feedback_dosen', compact('feedback'));
    }
}

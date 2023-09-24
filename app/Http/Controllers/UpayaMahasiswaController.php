<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class UpayaMahasiswaController extends Controller
{
    //
    public function create()
    {
        return view('feedback_survei.feedback_mahasiswa');
    }

    public function show()
    {
        $feedback = pertanyaan::where('status', 'pernyataan_mahasiswa')->first();


        if (!$feedback) {
            $feedback = new pertanyaan();
        }

        return view('feedback_survei.feedback_mahasiswa', compact('feedback'));
    }
}

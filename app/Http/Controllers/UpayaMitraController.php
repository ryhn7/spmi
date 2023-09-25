<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class UpayaMitraController extends Controller
{
    //
    public function create()
    {
        return view('feedback_survei.feedback_mitra');
    }

    public function show()
    {
        $feedback = pertanyaan::where('status', 'pernyataan_mitra')->first();


        if (!$feedback) {
            $feedback = new pertanyaan();
        }

        return view('feedback_survei.feedback_mitra', compact('feedback'));
    }
}

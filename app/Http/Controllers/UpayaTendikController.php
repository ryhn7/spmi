<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class UpayaTendikController extends Controller
{
    //
    public function create()
    {
        return view('feedback_survei.feedback_tendik');
    }

    public function show()
    {
        $feedback = pertanyaan::where('status', 'pernyataan_tendik')->first();


        if (!$feedback) {
            $feedback = new pertanyaan();
        }

        return view('feedback_survei.feedback_tendik', compact('feedback'));
    }
}

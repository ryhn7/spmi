<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class UpayaPenggunaLulusanController extends Controller
{
    //
    public function create()
    {
        return view('feedback_survei.feedback_pengguna_lulusan');
    }

    public function show()
    {
        $feedback = pertanyaan::where('status', 'pernyataan_pengguna_lulusan')->first();


        if (!$feedback) {
            $feedback = new pertanyaan();
        }

        return view('feedback_survei.feedback_pengguna_lulusan', compact('feedback'));
    }
}

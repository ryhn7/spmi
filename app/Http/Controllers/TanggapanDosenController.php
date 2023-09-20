<?php

namespace App\Http\Controllers;
use App\Models\feedback_dosen;
use Illuminate\Http\Request;

class TanggapanDosenController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_dosen');
    }

    public function show()
    {
        $feedback = feedback_dosen::where('aktor', 'TPMF')->first();


        if (!$feedback) {
            $feedback = new feedback_dosen();
        }

        return view('tanggapan.tanggapan_dosen', compact('feedback'));
    }
}

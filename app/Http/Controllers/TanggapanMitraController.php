<?php

namespace App\Http\Controllers;
use App\Models\feedback_mitra;
use Illuminate\Http\Request;

class TanggapanMitraController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_mitra');
    }

    public function show()
    {
        $feedback = feedback_mitra::where('aktor', 'TPMF')->first();


        if (!$feedback) {
            $feedback = new feedback_mitra();
        }

        return view('tanggapan.tanggapan_mitra', compact('feedback'));
    }
}

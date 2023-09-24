<?php

namespace App\Http\Controllers;
use App\Models\feedback_tendik;
use Illuminate\Http\Request;

class TanggapanTendikController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_tendik');
    }

    public function show()
    {
        $feedback = feedback_tendik::where('aktor', 'TPMF')->first();


        if (!$feedback) {
            $feedback = new feedback_tendik();
        }

        return view('tanggapan.tanggapan_tendik', compact('feedback'));
    }
}

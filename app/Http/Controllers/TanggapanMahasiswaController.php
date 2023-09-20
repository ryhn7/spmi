<?php

namespace App\Http\Controllers;
use App\Models\feedback_mahasiswa;
use Illuminate\Http\Request;

class TanggapanMahasiswaController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_mahasiswa');
    }

    public function show()
    {
        $feedback = feedback_mahasiswa::where('aktor', 'GPM')->first();


        if (!$feedback) {
            $feedback = new feedback_mahasiswa();
        }

        return view('tanggapan.tanggapan_mahasiswa', compact('feedback'));
    }
}

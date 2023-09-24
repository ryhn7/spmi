<?php

namespace App\Http\Controllers;
use App\Models\feedback_mitra;
use Illuminate\Http\Request;

class TanggapanTPMFMitraController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_mitra');
    }

    public function store(Request $request)
    {

        $tanggapan = [
            'Aktor' => "TPMF",
            '1' => $request->satu,
            '2' => $request->dua,
            '3' => $request->tiga,
            '4' => $request->empat,
            '5' => $request->lima,
            '6' => $request->enam,
            '7' => $request->tujuh,
            '8' => $request->delapan,
            '9' => $request->sembilan,
            '10' =>$request->sepuluh
        ];

        // $question_one = $request->satu;

        // dd($tes);

        // kepuasan_mahasiswa::create($validated);
        feedback_mitra::create($tanggapan);

        return redirect('/')->with('success', 'berhasil save');
    }
}

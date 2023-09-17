<?php

namespace App\Http\Controllers;
use App\Models\feedback_tendik;
use Illuminate\Http\Request;

class TanggapanTPMFTendikController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_tendik');
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
            '10' =>$request->sepuluh,
            '11' =>$request->sebelas,
            '12' =>$request->dua_belas
        ];

        // $question_one = $request->satu;

        // dd($tes);

        // kepuasan_mahasiswa::create($validated);
        feedback_tendik::create($tanggapan);

        return redirect('/')->with('success', 'berhasil save');
    }
}

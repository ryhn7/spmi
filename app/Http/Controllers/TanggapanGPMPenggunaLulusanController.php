<?php

namespace App\Http\Controllers;
use App\Models\feedback_stakeholder;
use Illuminate\Http\Request;

class TanggapanGPMPenggunaLulusanController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_mahasiswa');
    }

    public function store(Request $request)
    {

        $tanggapan = [
            'Aktor' => "GPM",
            '1' => $request->satu,
            '2' => $request->dua,
            '3' => $request->tiga,
            '4' => $request->empat,
            '5' => $request->lima,
            '6' => $request->enam,
            '7' => $request->tujuh,
            '8' => $request->delapan,
            '9' => $request->sembilan
        ];
        
        feedback_stakeholder::create($tanggapan);

        return redirect('/')->with('success', 'berhasil save');
    }
}

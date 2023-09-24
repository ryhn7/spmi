<?php

namespace App\Http\Controllers;

use App\Models\feedback_tendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TanggapanTendikController extends Controller
{
    public function index()
    {
        $feedbackTpmf = feedback_tendik::where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_tendik::where('aktor', 'Dekan')->latest()->first();

        return view('tanggapan.tanggapan_tendik', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan
        ]);
    }

    public function create()
    {
        return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_tendik');
    }

    public function store(Request $request)
    {
        if (Auth::guard('tpmf')->check()) {
            $aktor = "TPMF";
        } else if (Auth::guard('dekan')->check()) {
            $aktor = "Dekan";
        }

        $tanggapan = [
            'Aktor' => $aktor,
            '1' => $request->satu,
            '2' => $request->dua,
            '3' => $request->tiga,
            '4' => $request->empat,
            '5' => $request->lima,
            '6' => $request->enam,
            '7' => $request->tujuh,
            '8' => $request->delapan,
            '9' => $request->sembilan,
            '10' => $request->sepuluh,
            '11' => $request->sebelas,
            '12' => $request->dua_belas
        ];

        // dd($tanggapan);
        feedback_tendik::create($tanggapan);

        return redirect('/TanggapanTendik')->with('success', 'berhasil save');
    }
}
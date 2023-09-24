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

        $validated = $request->validate([
            'satu' => 'required|string',
            "dua" => "required|string",
            "tiga" => "required|string",
            "empat" => "required|string",
            "lima" => "required|string",
            "enam" => "required|string",
            "tujuh" => "required|string",
            "delapan" => "required|string",
            "sembilan" => "required|string",
            "sepuluh" => "required|string",
            "sebelas" => "required|string",
            "dua_belas" => "required|string",
        ]);

        $tanggapan = [
            'Aktor' => $aktor,
            '1' => $validated['satu'],
            '2' => $validated['dua'],
            '3' => $validated['tiga'],
            '4' => $validated['empat'],
            '5' => $validated['lima'],
            '6' => $validated['enam'],
            '7' => $validated['tujuh'],
            '8' => $validated['delapan'],
            '9' => $validated['sembilan'],
            '10' => $validated['sepuluh'],
            '11' => $validated['sebelas'],
            '12' => $validated['dua_belas'],
        ];

        // dd($tanggapan);
        feedback_tendik::create($tanggapan);

        return redirect('/TanggapanTendik')->with('success', 'berhasil save');
    }
}
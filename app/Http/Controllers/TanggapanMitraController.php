<?php

namespace App\Http\Controllers;

use App\Models\pernyataan;
use App\Models\feedback_mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TanggapanMitraController extends Controller
{
    public function index()
    {
        $feedbackTpmf = feedback_mitra::where('aktor', 'TPMF')->latest()->first();
        $feedbackDekan = feedback_mitra::where('aktor', 'Dekan')->latest()->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_mitra();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mitra();
        }

        return view('tanggapan.tanggapan_mitra', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf.tanggapan_tpmf_mitra',[
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('tpmf')->check()) {
            $aktor = "TPMF";
        } else if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
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
        ];

        // dd($tanggapan);
        feedback_mitra::create($tanggapan);

        return redirect('/TanggapanMitra')->with('success', 'berhasil save');
    }

}
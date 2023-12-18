<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_mitra_kerjasama;
use Carbon\Carbon;
use App\Models\pernyataan;
use Illuminate\Http\Request;

class SurveiKepuasanMitraController extends Controller
{
    //
    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('survei.survei_mitra', [
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        $date = Carbon::now();
        $validated = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'nama_perusahaan' => 'required|string',
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

        $mitra = [
            'nama' => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'nama_perusahaan' => $validated['nama_perusahaan'],
            'date_time' => $date,
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

        kepuasan_mitra_kerjasama::create($mitra);

        return redirect('/')->with('success', 'Survey berhasil disimpan');
    }
}
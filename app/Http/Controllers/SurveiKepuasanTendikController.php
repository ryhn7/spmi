<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_tendik;
use Carbon\Carbon;
use App\Models\pernyataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SurveiKepuasanTendikController extends Controller
{
    public function create()
    {
        $surveiTendik = kepuasan_tendik::whereYear('date_time', Carbon::now()->year)->where('NIP', Auth::guard('tendik')->user()->NIP_pegawai)->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_tendik')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('survei.survei_tendik', [
            'surveys' => $surveiTendik,
            'pernyataan' => $pernyataan,
        ]);
    }


    public function store(Request $request)
    {
        $namaTendik = Auth::guard('tendik')->user()->nama_pegawai;
        $nip = Auth::guard('tendik')->user()->NIP_pegawai;
        $date = Carbon::now();

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


        $tendik = [
            'nama' => $namaTendik,
            'NIP' => $nip,
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
            '11' => $validated['sebelas'],
            '12' => $validated['dua_belas'],
        ];

        // dd($tendik);

        kepuasan_tendik::create($tendik);

        return redirect('/')->with('success', 'berhasil save');
    }
}

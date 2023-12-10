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
        $today = Carbon::now();

        if ($today->month == 12 && $today->day >= 1) {
            // After 1 December, set the period for the next year
            $past = Carbon::create($today->year, 12, 1)->toDateString(); // 1 December of the current year
            $current = Carbon::create($today->year + 1, 12, 1)->toDateString(); // 1 December of the next year
            // dd($past, $current);
        } else {
            // Before 1 December, set the period for the current year
            $past = Carbon::create($today->year - 1, 12, 1)->toDateString(); // 1 December of the previous year
            $current = Carbon::create($today->year, 12, 1)->toDateString(); // 1 December of the current year
            // dd($past, $current);
        }

        $surveiTendik = kepuasan_tendik::whereBetween('created_at', [$past, $current])->where('NIP', Auth::guard('tendik')->user()->user_admin)->first();
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
        $namaTendik = Auth::guard('tendik')->user()->nama_admin;
        $nip = Auth::guard('tendik')->user()->user_admin;
        $lokasi = Auth::guard('tendik')->user()->lokasi;
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
            'lokasi' => $lokasi,
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
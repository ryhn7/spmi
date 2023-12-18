<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\pernyataan;
use Illuminate\Support\Facades\Auth;


class SurveiKepuasanDosenController extends Controller
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

        $surveiDsn = kepuasan_dosen::whereBetween('created_at', [$past, $current])->where('NIP', Auth::guard('dosen')->user()->NIP_dosen)->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_dosen')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('survei.survei_dosen', [
            'surveys' => $surveiDsn,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        $namaDsn = Auth::guard('dosen')->user()->nama_dosen;
        $nip = Auth::guard('dosen')->user()->NIP_dosen;
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
            "tiga_belas" => "required|string",
            "empat_belas" => "required|string",
            "lima_belas" => "required|string",
            "enam_belas" => "required|string",
            "tujuh_belas" => "required|string",
            "delapan_belas" => "required|string",
            "sembilan_belas" => "required|string",
            "dua_puluh" => "required|string",
            "dua_satu" => "required|string",
            "dua_dua" => "required|string",
            "dua_tiga" => "required|string",
            "dua_empat" => "required|string",
            "dua_lima" => "required|string",
            "dua_enam" => "required|string",
            "dua_tujuh" => "required|string",
            "dua_delapan" => "required|string",
            "dua_sembilan" => "required|string",
            "tiga_puluh" => "required|string",
            "tiga_satu" => "required|string",
            "tiga_dua" => "required|string",
            "tiga_tiga" => "required|string",
            "tiga_empat" => "required|string",
            "tiga_lima" => "required|string",
            "tiga_enam" => "required|string",
            "tiga_tujuh" => "required|string",
            "tiga_delapan" => "required|string",
            "tiga_sembilan" => "required|string",
            "empat_puluh" => "required|string",
            "empat_satu" => "required|string",
            "empat_dua" => "required|string",
        ]);


        $dosen = [
            'nama_dosen' => $namaDsn,
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
            '13' => $validated['tiga_belas'],
            '14' => $validated['empat_belas'],
            '15' => $validated['lima_belas'],
            '16' => $validated['enam_belas'],
            '17' => $validated['tujuh_belas'],
            '18' => $validated['delapan_belas'],
            '19' => $validated['sembilan_belas'],
            '20' => $validated['dua_puluh'],
            '21' => $validated['dua_satu'],
            '22' => $validated['dua_dua'],
            '23' => $validated['dua_tiga'],
            '24' => $validated['dua_empat'],
            '25' => $validated['dua_lima'],
            '26' => $validated['dua_enam'],
            '27' => $validated['dua_tujuh'],
            '28' => $validated['dua_delapan'],
            '29' => $validated['dua_sembilan'],
            '30' => $validated['tiga_puluh'],
            '31' => $validated['tiga_satu'],
            '32' => $validated['tiga_dua'],
            '33' => $validated['tiga_tiga'],
            '34' => $validated['tiga_empat'],
            '35' => $validated['tiga_lima'],
            '36' => $validated['tiga_enam'],
            '37' => $validated['tiga_tujuh'],
            '38' => $validated['tiga_delapan'],
            '39' => $validated['tiga_sembilan'],
            '40' => $validated['empat_puluh'],
            '41' => $validated['empat_satu'],
            '42' => $validated['empat_dua'],
        ];

        // dd($dosen);

        kepuasan_dosen::create($dosen);

        return redirect('/')->with('success', 'Survey berhasil disimpan');
    }
}
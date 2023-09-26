<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_pengguna_lulusan;
use App\Models\Mahasiswa;
use App\Models\pertanyaan;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class SurveiKepuasanPenggunaLulusanController extends Controller
{
    //
    public function create()
    {
        $pertanyaan = pertanyaan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$pertanyaan) {
            $pertanyaan = new pertanyaan();
        }

        return view('survei.survei_pengguna_lulusan', [
            'mahasiswas' => Mahasiswa::where('lulus', '!=', '0000-00-00')->get(),
            'pertanyaan' => $pertanyaan,
        ]);
    }


    public function store(Request $request)
    {
        $date = Carbon::now();
        $validated = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'nama_perusahaan' => 'required|string',
            'alumni' => 'required|string',
            'satu' => 'required|string',
            "dua" => "required|string",
            "tiga" => "required|string",
            "empat" => "required|string",
            "lima" => "required|string",
            "enam" => "required|string",
            "tujuh" => "required|string",
            "delapan" => "required|string",
            "sembilan" => "required|string",
        ]);

        $alumni = [
            'nama' => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'nama_perusahaan' => $validated['nama_perusahaan'],
            'alumni' => $validated['alumni'],
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
        ];

        kepuasan_pengguna_lulusan::create($alumni);

        return redirect('/')->with('success', 'berhasil save');
    }
}
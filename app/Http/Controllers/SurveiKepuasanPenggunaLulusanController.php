<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_pengguna_lulusan;
use App\Models\Mahasiswa;
use App\Models\pernyataan;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class SurveiKepuasanPenggunaLulusanController extends Controller
{
    //
    public function create(Request $request)
    {
        $pernyataan = Pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$pernyataan) {
            $pernyataan = new Pernyataan();
        }

        $programStudi = $request->input('program_studi');
        $mahasiswaQuery = Mahasiswa::where('lulus', '!=', '0000-00-00');
        if ($programStudi) {
            $mahasiswaQuery->where('program_studi', $programStudi);
        }
        $mahasiswas = $mahasiswaQuery->get();

        // //create variable for each mahasiswas to get all nama_mahasiswa
        // $nama_mahasiswa = [];
        // foreach ($mahasiswas as $mahasiswa) {
        //     $nama_mahasiswas[] = $mahasiswa->nama_mahasiswa;
        // }
        $nama_mahasiswas = $mahasiswas->pluck('nama_mahasiswa');

        return view('survei.survei_pengguna_lulusan', [
            'mahasiswas' => $mahasiswas,
            'pernyataan' => $pernyataan,
            'namamahasiswas' => $nama_mahasiswas,
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
            'program_studi' => 'required|string',
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
            'program_studi' => $validated['program_studi'],
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
    public function getMahasiswas(Request $request)
    {
        $programStudi = $request->input('program_studi');
        $mahasiswas = Mahasiswa::where('lulus', '!=', '0000-00-00')
            ->where('program_studi', $programStudi)
            ->orderBy('nama_mahasiswa', 'asc') 
            ->pluck('nama_mahasiswa');
        return response()->json($mahasiswas);
    }
}
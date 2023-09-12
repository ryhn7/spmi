<?php

namespace App\Http\Controllers;
use App\Models\kepuasan_mitra_kerjasama;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SurveiKepuasanMitraController extends Controller
{
    //
    public function create()
    {
        return view('survei.survei_mitra');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nama_mahasiswa' => 'required|max:25',
        //     'NIM' => 'required|numeric',
        //     'program_studi' => 'required|numeric',
        // ]);

        // $name = $request->nama_mhs;
        // $nim = "240";
        // $prodi = "Informatics Engineering";

        $tes = [
            'nama' => "OKe",
            'jabatan' => "OKe",
            'nama_perusahaan' => "ABC",
            'date_time' => Carbon::now(),
            '1' => $request->satu,
            '2' => $request->dua,
            '3' => $request->tiga,
            '4' => $request->empat,
            '5' => $request->lima,
            '6' => $request->enam,
            '7' => $request->tujuh,
            '8' => $request->delapan,
            '9' => $request->sembilan,
            '10' => $request->sepuluh
        ];

        // $question_one = $request->satu;

        // dd($tes);

        // kepuasan_mahasiswa::create($validated);
        kepuasan_mitra_kerjasama::create($tes);

        return redirect('/')->with('success', 'berhasil save');
    }
}

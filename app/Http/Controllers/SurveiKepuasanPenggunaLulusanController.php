<?php

namespace App\Http\Controllers;
use App\Models\kepuasan_pengguna_lulusan;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class SurveiKepuasanPenggunaLulusanController extends Controller
{
    //
    public function create()
    {
        return view('survei.survei_pengguna_lulusan', [
            'mahasiswas' => Mahasiswa::where('lulus', '!=', '0000-00-00')->get(),
        ]);
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
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alumni' => $request->alumni,
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
        ];

        // $question_one = $request->satu;

        // dd($tes);

        // kepuasan_mahasiswa::create($validated);
        kepuasan_pengguna_lulusan::create($tes);

        return redirect('/')->with('success', 'berhasil save');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_mahasiswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SurveiKepuasanMahasiswaController extends Controller
{
    public function create()
    {
        return view('survei.survei_mhs');
    }

    // public function store(Request $request)
    // {
    //     $question = new kepuasan_mahasiswa();
    //     $question->nama_mahasiswa = $request->input('color1');
    //     // $question->option = $request->input('option');
    //     $question->save();

    //     return redirect('/questions')->with('success', 'Multiple-Choice Question created successfully.');
    // }

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
            'nama_mahasiswa' => "OKe",
            'NIM' => '240',
            'program_studi' => 'informatic',
            'date_time' => Carbon::now(),
            '1' => $request->tanya_satu,
            // create 2 - 45 
            '2' => 'oke',
            '3' => "oke",
            '4' => "oke",
            '5' => "oke",
            '6' => "oke",
            '7' => "oke",
            '8' => "oke",
            '9' => "oke",
            '10' => "oke",
            '11' => "oke",
            '12' => "oke",
            '13' => "oke",
            '14' => "oke",
            '15' => "oke",
            '16' => "oke",
            '17' => "oke",
            '18' => "oke",
            '19' => "oke",
            '20' => "oke",
            '21' => "oke",
            '22' => "oke",
            '23' => "oke",
            '24' => "oke",
            '25' => "oke",
            '26' => "oke",
            '27' => "oke",
            '28' => "oke",
            '29' => "oke",
            '30' => "oke",
            '31' => "oke",
            '32' => "oke",
            '33' => "oke",
            '34' => "oke",
            '35' => "oke",
            '36' => "oke",
            '37' => "oke",
            '38' => "oke",
            '39' => "oke",
            '40' => "oke",
            '41' => "oke",
            '42' => "oke",
            '43' => "oke",
            '44' => "oke",
            '45' => "oke",
        ];

        // $question_one = $request->satu;

        // dd($tes);

        // kepuasan_mahasiswa::create($validated);
        kepuasan_mahasiswa::create($tes);

        return redirect('/')->with('success', 'berhasil save');
    }
}

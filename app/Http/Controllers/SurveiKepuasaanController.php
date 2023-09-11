<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_mahasiswa;
use Illuminate\Http\Request;

class SurveiKepuasaanController extends Controller
{
    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $question = new kepuasan_mahasiswa();
        $question->nama_mahasiswa = $request->input('color1');
        // $question->option = $request->input('option');
        $question->save();

        return redirect('/questions')->with('success', 'Multiple-Choice Question created successfully.');
    }
}

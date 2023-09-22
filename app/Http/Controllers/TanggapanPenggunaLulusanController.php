<?php

namespace App\Http\Controllers;
use App\Models\feedback_stakeholder;
use Illuminate\Http\Request;

class TanggapanPenggunaLulusanController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_pengguna_lulusan');
    }

    public function show()
    {
        $feedback = feedback_stakeholder::where('aktor', 'GPM')->first();


        if (!$feedback) {
            $feedback = new feedback_stakeholder();
        }

        return view('tanggapan.tanggapan_pengguna_lulusan', compact('feedback'));
    }
}

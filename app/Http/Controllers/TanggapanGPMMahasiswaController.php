<?php

namespace App\Http\Controllers;
use App\Models\feedback_mahasiswa;
use Illuminate\Http\Request;

class TanggapanGPMMahasiswaController extends Controller
{
    //
    public function create()
    {
        return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_mahasiswa');
    }

    public function store(Request $request)
    {

        $tanggapan = [
            'Aktor' => "GPM",
            '1' => $request->satu,
            '2' => $request->dua,
            '3' => $request->tiga,
            '4' => $request->empat,
            '5' => $request->lima,
            '6' => $request->enam,
            '7' => $request->tujuh,
            '8' => $request->delapan,
            '9' => $request->sembilan,
            '10' =>$request->sepuluh,
            '11' => $request->sebelas,
            '12' => $request->dua_belas,
            '13' => $request->tiga_belas,
            '14' => $request->empat_belas,
            '15' => $request->lima_belas,
            '16' => $request->enam_belas,
            '17' => $request->tujuh_belas,
            '18' => $request->delapan_belas,
            '19' => $request->sembilan_belas,
            '20' => $request->dua_puluh,
            '21' => $request->dua_satu,
            '22' => $request->dua_dua,
            '23' => $request->dua_tiga,
            '24' => $request->dua_empat,
            '25' => $request->dua_lima,
            '26' => $request->dua_enam,
            '27' => $request->dua_tujuh,
            '28' => $request->dua_delapan,
            '29' => $request->dua_sembilan,
            '30' => $request->tiga_puluh,
            '31' => $request->tiga_satu,
            '32' => $request->tiga_dua,
            '33' => $request->tiga_tiga,
            '34' => $request->tiga_empat,
            '35' => $request->tiga_lima,
            '36' => $request->tiga_enam,
            '37' => $request->tiga_tujuh,
            '38' => $request->tiga_delapan,
            '39' => $request->tiga_sembilan,
            '40' => $request->empat_puluh,
            '41' => $request->empat_satu,
            '42' => $request->empat_dua,
            '43' => $request->empat_tiga,
            '44' => $request->empat_empat,
            '45' => $request->empat_lima
        ];

        // $question_one = $request->satu;

        // dd($tes);

        // kepuasan_mahasiswa::create($validated);
        feedback_mahasiswa::create($tanggapan);

        return redirect('/')->with('success', 'berhasil save');
    }
}

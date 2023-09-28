<?php

namespace App\Http\Controllers;
use App\Models\pernyataan;
use App\Models\feedback_stakeholder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TanggapanPenggunaLulusanController extends Controller
{
    public function index()
    {
        $feedbackgpm = feedback_stakeholder::where('aktor', 'GPM')->latest()->first();
        $feedbackDekan = feedback_stakeholder::where('aktor', 'Dekan')->latest()->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

        if (!$feedbackgpm) {
            $feedbackgpm = new feedback_stakeholder();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_stakeholder();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }


        return view('tanggapan.tanggapan_pengguna_lulusan', [
            'feedbackGpm' => $feedbackgpm,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_pengguna_lulusan',[
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('gpm')->check()) {
            $aktor = "GPM";
        } else if (Auth::guard('dekan')->check()) {
            $aktor = "Dekan";
        }

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
        ]);

        $tanggapan = [
            'Aktor' => $aktor,
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

        // dd($tanggapan);
        feedback_stakeholder::create($tanggapan);

        return redirect('/TanggapanPenggunaLulusan')->with('success', 'berhasil save');
    }

}
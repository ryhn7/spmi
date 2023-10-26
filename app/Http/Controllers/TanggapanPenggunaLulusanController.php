<?php

namespace App\Http\Controllers;


use App\Models\pernyataan;
use App\Models\feedback_stakeholder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanPenggunaLulusanController extends Controller
{
    public function index()
    {
        // Mendapatkan data tanggapan terbaru dari GPM dan Dekan
        $feedbackGpm = feedback_stakeholder::where('aktor', 'GPM')->latest()->first();
        $feedbackDekan = feedback_stakeholder::where('aktor', 'Dekan')->latest()->first();

        // Mendapatkan pernyataan yang diperlukan
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

        if (!$feedbackGpm) {
            $feedbackGpm = new feedback_stakeholder();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_stakeholder();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        return view('tanggapan.tanggapan_pengguna_lulusan', [
            'feedbackGpm' => $feedbackGpm,
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
        return view('tanggapan.tanggapan_tpmf_gpm.tanggapan_gpm_pengguna_lulusan', [
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        // Menentukan aktor berdasarkan user yang login
        if (Auth::guard('gpm')->check()) {
            $aktor = "GPM";
        } elseif (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            $aktor = "Dekan";
        } else {
            // Tambahkan penanganan kasus lain jika diperlukan
        }

        $validated = $request->validate([
            'satu' => 'required|string',
            'dua' => 'required|string',
            'tiga' => 'required|string',
            'empat' => 'required|string',
            'lima' => 'required|string',
            'enam' => 'required|string',
            'tujuh' => 'required|string',
            'delapan' => 'required|string',
            'sembilan' => 'required|string',
        ]);

        $tanggapan = [
            'aktor' => $aktor,
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

        feedback_stakeholder::create($tanggapan);

        return redirect('/TanggapanPenggunaLulusan')->with('success', 'Tanggapan berhasil disimpan');
    }

    public function edit($id)
    {
        $feedback = feedback_stakeholder::find($id);

        if (!$feedback) {
            return redirect('/TanggapanPenggunaLulusan')->with('error', 'Tanggapan tidak ditemukan');
        }

        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        return view('tanggapan.tanggapan_tpmf_gpm.edit_tanggapan_gpm_pengguna_lulusan', [
            'feedback' => $feedback,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function update(Request $request, feedback_stakeholder $id)
    {

        $rules = [
            'satu' => 'required',
            'dua' => 'required',
            'tiga' => 'required',
            'empat' => 'required',
            'lima' => 'required',
            'enam' => 'required',
            'tujuh' => 'required',
            'delapan' => 'required',
            'sembilan' => 'required',
        ];

        $validated = $request->validate($rules);

        // dd($validated);

        feedback_stakeholder::where('ID', $id->ID)
            ->update($validated);


        return redirect('/TanggapanPenggunaLulusan')->with('success', 'Tanggapan berhasil diperbarui');
    }

}

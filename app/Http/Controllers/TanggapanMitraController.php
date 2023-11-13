<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\pernyataan;
use App\Models\feedback_mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TanggapanMitraController extends Controller
{
    public function index()
    {
        // get desember current year -1
        $past = Carbon::now()->subYear()->month(12)->startOfMonth()->toDateString();
        // get november current year 
        $current = Carbon::now()->month(12)->startOfMonth()->toDateString();

        $roleAktor = null;
        if (Auth::guard('tpmf')->check()) {
            $namaDosen = Auth::guard('tpmf')->user()->nama_dosen;
            $roleAktor = "TPMF";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_dosen;
            $roleAktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_dosen;
            $roleAktor = "Dekan";
        } else {
            $namaDosen = "Tidak ada";
        }

        $jabatanDosen = DB::table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_dosen', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_dosen', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;

        $tpmf = null;
        if (strpos($namaJabatan, 'Tim Penjaminan Mutu Fakultas Sains dan Matematika') !== false) {
            $tpmf = "Tim Penjaminan Mutu Fakultas Sains dan Matematika";
        }

        $ketua = false;
        if (strpos($namaJabatan, 'Ketua') !== false) {
            $ketua = true;
        }

        $feedbackTpmf = feedback_mitra::where('aktor', 'TPMF')->whereBetween('created_at', [$past, $current])->whereBetween('updated_at', [$past, $current])->latest()->first();
        $feedbackDekan = feedback_mitra::where('aktor', 'Dekan')->whereBetween('created_at', [$past, $current])->whereBetween('updated_at', [$past, $current])->latest()->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        $roleAktor = null;

        if (Auth::guard('tpmf')->check()) {
            $roleAktor = "TPMF";
        } else if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            $roleAktor = "Dekan";
        }

        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        if (!$feedbackTpmf) {
            $feedbackTpmf = new feedback_mitra();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mitra();
        }

        return view('tanggapan.tanggapan_mitra', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'ketua' => $ketua,
            'roleAktor' => $roleAktor,
        ]);
    }

    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf_gpm.tanggapan_tpmf_mitra', [
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('tpmf')->check()) {
            $namaDosen = Auth::guard('tpmf')->user()->nama_dosen;
            $aktor = "TPMF";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_dosen;
            $aktor = "Dekan";
        } else if (Auth::guard("wadek")->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_dosen;
            $aktor = "Dekan";
        } else {
            $namaDosen = "Tidak ada";
        }

        $jabatanDosen = DB::table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_dosen', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_dosen', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;


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
            "sepuluh" => "required|string",
        ]);

        $tanggapan = [
            'Aktor' => $aktor,
            'status' => $namaJabatan,
            '1' => $validated['satu'],
            '2' => $validated['dua'],
            '3' => $validated['tiga'],
            '4' => $validated['empat'],
            '5' => $validated['lima'],
            '6' => $validated['enam'],
            '7' => $validated['tujuh'],
            '8' => $validated['delapan'],
            '9' => $validated['sembilan'],
            '10' => $validated['sepuluh'],
        ];

        // dd($tanggapan);
        if (strpos($namaJabatan, 'Ketua') !== false) {
            feedback_mitra::create($tanggapan);
        } elseif ((Auth::guard('dekan')->check() || Auth::guard('wadek')->check())) {
            feedback_mitra::create($tanggapan);
        } else {
            // cannot create
            abort(403);
        }


        return redirect('/TanggapanMitra')->with('success', 'berhasil save');
    }

    public function edit($aktor)
    {
        $feedback = feedback_mitra::where('aktor', $aktor)->latest()->first();

        if (!$feedback) {
            return redirect('/TanggapanMitra')->with('error', 'Tanggapan tidak ditemukan');
        }

        $pernyataan = pernyataan::where('status', 'pernyataan_mitra')->first();

        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        return view('tanggapan.tanggapan_tpmf_gpm.edit_tanggapan_tpmf_mitra', [
            'feedback' => $feedback,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function update(Request $request, feedback_mitra $aktor)
    {

        $validated = $request->validate([
            'satu' => 'required',
            'dua' => 'required',
            'tiga' => 'required',
            'empat' => 'required',
            'lima' => 'required',
            'enam' => 'required',
            'tujuh' => 'required',
            'delapan' => 'required',
            'sembilan' => 'required',
            'sepuluh' => 'required',
        ]);

        $tanggapan = [
            '1' => $validated['satu'],
            '2' => $validated['dua'],
            '3' => $validated['tiga'],
            '4' => $validated['empat'],
            '5' => $validated['lima'],
            '6' => $validated['enam'],
            '7' => $validated['tujuh'],
            '8' => $validated['delapan'],
            '9' => $validated['sembilan'],
            '10' => $validated['sepuluh'],
        ];

        // dd($tanggapan);

        DB::table('feedback_mitra')
            ->where('Aktor', $aktor->Aktor)
            ->update($tanggapan);


        return redirect('/TanggapanMitra')->with('success', 'Tanggapan berhasil diperbarui');
    }


}
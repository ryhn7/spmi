<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\pernyataan;
use App\Models\feedback_tendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TanggapanTendikController extends Controller
{
    public function index()
    {
        $today = Carbon::now();

        if ($today->month == 12 && $today->day >= 1) {
            // After 1 December, set the period for the next year
            $past = Carbon::create($today->year, 12, 1)->toDateString(); // 1 December of the current year
            $current = Carbon::create($today->year + 1, 12, 1)->toDateString(); // 1 December of the next year
            // dd($past, $current);
        } else {
            // Before 1 December, set the period for the current year
            $past = Carbon::create($today->year - 1, 12, 1)->toDateString(); // 1 December of the previous year
            $current = Carbon::create($today->year, 12, 1)->toDateString(); // 1 December of the current year
            // dd($past, $current);
        }

        $roleAktor = null;
        if (Auth::guard('tpmf')->check()) {
            $namaDosen = Auth::guard('tpmf')->user()->nama_tanpa_gelar;
            $roleAktor = "TPMF";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            $roleAktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            $roleAktor = "Dekan";
        } else {
            $namaDosen = "Tidak ada";
        }

        $jabatanDosen = DB::connection('mysql2')->table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
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

        $feedbackTpmf = feedback_tendik::where('aktor', 'TPMF')->whereBetween('updated_at', [$past, $current])->latest()->first();
        $feedbackDekan = feedback_tendik::where('aktor', 'Dekan')->whereBetween('updated_at', [$past, $current])->latest()->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_tendik')->first();
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
            $feedbackTpmf = new feedback_tendik();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_tendik();
        }

        return view('tanggapan.tanggapan_tendik', [
            'feedbackTpmf' => $feedbackTpmf,
            'feedbackDekan' => $feedbackDekan,
            'pernyataan' => $pernyataan,
            'ketua' => $ketua,
            'roleAktor' => $roleAktor,
        ]);
    }

    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_tendik')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf_gpm.tanggapan_tpmf_tendik', [
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('tpmf')->check()) {
            $namaDosen = Auth::guard('tpmf')->user()->nama_tanpa_gelar;
            $aktor = "TPMF";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            $aktor = "Dekan";
        } else if (Auth::guard("wadek")->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            $aktor = "Dekan";
        } else {
            $namaDosen = "Tidak ada";
        }

        $jabatanDosen = DB::connection('mysql2')->table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;

        if ($namaJabatan == "Wakil Dekan Akademik dan Kemahasiswaan" || $namaJabatan == "Wakil Dekan Sumber Daya dan Inovasi") {
            $namaJabatan = "Dekan Fakultas Sains dan Matematika";
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
            "sepuluh" => "required|string",
            "sebelas" => "required|string",
            "dua_belas" => "required|string",
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
            '11' => $validated['sebelas'],
            '12' => $validated['dua_belas'],
        ];

        // dd($tanggapan);
        if (strpos($namaJabatan, 'Ketua') !== false) {
            feedback_tendik::create($tanggapan);
        } elseif ((Auth::guard('dekan')->check() || Auth::guard('wadek')->check())) {
            feedback_tendik::create($tanggapan);
        } else {
            // cannot create
            abort(403);
        }

        return redirect('/TanggapanTendik')->with('success', 'Tanggapan berhasil disimpan');
    }

    public function edit($aktor)
    {
        $feedback = feedback_tendik::where('aktor', $aktor)->latest()->first();

        if (!$feedback) {
            return redirect('/TanggapanTendik')->with('error', 'Tanggapan tidak ditemukan');
        }

        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        return view('tanggapan.tanggapan_tpmf_gpm.edit_tanggapan_tpmf_tendik', [
            'feedback' => $feedback,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function update(Request $request, feedback_tendik $aktor)
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
            "sepuluh" => "required|string",
            "sebelas" => "required|string",
            "dua_belas" => "required|string",
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
            '11' => $validated['sebelas'],
            '12' => $validated['dua_belas'],
        ];

        // dd($tanggapan);

        DB::table('feedback_tendik')
            ->where('Aktor', $aktor->Aktor)
            ->update($tanggapan);


        return redirect('/TanggapanTendik')->with('success', 'Tanggapan berhasil diperbarui');
    }
}
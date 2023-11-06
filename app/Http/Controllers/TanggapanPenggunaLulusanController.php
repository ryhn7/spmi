<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\pernyataan;
use App\Models\feedback_stakeholder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TanggapanPenggunaLulusanController extends Controller
{
    public function index()
    {
        $roleAktor = null;
        if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_dosen;
            $roleAktor = "GPM";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_dosen;
            $roleAktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_dosen;
            $roleAktor = "Dekan";
        } else if (Auth::guard('kaprodi')->check()) {
            $namaDosen = Auth::guard('kaprodi')->user()->nama_dosen;
            $roleAktor = "Kaprodi";
        }else {
            $namaDosen = "Tidak ada";
        }


        $jabatanDosen = DB::table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_dosen', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_dosen', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;
        $substring = "Ketua Gugus Penjaminan Mutu Program Studi";
        // get jurusan
        $jurusan = trim(str_replace($substring, "", $namaJabatan));

        $ketua = false;
        if (strpos($namaJabatan, 'Ketua') !== false) {
            $ketua = true;
        }

        
        $feedbackgpm = feedback_stakeholder::where('aktor', 'GPM')->latest()->first();
        $feedbackDekan = feedback_stakeholder::where('aktor', 'Dekan')->latest()->first();
        $feedbackKaprodi = feedback_stakeholder::where('aktor', 'Kaprodi')->latest()->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        $roleAktor = null;

        if (Auth::guard('tpmf')->check()) {
            $roleAktor = "TPMF";
        } else if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            $roleAktor = "Dekan";
        }else if (Auth::guard('kaprodi')->check()) {
            $roleAktor = "Kaprodi";
        }

        if (!$feedbackgpm) {
            $feedbackgpm = new feedback_stakeholder();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_stakeholder();
        }
        if (!$feedbackKaprodi) {
            $feedbackKaprodi = new feedback_stakeholder();
        }
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }


        return view('tanggapan.tanggapan_pengguna_lulusan', [
            'feedbackGpm' => $feedbackgpm,
            'feedbackDekan' => $feedbackDekan,
            'feedbackKaprodi' => $feedbackKaprodi,
            'pernyataan' => $pernyataan,
            'roleAktor' => $roleAktor,
        ]);
    }

    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf_gpm.tanggapan_gpm_pengguna_lulusan',[
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('gpm')->check()) {
            $aktor = "GPM";
        } else if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            $aktor = "Dekan";
        } else if (Auth::guard('kaprodi')->check()) {
            $aktor = "Kaprodi";
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

    public function edit($aktor)
    {
        $feedback = feedback_stakeholder::where('aktor', $aktor)->latest()->first();

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
        ];

        // dd($tanggapan);

        DB::table('feedback_stakeholder')
        ->where('ID', $id->ID)
        ->update($tanggapan);


        return redirect('/TanggapanPenggunaLulusan')->with('success', 'Tanggapan berhasil diperbarui');
    }

}

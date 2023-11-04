<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\pernyataan;
use App\Models\feedback_mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TanggapanMahasiswaController extends Controller
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


        $feedbackgpm = feedback_mahasiswa::where('aktor', 'GPM')->where('status', 'LIKE', "%$jurusan%")->latest()->first();
        $feedbackKaprodi = feedback_mahasiswa::where('aktor', 'Kaprodi')->latest()->first();
        $feedbackDekan = feedback_mahasiswa::where('aktor', 'Dekan')->latest()->first();
        $pernyataan = pernyataan::where('status', 'pernyataan_mahasiswa')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        if (!$feedbackgpm) {
            $feedbackgpm = new feedback_mahasiswa();
        }
        if (!$feedbackDekan) {
            $feedbackDekan = new feedback_mahasiswa();
        }
        if (!$feedbackKaprodi) {
            $feedbackKaprodi = new feedback_mahasiswa();
        }

        return view('tanggapan.tanggapan_mahasiswa', [
            'feedbackGpm' => $feedbackgpm,
            'feedbackDekan' => $feedbackDekan,
            'feedbackKaprodi' => $feedbackKaprodi,
            'pernyataan' => $pernyataan,
            'ketua' => $ketua,
            'roleAktor' => $roleAktor,
        ]);
    }

    public function create()
    {
        $pernyataan = pernyataan::where('status', 'pernyataan_mahasiswa')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf.tanggapan_gpm_mahasiswa', [
            'pernyataan' => $pernyataan,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_dosen;
            $aktor = "GPM";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_dosen;
            $aktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
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
            "sebelas" => "required|string",
            "dua_belas" => "required|string",
            "tiga_belas" => "required|string",
            "empat_belas" => "required|string",
            "lima_belas" => "required|string",
            "enam_belas" => "required|string",
            "tujuh_belas" => "required|string",
            "delapan_belas" => "required|string",
            "sembilan_belas" => "required|string",
            "dua_puluh" => "required|string",
            "dua_satu" => "required|string",
            "dua_dua" => "required|string",
            "dua_tiga" => "required|string",
            "dua_empat" => "required|string",
            "dua_lima" => "required|string",
            "dua_enam" => "required|string",
            "dua_tujuh" => "required|string",
            "dua_delapan" => "required|string",
            "dua_sembilan" => "required|string",
            "tiga_puluh" => "required|string",
            "tiga_satu" => "required|string",
            "tiga_dua" => "required|string",
            "tiga_tiga" => "required|string",
            "tiga_empat" => "required|string",
            "tiga_lima" => "required|string",
            "tiga_enam" => "required|string",
            "tiga_tujuh" => "required|string",
            "tiga_delapan" => "required|string",
            "tiga_sembilan" => "required|string",
            "empat_puluh" => "required|string",
            "empat_satu" => "required|string",
            "empat_dua" => "required|string",
            "empat_tiga" => "required|string",
            "empat_empat" => "required|string",
            "empat_lima" => "required|string"
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
            '13' => $validated['tiga_belas'],
            '14' => $validated['empat_belas'],
            '15' => $validated['lima_belas'],
            '16' => $validated['enam_belas'],
            '17' => $validated['tujuh_belas'],
            '18' => $validated['delapan_belas'],
            '19' => $validated['sembilan_belas'],
            '20' => $validated['dua_puluh'],
            '21' => $validated['dua_satu'],
            '22' => $validated['dua_dua'],
            '23' => $validated['dua_tiga'],
            '24' => $validated['dua_empat'],
            '25' => $validated['dua_lima'],
            '26' => $validated['dua_enam'],
            '27' => $validated['dua_tujuh'],
            '28' => $validated['dua_delapan'],
            '29' => $validated['dua_sembilan'],
            '30' => $validated['tiga_puluh'],
            '31' => $validated['tiga_satu'],
            '32' => $validated['tiga_dua'],
            '33' => $validated['tiga_tiga'],
            '34' => $validated['tiga_empat'],
            '35' => $validated['tiga_lima'],
            '36' => $validated['tiga_enam'],
            '37' => $validated['tiga_tujuh'],
            '38' => $validated['tiga_delapan'],
            '39' => $validated['tiga_sembilan'],
            '40' => $validated['empat_puluh'],
            '41' => $validated['empat_satu'],
            '42' => $validated['empat_dua'],
            '43' => $validated['empat_tiga'],
            '44' => $validated['empat_empat'],
            '45' => $validated['empat_lima'],
        ];

        // dd($tanggapan);
        if (strpos($namaJabatan, 'Ketua') !== false) {
            feedback_mahasiswa::create($tanggapan);
        } else {
            // cannot create
            abort(403);
        }
        return redirect('/TanggapanMahasiswa')->with('success', 'berhasil save');
    }

    public function edit($aktor)
    {
        $feedback = feedback_mahasiswa::where('aktor', $aktor)->latest()->first();

        if (!$feedback) {
            return redirect('/TanggapanMahasiswa')->with('error', 'Tanggapan tidak ditemukan');
        }

        $pernyataan = pernyataan::where('status', 'pernyataan_mahasiswa')->first();

        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }

        return view('tanggapan.tanggapan_tpmf_gpm.edit_tanggapan_gpm_mahasiswa', [
            'feedback' => $feedback,
            'pernyataan' => $pernyataan,
        ]);
    }

    public function update(Request $request, feedback_mahasiswa $id)
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
            "tiga_belas" => "required|string",
            "empat_belas" => "required|string",
            "lima_belas" => "required|string",
            "enam_belas" => "required|string",
            "tujuh_belas" => "required|string",
            "delapan_belas" => "required|string",
            "sembilan_belas" => "required|string",
            "dua_puluh" => "required|string",
            "dua_satu" => "required|string",
            "dua_dua" => "required|string",
            "dua_tiga" => "required|string",
            "dua_empat" => "required|string",
            "dua_lima" => "required|string",
            "dua_enam" => "required|string",
            "dua_tujuh" => "required|string",
            "dua_delapan" => "required|string",
            "dua_sembilan" => "required|string",
            "tiga_puluh" => "required|string",
            "tiga_satu" => "required|string",
            "tiga_dua" => "required|string",
            "tiga_tiga" => "required|string",
            "tiga_empat" => "required|string",
            "tiga_lima" => "required|string",
            "tiga_enam" => "required|string",
            "tiga_tujuh" => "required|string",
            "tiga_delapan" => "required|string",
            "tiga_sembilan" => "required|string",
            "empat_puluh" => "required|string",
            "empat_satu" => "required|string",
            "empat_dua" => "required|string",
            "empat_tiga" => "required|string",
            "empat_empat" => "required|string",
            "empat_lima" => "required|string",
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
            '13' => $validated['tiga_belas'],
            '14' => $validated['empat_belas'],
            '15' => $validated['lima_belas'],
            '16' => $validated['enam_belas'],
            '17' => $validated['tujuh_belas'],
            '18' => $validated['delapan_belas'],
            '19' => $validated['sembilan_belas'],
            '20' => $validated['dua_puluh'],
            '21' => $validated['dua_satu'],
            '22' => $validated['dua_dua'],
            '23' => $validated['dua_tiga'],
            '24' => $validated['dua_empat'],
            '25' => $validated['dua_lima'],
            '26' => $validated['dua_enam'],
            '27' => $validated['dua_tujuh'],
            '28' => $validated['dua_delapan'],
            '29' => $validated['dua_sembilan'],
            '30' => $validated['tiga_puluh'],
            '31' => $validated['tiga_satu'],
            '32' => $validated['tiga_dua'],
            '33' => $validated['tiga_tiga'],
            '34' => $validated['tiga_empat'],
            '35' => $validated['tiga_lima'],
            '36' => $validated['tiga_enam'],
            '37' => $validated['tiga_tujuh'],
            '38' => $validated['tiga_delapan'],
            '39' => $validated['tiga_sembilan'],
            '40' => $validated['empat_puluh'],
            '41' => $validated['empat_satu'],
            '42' => $validated['empat_dua'],
            '43' => $validated['empat_tiga'],
            '44' => $validated['empat_empat'],
            '45' => $validated['empat_lima'],
        ];

        // dd($tanggapan);

        DB::table('feedback_mahasiswa')
        ->where('ID', $id->ID)
        ->update($tanggapan);


        return redirect('/TanggapanMahasiswa')->with('success', 'Tanggapan berhasil diperbarui');
    }

}
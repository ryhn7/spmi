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
    public function index(Request $request)
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
        if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_tanpa_gelar;
            $roleAktor = "GPM";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            $roleAktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            $roleAktor = "Dekan";
        } else if (Auth::guard('kaprodi')->check()) {
            $namaDosen = Auth::guard('kaprodi')->user()->nama_tanpa_gelar;
            $roleAktor = "Kaprodi";
        } else {
            $namaDosen = "Tidak ada";
        }


        $jabatanDosen = DB::connection('mysql2')->table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;
        if (stripos($namaJabatan, 'Program Studi Sarjana') !== false) {
            // Ganti "program studi" menjadi "departemen"
            $namaJabatan = str_ireplace('Program Studi Sarjana', 'Departemen', $namaJabatan);
        }

        if (preg_match('/(Program Studi|Departemen) (\w+\s*\w*)/', $namaJabatan, $matches)) {
            $jurusan = $matches[0];
        } else {
            // Handle the case where the pattern is not found
            $jurusan = "Tidak ada";
        }

        if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            $programStudi = $request->input('program_studi');
        } else {
            $programStudi = $jurusan;
        }
        if (stripos($programStudi, 'program studi sarjana') !== false) {
            // Ganti "program studi sarjana" menjadi "departemen"
            $programStudi = str_ireplace('program studi sarjana', 'Departemen', $programStudi);
        }

        // dd($programStudi);

        $ketua = false;
        if (strpos($namaJabatan, 'Ketua') !== false) {
            $ketua = true;
        }

        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if ($programStudi !== null) {
            $feedbackgpm = feedback_stakeholder::where('aktor', 'GPM')->where('status', 'LIKE', "%$programStudi%")->whereBetween('updated_at', [$past, $current])->latest()->first();
            $feedbackDekan = feedback_stakeholder::where('aktor', 'Dekan')->where('status', 'LIKE', "%$programStudi%")->whereBetween('updated_at', [$past, $current])->latest()->first();
            $feedbackKaprodi = feedback_stakeholder::where('aktor', 'Kaprodi')->where('status', 'LIKE', "%$programStudi%")
                ->latest()
                ->first();
        } else {
            $feedbackgpm = '';
            $feedbackDekan = '';
            $feedbackKaprodi = '';
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
            'ketua' => $ketua,
            'roleAktor' => $roleAktor,
            'programStudi' => $programStudi,
        ]);
    }

    public function filter(Request $request)
    {
        $roleAktor = null;
        if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_tanpa_gelar;
            $roleAktor = "GPM";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            $roleAktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            $roleAktor = "Dekan";
        } else if (Auth::guard('kaprodi')->check()) {
            $namaDosen = Auth::guard('kaprodi')->user()->nama_tanpa_gelar;
            $roleAktor = "Kaprodi";
        } else {
            $namaDosen = "Tidak ada";
        }


        $jabatanDosen = DB::connection('mysql2')->table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;
        if (stripos($namaJabatan, 'Program Studi Sarjana') !== false) {
            // Ganti "program studi" menjadi "departemen"
            $namaJabatan = str_ireplace('Program Studi Sarjana', 'Departemen', $namaJabatan);
        }

        // dd($namaJabatan);

        if (preg_match('/(Program Studi|Departemen) (\w+\s*\w*)/', $namaJabatan, $matches)) {
            $jurusan = $matches[0];
        } else {
            // Handle the case where the pattern is not found
            $jurusan = "Tidak ada";
        }

        $ketua = false;
        if (strpos($namaJabatan, 'Ketua') !== false) {
            $ketua = true;
        }

        if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            $programStudi = $request->input('program_studi');
        } else {
            $programStudi = $jurusan;
        }
        if (stripos($programStudi, 'program studi sarjana') !== false) {
            // Ganti "program studi sarjana" menjadi "departemen"
            $programStudi = str_ireplace('program studi sarjana', 'Departemen', $programStudi);
        }

        if ($programStudi !== null) {
            $feedbackgpm = feedback_stakeholder::where('aktor', 'GPM')->where('status', 'LIKE', "%$programStudi%")->latest()->first();
            $feedbackDekan = feedback_stakeholder::where('aktor', 'Dekan')->where('status', 'LIKE', "%$programStudi%")->latest()->first();
            $feedbackKaprodi = feedback_stakeholder::where('aktor', 'Kaprodi')->where('status', 'LIKE', "%$programStudi%")
                ->latest()
                ->first();
        } else {
            $feedbackgpm = '';
            $feedbackDekan = '';
            $feedbackKaprodi = '';
        }
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

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
            'ketua' => $ketua,
            'roleAktor' => $roleAktor,
            'programStudi' => $programStudi,
        ]);
    }

    public function create(Request $request)
    {
        $programStudi = $request->program_studi;
        // dd($programStudi);
        $pernyataan = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();
        if (!$pernyataan) {
            $pernyataan = new pernyataan();
        }
        return view('tanggapan.tanggapan_tpmf_gpm.tanggapan_gpm_pengguna_lulusan', [
            'pernyataan' => $pernyataan,
            'programStudi' => $programStudi,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_tanpa_gelar;
            $aktor = "GPM";
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            $aktor = "Dekan";
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            $aktor = "Dekan";
        } else if (Auth::guard('kaprodi')->check()) {
            $namaDosen = Auth::guard('kaprodi')->user()->nama_tanpa_gelar;
            $aktor = "Kaprodi";
        } else {
            $namaDosen = "Tidak ada";
        }

        $jabatanDosen = DB::connection('mysql2')->table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
            ->get();

        $namaJabatan = $jabatanDosen[0]->jabatan;
        if (stripos($namaJabatan, 'Program Studi Sarjana') !== false) {
            // Ganti "program studi" menjadi "departemen"
            $namaJabatan = str_ireplace('Program Studi Sarjana', 'Departemen', $namaJabatan);
        }
        $programStudi = $request->program_studi;
        // dd($programStudi);

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
        ]);

        $tanggapan = [
            'Aktor' => $aktor,
            // 'status' => $namaJabatan,
            // 'status' => $programStudi,
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

        if (Auth::guard('dekan')->check()) {
            $tanggapan['status'] = $programStudi;
        } else {
            $tanggapan['status'] = $namaJabatan;
        }

        // dd($tanggapan);
        if (strpos($namaJabatan, 'Ketua') !== false) {
            feedback_stakeholder::create($tanggapan);
        } else if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check()) {
            feedback_stakeholder::create($tanggapan);
        } else {
            // cannot create
            abort(403);
        }

        return redirect("/TanggapanPenggunaLulusan/filter?program_studi={$programStudi}")->with('success', 'berhasil save');
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

    public function update(Request $request, feedback_stakeholder $aktor)
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


        $programStudi = $request->program_studi;
        // dd($programStudi);
        DB::table('feedback_stakeholder')
            ->where('Aktor', $aktor->Aktor)
            ->update($tanggapan);


        return redirect("/TanggapanPenggunaLulusan/filter?program_studi={$programStudi}")->with('success', 'berhasil save');
    }

}

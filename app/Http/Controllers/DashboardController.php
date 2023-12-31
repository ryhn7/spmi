<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $namaJabatan = null;
        if (
            Auth::guard('dosen')->check() || Auth::guard('tpmf')->check() || Auth::guard('gpm')->check() ||
            Auth::guard('dekan')->check() || Auth::guard('wadek')->check() || Auth::guard('kaprodi')->check()
        ) {
            if (Auth::guard('dosen')->check()) {
                $namaDosen = Auth::guard('dosen')->user()->nama_tanpa_gelar;
            } else if (Auth::guard('tpmf')->check()) {
                $namaDosen = Auth::guard('tpmf')->user()->nama_tanpa_gelar;
            } else if (Auth::guard('gpm')->check()) {
                $namaDosen = Auth::guard('gpm')->user()->nama_tanpa_gelar;
            } else if (Auth::guard('dekan')->check()) {
                $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            } else if (Auth::guard('wadek')->check()) {
                $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            } else if (Auth::guard('kaprodi')->check()) {
                $namaDosen = Auth::guard('kaprodi')->user()->nama_tanpa_gelar;
            }

            $jabatanDosen = DB::connection('mysql2')->table('dosen')
                ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
                ->select('dosen.*', 'jabatan.jabatan')
                ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
                ->get();

            $namaJabatan = $jabatanDosen[0]->jabatan;
        }

        return view('index', [
            'namaJabatan' => $namaJabatan,
        ]);
    }
}

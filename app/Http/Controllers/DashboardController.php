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
        if (Auth::guard('dosen')->check()) {
            $namaDosen = Auth::guard('dosen')->user()->nama_dosen;

            $jabatanDosen = DB::table('dosen')
                ->leftJoin('jabatan', 'dosen.nama_dosen', '=', 'jabatan.nama_pejabat')
                ->select('dosen.*', 'jabatan.jabatan')
                ->where('dosen.nama_dosen', '=', $namaDosen)
                ->get();

            $namaJabatan = $jabatanDosen[0]->jabatan;
        }

        return view('index', [
            'namaJabatan' => $namaJabatan
        ]);
    }
}
<?php

namespace App\Http\Controllers;


use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    //

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $isStudent = preg_match('/^\d{14}$/', $credentials['username']);
        $isLecturer = preg_match('/^(?:\d{18}|H\.7\.\d{18})$/', $credentials['username']);


        $isStudentAuthenticated = false;
        $isLecturerAuthenticated = false;
        $isTendikAuthenticated = false;

        if ($isStudent) {
            $isStudentAuthenticated = Auth::guard('mahasiswa')->attempt(['user_mahasiswa' => $credentials['username'], 'password' => $credentials['password']]);
        } else if ($isLecturer) {
            $isLecturerAuthenticated = Auth::guard('dosen')->attempt(['user_dosen' => $credentials['username'], 'password' => $credentials['password']]);
        }

        $isTendikAuthenticated = Auth::guard('tendik')->attempt(['user_pegawai' => $credentials['username'], 'password' => $credentials['password']]);

        if ($isStudentAuthenticated) {
            $request->session()->regenerate();

            $intended_url = $request->intended_url;
            if ($intended_url) {
                return response()->json(['redirect_url' => $intended_url]);
            } else {
                return response()->json(['redirect_url' => '/']);
            }
        } else if ($isLecturerAuthenticated) {
            $request->session()->regenerate();

            $intended_url = $request->intended_url;
            if ($intended_url) {
                return response()->json(['redirect_url' => $intended_url]);
            } else {
                return response()->json(['redirect_url' => '/']);
            }
        } else if ($isTendikAuthenticated) {
            $request->session()->regenerate();

            $intended_url = $request->intended_url;
            if ($intended_url) {
                return response()->json(['redirect_url' => $intended_url]);
            } else {
                return response()->json(['redirect_url' => '/']);
            }
        } else {
            return response()->json(['error_message' => 'Invalid username or password'], 422);
        }
    }

    public function changeRole(Request $request)
    {
        $namaDosen = Auth::guard('dosen')->user()->nama_dosen;

        $jabatanDosen = DB::table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_dosen', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_dosen', '=', $namaDosen)
            ->get();

        $namaJabatan = $jabatanDosen[0]->jabatan;

        if ($namaJabatan == "Dekan Fakultas Sains dan Matematika") {
            $request->session()->put('role', 'dekan');
            $dekanUser = Dosen::where('nama_dosen', $namaDosen)->first();

            if ($dekanUser) {
                Auth::guard('dekan')->login($dekanUser);
                if (Auth::guard('dekan')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if ($namaJabatan == "Wakil Dekan Akademik dan Kemahasiswaan" || $namaJabatan == "Wakil Dekan Sumber Daya dan Inovasi") {
            $request->session()->put('role', 'wadek');

            $wadekUser = Dosen::where('nama_dosen', $namaDosen)->first();

            if ($wadekUser) {
                Auth::guard('wadek')->login($wadekUser);
                if (Auth::guard('wadek')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if ($namaJabatan == "Tim Penjaminan Mutu Fakultas Sains dan Matematika") {
            $request->session()->put('role', 'tpmf');
            $tpmfUser = Dosen::where('nama_dosen', $namaDosen)->first();

            if ($tpmfUser) {
                Auth::guard('tpmf')->login($tpmfUser);
                if (Auth::guard('tpmf')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if ($namaJabatan == "Gugus Penjaminan Mutu Program Studi Sarjana Matematika") {
            $request->session()->put('role', 'gpm');
            $gpmUser = Dosen::where('nama_dosen', $namaDosen)->first();

            if ($gpmUser) {
                Auth::guard('gpm')->login($gpmUser);
                if (Auth::guard('gpm')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if ($namaJabatan == "Gugus Penjaminan Mutu Program Studi Sarjana Matematika") {
            $request->session()->put('role', 'gpm');
            $gpmUser = Dosen::where('nama_dosen', $namaDosen)->first();

            if ($gpmUser) {
                Auth::guard('gpm')->login($gpmUser);
                if (Auth::guard('gpm')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else {
            abort(404);
        }
        $request->session()->put('role', 'dosen');
        $dosenUser = Dosen::where('nama_dosen', $namaDosen)->first();

        if ($dosenUser) {
            Auth::guard('dosen')->login($dosenUser);
            if (Auth::guard('dosen')->check()) {
                return redirect()->intended('/');
            } else {
                dd('guard not found');
            }
        }
        abort(404);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
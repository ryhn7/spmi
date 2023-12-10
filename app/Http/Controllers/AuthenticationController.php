<?php

namespace App\Http\Controllers;


use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        $isLecturer = preg_match('/^(?:\d{18}|H\.7\.\d{16})$/', $credentials['username']);


        $isStudentAuthenticated = false;
        $isLecturerAuthenticated = false;
        $isTendikAuthenticated = false;

        if ($isStudent) {
            $isStudentAuthenticated = Auth::guard('mahasiswa')->attempt(['user_mahasiswa' => $credentials['username'], 'password' => $credentials['password']]);
        } else if ($isLecturer) {
            $isLecturerAuthenticated = Auth::guard('dosen')->attempt(['user_dosen' => $credentials['username'], 'password' => $credentials['password']]);
        }

        $isTendikAuthenticated = Auth::guard('tendik')->attempt(['user_admin' => $credentials['username'], 'password' => $credentials['password']]);

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
        if (Auth::guard('dosen')->check()) {
            $namaDosen = Auth::guard('dosen')->user()->nama_tanpa_gelar;
        } else if (Auth::guard('tpmf')->check()) {
            $namaDosen = Auth::guard('tpmf')->user()->nama_tanpa_gelar;
        } else if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_tanpa_gelar;
        } else if (Auth::guard('kaprodi')->check()) {
            $namaDosen = Auth::guard('kaprodi')->user()->nama_tanpa_gelar;
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
        }

        Auth::guard('dosen')->logout();

        // dd($namaDosen);


        $jabatanDosen = DB::connection('mysql2')->table('dosen')
            ->leftJoin('jabatan', 'dosen.nama_tanpa_gelar', '=', 'jabatan.nama_pejabat')
            ->select('dosen.*', 'jabatan.jabatan')
            ->where('dosen.nama_tanpa_gelar', '=', $namaDosen)
            ->get();


        $namaJabatan = $jabatanDosen[0]->jabatan;

        // dd($namaJabatan);

        if ($namaJabatan == "Dekan Fakultas Sains dan Matematika") {
            $request->session()->put('role', 'dekan');
            $dekanUser = Dosen::where('nama_tanpa_gelar', $namaDosen)->first();

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

            $wadekUser = Dosen::where('nama_tanpa_gelar', $namaDosen)->first();

            if ($wadekUser) {
                Auth::guard('wadek')->login($wadekUser);
                if (Auth::guard('wadek')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if (strpos($namaJabatan, 'Tim Penjaminan Mutu Fakultas Sains dan Matematika') !== false) {
            $request->session()->put('role', 'tpmf');
            $tpmfUser = Dosen::where('nama_tanpa_gelar', $namaDosen)->first();

            if ($tpmfUser) {
                Auth::guard('tpmf')->login($tpmfUser);
                if (Auth::guard('tpmf')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if (strpos($namaJabatan, 'Gugus Penjaminan Mutu') !== false) {
            $request->session()->put('role', 'gpm');
            $gpmUser = Dosen::where('nama_tanpa_gelar', $namaDosen)->first();

            if ($gpmUser) {
                Auth::guard('gpm')->login($gpmUser);
                if (Auth::guard('gpm')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else if ((Str::startsWith($namaJabatan, 'Ketua Program Studi')) || (Str::startsWith($namaJabatan, 'Ketua Departemen'))) {
            $request->session()->put('role', 'kaprodi');
            $kaprodiUser = Dosen::where('nama_tanpa_gelar', $namaDosen)->first();

            if ($kaprodiUser) {
                Auth::guard('kaprodi')->login($kaprodiUser);
                if (Auth::guard('kaprodi')->check()) {
                    return redirect()->intended('/');
                } else {
                    dd('guard not found');
                }
            }
        } else {
            abort(404);
        }
    }

    public function switchToDosen(Request $request)
    {
        if (Auth::guard('dosen')->check()) {
            $namaDosen = Auth::guard('dosen')->user()->nama_tanpa_gelar;
        } else if (Auth::guard('tpmf')->check()) {
            $namaDosen = Auth::guard('tpmf')->user()->nama_tanpa_gelar;
            Auth::guard('tpmf')->logout();
        } else if (Auth::guard('gpm')->check()) {
            $namaDosen = Auth::guard('gpm')->user()->nama_tanpa_gelar;
            Auth::guard('gpm')->logout();
        } else if (Auth::guard('kaprodi')->check()) {
            $namaDosen = Auth::guard('kaprodi')->user()->nama_tanpa_gelar;
            Auth::guard('kaprodi')->logout();
        } else if (Auth::guard('dekan')->check()) {
            $namaDosen = Auth::guard('dekan')->user()->nama_tanpa_gelar;
            Auth::guard('dekan')->logout();
        } else if (Auth::guard('wadek')->check()) {
            $namaDosen = Auth::guard('wadek')->user()->nama_tanpa_gelar;
            Auth::guard('wadek')->logout();
        }

        $request->session()->put('role', 'dosen');
        $dosenUser = Dosen::where('nama_tanpa_gelar', $namaDosen)->first();

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
<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    //

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $password = $credentials['password'];

        $isStudent = preg_match('/^\d{14}$/', $credentials['username']);


        if ($isStudent) {
            // dd(Auth::guard('mahasiswa')->attempt(['user_mahasiswa' => $credentials['username'], 'password' => $credentials['password']]));
            if (Auth::guard('mahasiswa')->attempt(['user_mahasiswa' => $credentials['username'], 'password' => $credentials['password']])) {
                // Authentication passed for students
                // $user = Auth::guard('mahasiswa')->user();
                // dd($user);
                $request->session()->regenerate();
                return redirect()->intended('/tes');
            }
        } else {
            if (Auth::guard('dosen')->attempt(['user_dosen' => $credentials['username'], 'password' => $credentials['password']])) {
                // Authentication passed for lecturers
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }
        dd('gagal');
        return back()->with('loginError', 'Login anda gagal. Harap coba kembali.');


        // if ($isStudent) {
        //     $user = Mahasiswa::where('user_mahasiswa', $credentials['username'])->first();
        //     $loginUser = $user->password_mahasiswa;
        // } else {
        //     $user = Dosen::where('user_dosen', $credentials['username'])->first();
        //     $loginUser = $user->password_dosen;
        // }

        // if ($user && password_verify($password, $loginUser)) {
        //     Auth::login($user);
        //     $request->session()->regenerate();

        //     return redirect()->intended('/');
        // }
        // return back()->with('loginError', 'Login anda gagal. Harap coba kembali.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

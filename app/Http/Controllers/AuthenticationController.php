<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if ($isStudent) {
            if (Auth::guard('mahasiswa')->attempt(['user_mahasiswa' => $credentials['username'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();

                $intended_url = $request->intended_url;
                if ($intended_url) {
                    return redirect($intended_url);
                } else {
                    return redirect()->intended('/');
                }
            }
        } else {
            if (Auth::guard('dosen')->attempt(['user_dosen' => $credentials['username'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();
                
                $intended_url = $request->intended_url;
                if ($intended_url) {
                    return redirect($intended_url);
                } else {
                    return redirect()->intended('/');
                }
            }
        }
        return back()->with('loginError', 'Login anda gagal. Harap coba kembali.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

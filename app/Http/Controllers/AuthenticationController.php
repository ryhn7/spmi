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
        $isLecturer = preg_match('/^(?:\d{18}|H\.7\.\d{18})$/', $credentials['username']);

        if ($isStudent) {
            if (Auth::guard('mahasiswa')->attempt(['user_mahasiswa' => $credentials['username'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();

                $intended_url = $request->intended_url;
                if ($intended_url) {
                    return response()->json(['redirect_url' => $intended_url]);
                } else {
                    return response()->json(['redirect_url' => '/']);
                }
            }
        } else if ($isLecturer) {
            if (Auth::guard('dosen')->attempt(['user_dosen' => $credentials['username'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();

                $intended_url = $request->intended_url;
                if ($intended_url) {
                    return response()->json(['redirect_url' => $intended_url]);
                } else {
                    return response()->json(['redirect_url' => '/']);
                }
            }
        }
        return response()->json(['error_message' => 'Invalid username or password'], 422);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

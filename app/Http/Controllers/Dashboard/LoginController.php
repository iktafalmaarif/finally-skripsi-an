<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $auth = $request->only('email', 'password');

        if (Auth::attempt($auth)) {
            $request->session()->regenerate();

            // Periksa level pengguna setelah berhasil login
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard');
            }
        } else {
            return back()->with('toast_error', 'Email atau Password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}

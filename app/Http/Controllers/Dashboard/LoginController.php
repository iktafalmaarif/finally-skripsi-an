<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;



class LoginController extends Controller
{


    public function index(){
        return view('dashboard.login');
    }


    public function login(Request $request){

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == 'Admin') {
                alert()->success('Berhasil', 'Berhasil Login');
                return redirect('/dashboard');
            } else {
                Auth::logout();
                Session::flash('error', 'Level pengguna tidak valid');
                return redirect('/login');
            }
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
}

public function logout(Request $request){
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');         
}

}

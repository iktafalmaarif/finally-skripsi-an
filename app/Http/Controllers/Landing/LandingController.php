<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing.home');
    }

    public function search(Request $request)
    {
        $nik = $request->input('nik');
        $user = Penduduk::where('nik', $nik)->first();

        return view('landing.home', ['user' => $user]);
    }
}

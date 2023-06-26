<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index(){
        $User = User::all();
        return view('dashboard.dataUser',compact('User'));
    }
    public function formUser(){
        return view('dashboard.formUser');
    }
    public function store(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->status = $request->input('status');
        $user->level = $request->input('level');
        $user->password = $request->input('password');
        
        $user->save();
        alert()->success('Berhasil','Data Penduduk Berhasil ditambahkan');
        return redirect()->route('Data Penduduk')->with('status','Data Telah Ditambahkan');
        }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $User = User::all();

        return view('dashboard.dataUser', compact('User'));
    }

    public function formUser()
    {
        return view('dashboard.formUser');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->status = $request->input('status');
        $user->level = $request->input('level');
        $user->password = bcrypt($request->input('password'));

        $user->save();
        alert()->success('Berhasil', 'Data Penduduk Berhasil ditambahkan');

        return redirect()->route('Data User')->with('status', 'Data Telah Ditambahkan');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;

use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(){
        $penduduk = Penduduk::all();
        return view('dashboard.dataPenduduk',compact('penduduk'));
    }

    public function formPenduduk(){
        return view('dashboard.formPenduduk');
    }

    public function store(Request $request){
        $penduduk = new Penduduk;
        $penduduk->nik = $request->input('nik');
        $penduduk->nama_lengkap = $request->input('nama_lengkap');
        $penduduk->tempat_lahir = $request->input('tempat_lahir');
        $penduduk->tanggal_lahir = $request->input('tanggal_lahir');
        $penduduk->jenis_kelamin = $request->input('jenis_kelamin');
        $penduduk->agama = $request->input('agama');
        $penduduk->status_perkawinan = $request->input('status_perkawinan');
        $penduduk->pekerjaan = $request->input('pekerjaan');
        $penduduk->kewarganegaraan = $request->input('kewarganegaraan');
        $penduduk->alamat = $request->input('alamat');   
        $penduduk->save();
        alert()->success('Berhasil','Data Penduduk Berhasil ditambahkan');
        return redirect()->route('Data Penduduk')->with('status','Data Telah Ditambahkan');
        }
}
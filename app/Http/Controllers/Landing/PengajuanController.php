<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function insertPengajuan(Request $request){
        $pengajuan = new Pengajuan;
        $pengajuan->jenis_surat = $request->input('jenis_surat');
        $pengajuan->id_penduduk = $request->input('id_penduduk');
        $pengajuan->keperluan = $request->input('keperluan');
        if ($request->hasFile('ktp')) {
            $file = $request->file('ktp');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/image/ktp', $filename);
            $pengajuan->ktp = $filename;
        }
        if ($request->hasFile('kk')) {
            $file = $request->file('kk');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/image/kk', $filename);
            $pengajuan->kk = $filename;
        }
        $pengajuan->save();
        alert()->success('Berhasil','Data Penduduk Berhasil ditambahkan');
        return redirect()->route('Home')->with('status','Data Telah Ditambahkan');
        }
}

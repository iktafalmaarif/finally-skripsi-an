<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function insertPengajuan(Request $request)
    {
        $pengajuan = new Pengajuan;
        $pengajuan->jenis_surat = $request->input('jenis_surat');
        $pengajuan->id_penduduk = $request->input('id_penduduk');
        $pengajuan->keperluan = $request->input('keperluan');
        $pengajuan->nama_kampus = $request->input('nama_kampus');
        $pengajuan->alamat_kampus = $request->input('alamat_kampus');

        $pengajuan->keperluan = $request->input('keperluan');
        $pengajuan->keperluan_tambahan = $request->input('keperluan_tambahan');
        $pengajuan->mulai_hajatan = $request->input('mulai_hajatan');
        $pengajuan->akhir_hajatan = $request->input('akhir_hajatan');
        $pengajuan->tempat_hajatan = $request->input('tempat_hajatan');
        $pengajuan->hiburan_hajatan = $request->input('hiburan_hajatan');

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
        
        alert()->success('Berhasil', 'Data Penduduk Berhasil ditambahkan');
        return redirect()->route('Home')->with('status', 'Data Telah Ditambahkan');
    }
}

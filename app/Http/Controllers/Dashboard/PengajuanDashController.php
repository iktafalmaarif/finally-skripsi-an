<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\Penduduk;
use DB;
use PDF;

use Illuminate\Http\Request;

class PengajuanDashController extends Controller
{
    public function index(){
        $data = DB::table('pengajuans')
        ->join('penduduks', 'pengajuans.id_penduduk', '=', 'penduduks.id_penduduk')
        ->get();
        return view('dashboard.daftarPengajuan',compact('data'));
    }

    public function formPengajuan(){
        return view('dashboard.formPengajuan');
    }

    public function search(Request $request)
    {
        $nik = $request->input('nik');
        $user = Penduduk::where('nik', $nik)->first();

        return view('dashboard.formPengajuan', ['user' => $user]);
    }


    public function approve(Request $request, $id){
        $approve =  DB::table('pengajuans')
                    ->where('id_pengajuan', $id)
                    ->update([
                        'status' => 2
                    ]);
    
        alert()->success('Berhasil','Data Berhasil diuprove');
        return redirect()->route('Daftar Pengajuan')->with('success','Data Berhasil Diuprove');
    }

    public function convert($id)
{
    $data = DB::table('pengajuans')
        ->join('penduduks', 'pengajuans.id_penduduk', '=', 'penduduks.id_penduduk')
        ->where('pengajuans.id_pengajuan', $id)
        ->first();

    $pdf = PDF::loadView('dashboard.surat', ['data' => $data]);
    $pdf->setPaper('f4');
    return $pdf->stream('Surat Pengajuan.pdf');
}
}

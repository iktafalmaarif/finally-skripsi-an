<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penduduk;
use App\Models\Pengajuan;

class TrackingController extends Controller
{
    public function tracking(){
        return view('landing.tracking');
    }
    
    // public function trackingSurat(Request $request){
    //     // $data = json_decode($_POST['datanya']);
    //     $nik = $request->input('nik');

    //     $getPengajuan = DB::table('pengajuans')
    //                     ->select('pengajuans.*', 'penduduks.nama_lengkap')
    //                     ->leftJoin('penduduks','pengajuans.id_penduduk','=','penduduks.id_penduduk')
    //                     ->where('penduduks.nik','=', $nik)
    //                     ->get();
    //     // dd($getPengajuan);
    //     return json_encode($getPengajuan);
    // }

}

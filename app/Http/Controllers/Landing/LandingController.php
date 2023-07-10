<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function cariDataByNIK(Request $request)
{
    $nik = $request->input('nik');

    $penduduk = DB::table('penduduks')
        ->join('pengajuans', 'penduduks.id_penduduk', '=', 'pengajuans.id_penduduk')
        ->where('penduduks.nik', $nik)
        ->select('penduduks.*', 'pengajuans.jenis_surat', 'pengajuans.nomor_surat', 'pengajuans.status', 'pengajuans.id_pengajuan')
        ->get();

    if ($penduduk->isNotEmpty()) {
        // Data ditemukan, tampilkan dalam tampilan Blade
        return view('landing.home', compact('penduduk'));
    } else {
        // Data tidak ditemukan, tampilkan pesan error dalam tampilan Blade
        return view('landing.home', ['error' => 'Data tidak ditemukan']);
    }
}

}

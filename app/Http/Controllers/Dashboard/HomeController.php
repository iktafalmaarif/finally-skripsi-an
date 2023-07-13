<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\Pengajuan;

class HomeController extends Controller
{
    public function home()
    {
        $totalPenduduk = Penduduk::count();
        $totalPengajuan = Pengajuan::count();
        $totalPengajuanTerkonfirmasi = Pengajuan::where('status', 2)->count();
        $totalPengajuanpPanding = Pengajuan::where('status', NULL)->count();
        return view('dashboard.index', [
            'totalPenduduk' => $totalPenduduk,
            'totalPengajuan' => $totalPengajuan,
            'totalPengajuanTerkonfirmasi' => $totalPengajuanTerkonfirmasi,
            'totalPengajuanpPanding' => $totalPengajuanpPanding
        ]);
    }
    
}

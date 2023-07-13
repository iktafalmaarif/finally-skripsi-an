<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PengajuanDashController extends Controller
{
    public function index()
    {
        $data = DB::table('pengajuans')
            ->join('penduduks', 'pengajuans.id_penduduk', '=', 'penduduks.id_penduduk')
            ->get();


        return view('dashboard.daftarPengajuan', compact('data'));
    }

    public function formPengajuan()
    {
        return view('dashboard.formPengajuan');
    }

    public function search(Request $request)
    {
        $nik = $request->input('nik');
        $user = Penduduk::where('nik', $nik)->first();

        return view('dashboard.formPengajuan', ['user' => $user]);
    }

    public function approve(Request $request, $id)
    {
        $approve = DB::table('pengajuans')
            ->where('id_pengajuan', $id)
            ->update([
                'status' => 2,
            ]);

        alert()->success('Berhasil', 'Data Berhasil diuprove');

        return redirect()->route('Daftar Pengajuan')->with('success', 'Data Berhasil Diuprove');
    }

    public function editNoSurat(Request $request, $id){
        $noSurat = $request->input('nomor_surat');
        $pengajuan = Pengajuan::find($id);
        $pengajuan->nomor_surat = $noSurat;
        $pengajuan->save();

        alert()->success('Berhasil', 'Nomor Surat berhasil diupdate');
    return redirect()->route('Daftar Pengajuan')->with('success', 'Nomor Surat berhasil diupdate');
    }


    public function reject(Request $request, $id)
    {
        $approve = DB::table('pengajuans')
            ->where('id_pengajuan', $id)
            ->update([
                'status' => 1,
            ]);

        alert()->warning('Berhasil', 'Data Ditolak');

        return redirect()->route('Daftar Pengajuan')->with('warning', 'Data Ditolak');
    }

    public function convert($id)
    {
        $data = DB::table('pengajuans')
            ->join('penduduks', 'pengajuans.id_penduduk', '=', 'penduduks.id_penduduk')
            ->where('pengajuans.id_pengajuan', $id)
            ->first();

        $jenis = $data->jenis_surat;
        $namaPengaju = $data->nama_lengkap;

        if ($jenis == 'Surat Keterangan Tidak Mampu') {
            $pdf = PDF::loadView('letter.SKTM', ['data' => $data]);
        } elseif ($jenis == 'Surat Bidikmisi Universitas') {
            $pdf = PDF::loadView('letter.SKTMBIDIKMISIUNIVERSITAS', ['data' => $data]);
        } elseif ($jenis == 'Surat Izin Hajatan') {
            $pdf = PDF::loadView('letter.SURATKETERANGANIJINHAJATAN', ['data' => $data]);
        } elseif ($jenis == 'Surat Keterangan Belum Menikah') {
            $pdf = PDF::loadView('letter.SURATKETERANGANBELUMMENIKAH', ['data' => $data]);
        } elseif ($jenis == 'Surat Keterangan Domisili') {
            $pdf = PDF::loadView('letter.SURATKETERANGANDOMISILI', ['data' => $data]);
        } elseif ($jenis == 'Surat Keterangan Belum Memiliki Rumah') {
            $pdf = PDF::loadView('letter.SURATKETERANGANBELUMMEMILIKIRUMAH', ['data' => $data]);
        } elseif ($jenis == 'Surat Keterangan Belum Memiliki Rumah') {
            $pdf = PDF::loadView('letter.SURATKETERANGANTINGGALBERSAMAORTU', ['data' => $data]);
        } elseif ($jenis == 'Surat Keterangan Usaha') {
            $pdf = PDF::loadView('letter.SURATKETERANGANUSAHA', ['data' => $data]);
        } elseif ($jenis == 'Surat Keterangan Harga Tanah') {
            $pdf = PDF::loadView('letter.SURATKETERANGANHARGATANAH', ['data' => $data]);
        }

        $namaFile = $jenis.'-'.$namaPengaju;
        $pdf->setPaper('F4');

        return $pdf->stream($namaFile.'.pdf');
    }
}

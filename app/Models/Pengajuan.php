<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengajuan';
    protected $table = 'pengajuans';
    protected $fillable = [
        'jenis_surat',
        'id_penduduk',
        'status',
        'nomor_surat',
        'ktp',
        'kk',
        'keperluan',

    ];
}

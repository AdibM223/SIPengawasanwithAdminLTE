<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regisbu extends Model
{
    use HasFactory;
    protected $table = 'regisbu';
    protected $fillable = [
        
        'nomorregis',
        'nama_bu_regis',
        'jumlah_karyawan_regis',
        'tgl_suratpernyataan',
        'dokumen_pendukung',
        'tgl_pemeriksaan',
        'nama_pemeriksa',
        'hasil_pemeriksaan',
        'tgl_SPHP',
        'tgl_surat_teguranI',
        'tgl_surat_teguranII',
        'tgl_sanksi_administratif',
        'status_tahapcanvasing',
        'status_tahap1',
        'status_tahap2',
        'status_tahap3',
        'status_tahap4',
        'status_tahap5',
        'status_tahapupayalain',

    ];
}

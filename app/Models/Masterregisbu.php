<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterregisbu extends Model
{
    use HasFactory;
    protected $table = 'bubelumdaftar';
    protected $fillable = [
        'nomorregis',
        'nama_bu_regis',
        'alamat_bu_regis',
        'notelp_bu_regis',
        'PJ_regis',
        'notelp_PJ_regis',
        'nama_RO_regis',
        'jumlah_karyawan_regis',
        'longitude_regis',
        'latitude_regis',
    ];
}

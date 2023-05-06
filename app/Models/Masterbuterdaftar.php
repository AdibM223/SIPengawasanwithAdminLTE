<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterbuterdaftar extends Model
{
    use HasFactory;
    protected $table = 'busudahdaftar';
    protected $fillable = [
        'kode_bu',
        'nama_bu',
        'alamat_bu',
        'nama_pimpinan',
        'notelp_pimpinan',
        'PIC',
        'notelp_PIC',
        'nama_RO_bu',
        'longitude_bu',
        'latitude_bu',
    ];
}

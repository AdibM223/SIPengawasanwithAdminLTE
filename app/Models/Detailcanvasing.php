<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailcanvasing extends Model
{
    use HasFactory;
    protected $table = 'detailcanvasing';
    protected $fillable = [
    'nomorregis',
    'metode_canvasing', 
    'tanggal_canvasing',    
    'hasil_canvasing',
    'jumlah_potensi_pekerja',
    'jumlah_potensi_keluarga',
    'tindak_lanjut',
    'hasil_rekrutmen'
    ];
}

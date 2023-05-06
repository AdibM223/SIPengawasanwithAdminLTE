<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Ajuansertif extends Model
{
    use HasFactory;
    protected $table = 'ajuansertif';
    protected $fillable = [
        'kode_bu',
        'no_surat',
        'tgl_surat',
        'nama_file',
        'nomor_sertif',
        'tgl_cetak',
        'periode_sertif',
        'jumlah_peserta',
        'jumlah_ISAT',
        'tanggal_diserahkan'
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['tgl_cetak'])
        ->translatedFormat('l, d F Y');
    }
}

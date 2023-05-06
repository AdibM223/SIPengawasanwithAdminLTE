<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailupaya extends Model
{
    use HasFactory;
    protected $table = 'detailupaya';
    protected $fillable = [
    'nomorregis',
    'tgl_upayalain',
    'kegiatan_upayalain',
    'hasil_upayalain'
    ];
}

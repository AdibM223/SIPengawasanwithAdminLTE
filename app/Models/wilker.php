<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wilker extends Model
{
    use HasFactory;
    protected $table = 'wilker';
    protected $fillable = [
    'id',
    'namawil'
    ];
}

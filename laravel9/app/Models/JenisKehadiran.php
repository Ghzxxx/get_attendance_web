<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKehadiran extends Model
{
    use HasFactory;
    protected $table = 'jenis_kehadiran_';
    protected $fillable = [
        'Jenis Kehairan'
    ];
}

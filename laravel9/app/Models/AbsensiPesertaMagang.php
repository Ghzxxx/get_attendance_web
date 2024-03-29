<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiPesertaMagang extends Model
{
    use HasFactory;
    protected $table = 'absensi_peserta_magang';

    protected $fillable = [
        'nama',
        'asal',
        'foto',
        'created_at',
    ];
}

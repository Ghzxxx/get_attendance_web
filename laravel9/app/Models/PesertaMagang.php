<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class PesertaMagang extends Model
{
    use HasFactory, SoftDeletes; 
    protected $table = 'peserta_magang';
    protected $fillable = [
        'nama',
        'asal',
        'nohp',
    ];

    public static function getTotalCount()
    {
        return static::count();
    }

    public function pesertaMagang()
    {
        return $this->belongsToMany(PesertaMagang::class, 'absensi_peserta_magang', 'mobile_data_id', 'peserta_magang_id');
    }

}

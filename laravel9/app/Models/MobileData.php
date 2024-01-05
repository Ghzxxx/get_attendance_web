<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileData extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function mobileData()
{
    return $this->belongsToMany(MobileData::class, 'absensi_peserta_magang', 'peserta_magang_id', 'mobile_data_id');
}

}

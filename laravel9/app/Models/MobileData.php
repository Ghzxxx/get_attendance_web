<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileData extends Model
{
    use HasFactory;

    protected $fillable = ['Foto', 'absensi_peserta_magang_id', 'timestamp']; // Add only the fillable columns

    //protected $primaryKey = 'id'; // Assuming 'id' is the primary key column

    // Assuming 'created_at' and 'updated_at' are timestamps
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // Relationship with absensi_peserta_magang table
    public function absensiPesertaMagang()
    {
        // return $this->belongsToMany(AbsensiPesertaMagang::class, 'absensi_peserta_magang', 'mobile_data_id', 'peserta_magang_id');
        return $this->belongsTo(AbsensiPesertaMagang::class);
    }
}

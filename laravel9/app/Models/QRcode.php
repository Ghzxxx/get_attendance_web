<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;
    protected $table = 'qrcodes'; // Specify the correct table name

    protected $fillable = [
        'random_string',
    ];
}

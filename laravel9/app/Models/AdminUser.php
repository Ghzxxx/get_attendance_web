<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class AdminUser extends Model
{
    use HasFactory; 
    protected $table = 'admin_users';
    protected $fillable = [
        'email',
        'password',
    ];
}

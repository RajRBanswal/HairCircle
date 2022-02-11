<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    use HasFactory;
    protected $fillable = [
        'id',
        'username',
        'password',
        'login_time',
    ];
}

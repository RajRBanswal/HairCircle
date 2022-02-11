<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\UserController;

class Question extends Model
{
    use HasFactory;
    protected $table = 'question1';
    public $timestamps=false;

}


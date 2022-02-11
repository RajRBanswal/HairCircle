<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERegisterModel extends Model
{
    protected $table = 'e_register';

    public $fillable = ['name','gender','address','city','pincode','mobile_no','email','password'];
    
    use HasFactory;
}

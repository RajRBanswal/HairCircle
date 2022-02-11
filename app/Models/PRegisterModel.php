<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRegisterModel extends Model
{
    protected $table = 'patient_register';
    public $fillable = [
        'name', 'dob', 'gender', 'marital_status','religion', 'medi_pref','prof', 'purpofvisit', 'reference[]', 'wik', 'hic','other','address','city','pin', 'mobile_no', 'email', 'checkme','password'     
    ];
    use HasFactory;
}

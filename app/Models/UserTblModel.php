<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTblModel extends Model
{
    protected $table = 'user_tbl';
    use HasFactory;

    public $fillable = ['name','sex','ref_id','ref_name','ref_id1','ref_id2','ref_id3','ref_id4','ref_id5','product_name','image','price','reffered_by','no_of_refs'];
}

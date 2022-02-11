<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $table = 'questions';

    public $fillable = [
        'questions',
        'answer',        
    ];
    
    use HasFactory;
}

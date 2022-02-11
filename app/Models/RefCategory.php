<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RefCategory
 * @package App\Models
 * @version October 11, 2021, 6:46 am UTC
 *
 * @property string $name
 * @property string $description
 * @property string $reward
 * @property string $congratulatory_message
 * @property string $target_no_refferrals
 * @property string $points_per_refferral
 */
class RefCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ref_category';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'reward',
        'congratulatory_message',
        'target_no_refferrals',
        'points_per_refferral'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'reward' => 'string',
        'congratulatory_message' => 'string',
        'target_no_refferrals' => 'string',
        'points_per_refferral' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
        'reward' => 'nullable|string|max:255',
        'congratulatory_message' => 'nullable|string|max:255',
        'target_no_refferrals' => 'nullable|string|max:255',
        'points_per_refferral' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class VRegisterModel
 * @package App\Models
 * @version October 11, 2021, 5:20 am UTC
 *
 * @property string $vens_id
 * @property string $name
 * @property string $gender
 * @property string $shop_name
 * @property string $shop_license
 * @property string $address
 * @property string $city
 * @property integer $pincode
 * @property string $mobile_no
 * @property string $email
 * @property string $password
 * @property string $c_password
 * @property integer $reffered_by
 * @property integer $no_of_refs
 * @property integer $ref_level_id
 * @property integer $role_id
 */
class VRegisterModel extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'vendor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'vens_id',
        'name',
        'gender',
        'shop_name',
        'shop_license',
        'address',
        'city',
        'pincode',
        'mobile_no',
        'email',
        'password',
        'c_password',
        'reffered_by',
        'no_of_refs',
        'ref_level_id',
        'role_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vens_id' => 'string',
        'name' => 'string',
        'gender' => 'string',
        'shop_name' => 'string',
        'shop_license' => 'string',
        'address' => 'string',
        'city' => 'string',
        'pincode' => 'integer',
        'mobile_no' => 'string',
        'email' => 'string',
        'password' => 'string',
        'c_password' => 'string',
        'reffered_by' => 'integer',
        'no_of_refs' => 'integer',
        'ref_level_id' => 'integer',
        'role_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vens_id' => 'required|string',
        'name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'shop_name' => 'required|string|max:255',
        'shop_license' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'pincode' => 'required|integer',
        'mobile_no' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'c_password' => 'required|string|max:255',
        'reffered_by' => 'nullable|integer',
        'no_of_refs' => 'nullable|integer',
        'ref_level_id' => 'nullable|integer',
        'role_id' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

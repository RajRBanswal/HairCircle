<?php

namespace App\Repositories;

use App\Models\VRegisterModel;
use App\Repositories\BaseRepository;

/**
 * Class VRegisterModelRepository
 * @package App\Repositories
 * @version October 11, 2021, 5:20 am UTC
*/

class VRegisterModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VRegisterModel::class;
    }
}

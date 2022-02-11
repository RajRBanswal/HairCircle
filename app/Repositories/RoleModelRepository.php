<?php

namespace App\Repositories;

use App\Models\RoleModel;
use App\Repositories\BaseRepository;

/**
 * Class RoleModelRepository
 * @package App\Repositories
 * @version October 11, 2021, 6:36 am UTC
*/

class RoleModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return RoleModel::class;
    }
}

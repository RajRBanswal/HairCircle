<?php

namespace App\Repositories;

use App\Models\RefCategory;
use App\Repositories\BaseRepository;

/**
 * Class RefCategoryRepository
 * @package App\Repositories
 * @version October 11, 2021, 6:46 am UTC
*/

class RefCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'reward',
        'congratulatory_message',
        'target_no_refferrals',
        'points_per_refferral'
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
        return RefCategory::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\skill;
use App\Repositories\BaseRepository;

/**
 * Class skillRepository
 * @package App\Repositories
 * @version September 2, 2019, 1:55 pm UTC
*/

class skillRepository extends BaseRepository
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
        return skill::class;
    }
}

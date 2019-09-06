<?php

namespace App\Repositories;

use App\Models\skillUser;
use App\Repositories\BaseRepository;

/**
 * Class skillUserRepository
 * @package App\Repositories
 * @version September 2, 2019, 2:08 pm UTC
*/

class skillUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'skill_id',
        'year_of_experience'
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
        return skillUser::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Repositories\BaseRepository;

/**
 * Class TodoRepository
 * @package App\Repositories
 * @version July 30, 2022, 6:58 pm JST
*/

class TodoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'title',
        'status'
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
        return Todo::class;
    }
}

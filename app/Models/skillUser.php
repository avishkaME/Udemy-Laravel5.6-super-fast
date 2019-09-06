<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class skillUser
 * @package App\Models
 * @version September 2, 2019, 2:08 pm UTC
 *
 * @property integer user_id
 * @property integer skill_id
 * @property string year_of_experience
 */
class skillUser extends Model
{
    use SoftDeletes;

    public $table = 'skill_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'skill_id',
        'year_of_experience'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'skill_id' => 'integer',
        'year_of_experience' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'skill_id' => 'required'
    ];

    
}

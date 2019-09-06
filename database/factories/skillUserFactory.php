<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\skillUser;
use Faker\Generator as Faker;

$factory->define(skillUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'skill_id' => $faker->randomDigitNotNull,
        'year_of_experience' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

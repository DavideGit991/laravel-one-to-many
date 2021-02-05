<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Typology;
use Faker\Generator as Faker;

$factory->define(Typology::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'description'=>$faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});

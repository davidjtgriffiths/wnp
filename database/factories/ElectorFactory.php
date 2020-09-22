<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Elector;
use Faker\Generator as Faker;

$factory->define(Elector::class, function (Faker $faker) {
    return [
        'pd_e' => $faker->word,
        'ElectorNumberPrefix' => $faker->word,
        'ElectorNumber' => $faker->word,
        'ElectorNumberSuffix' => $faker->word,
        'ElectorMarkers' => $faker->word,
        'ElectorDOB' => $faker->date(),
        'ElectorSurname' => $faker->word,
        'ElectorForename' => $faker->word,
        'PostCode' => $faker->word,
        'Address1' => $faker->word,
        'Address2' => $faker->word,
        'Address3' => $faker->word,
        'Address4' => $faker->word,
        'Address5' => $faker->word,
        'Address6' => $faker->word,
    ];
});

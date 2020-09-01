<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'event_name' => $faker->domainName,
        'location' => $faker->city.'-'.$faker->citySuffix.' '.$faker->country
    ];
});

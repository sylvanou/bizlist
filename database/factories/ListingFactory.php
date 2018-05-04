<?php

use Faker\Generator as Faker;

$factory->define(App\Listing::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 100),
        'name' => $faker->company(),
        'address' => $faker->address(),
        'website' => $faker->url(),
        'phone' => $faker->phoneNumber(),
        'email' => $faker->companyEmail(),
        'bio' => $faker->text(100)
    ];
});
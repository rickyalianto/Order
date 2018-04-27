<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'status' => $faker->randomElement(['Confirm', 'Keep', 'Pending'])
    ];
});

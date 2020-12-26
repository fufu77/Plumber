<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\worker;
use Faker\Generator as Faker;

$factory->define(worker::class, function (Faker $faker) {
    return [
        'id_card_number' => $faker->personalIdentityNumber,
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => $faker->password,
        'address'        => $faker->address,
        'occupation'     => $faker->title,
        'phone'          => $faker->phoneNumber,
        'state'          => [
            'foo' => 'bar',
            [
                'name'       => $faker->name,
                'email'      => $faker->email,
                'password'   => $faker->password,
                'address'    => $faker->address,
                'occupation' => $faker->title,
                'phone'      => $faker->phoneNumber,
            ]
        ],
        'rate'           => [],
    ];
});

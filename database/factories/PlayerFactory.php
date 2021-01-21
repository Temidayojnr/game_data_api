<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'nickname' => $faker->unique()->name(rand(1, 20)),
        'password' => bcrypt($faker->password),
        'date_joined' => $faker->Carbon::now(),
        'last_login' => $faker->Carbon::now()->subMinutes(rand(1, 3835)),
    ];
});



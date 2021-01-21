<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Player::class, function (Faker $faker) {

    $date_joined = Carbon::now();

    $last_login = Carbon::now()->subDays(rand(1, 3835));

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'nickname' => $faker->unique()->name(rand(1, 20)),
        'password' => bcrypt($faker->password),
        'date_joined' => $date_joined,
        'last_login' => $last_login,
    ];
});



<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {

    $games = ['Call Of Duty', 'FIFA', 'Just Cause', 'Apex Legend'];

    foreach ($games as $key) {
        $game_version =  $key-(rand(2010, 2020));
    }

    //This is where i'm stuck, not sure if its the right thing to do
    // The Game table (NAME COLUMN) is supposed to look like this: 
    // FIFA 10,
    // FIFA 11,

    // APEX LEGEND 11,

    

    return [
        'name' => $faker->name,
        'version' => $faker->version,
        'date_added' => $faker->date,
    ];
});


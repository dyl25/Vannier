<?php

$factory->define(App\Creation::class, function (Faker\Generator $faker) {
    return [
        'creator_id' => 1,
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
    ];
});
<?php

$factory->define(App\Creation::class, function (Faker\Generator $faker) {
    $images = [
        'panier1.jpg',
        'panier2.jpg',
        'panier3.jpg',
        'panier4.jpg',
        'panier5.jpg',
        'panier6.jpg'
    ];

    return [
        'creator_id' => 1,
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => $images[rand(1, count($images)) - 1]
    ];
});
<?php

$factory->define(App\Creation::class, function (Faker\Generator $faker) {
    $images = [
        'img/panier1.jpg',
        'img/panier2.jpg',
        'img/panier3.jpg',
        'img/panier4.jpg',
        'img/panier5.jpg',
        'img/panier6.jpg'
    ];

    return [
        'creator_id' => 1,
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => $images[rand(1, count($images)) - 1]
    ];
});
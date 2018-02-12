<?php

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    $title = $faker->sentence;
    $images = [
        'img/panier1.jpg',
        'img/panier2.jpg',
        'img/panier3.jpg',
        'img/panier4.jpg',
        'img/panier5.jpg',
        'img/panier6.jpg'
    ];

    return [
        'author_id' => 1,
        'title' => $title,
        'slug' => str_slug($title),
        'content' => $faker->paragraph,
        'image' => $images[rand(1, count($images)) - 1]
    ];
});
<?php

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    $title = $faker->sentence;

    return [
        'author_id' => 1,
        'title' => $title,
        'slug' => str_slug($title),
        'content' => $faker->paragraph
    ];
});
<?php

use Faker\Generator as Faker;

$factory->define(App\Detail::class, function (Faker $faker) {
  $title = $faker->sentence(4);
    return [
        'category_id'=> rand(1,20),
        'delivery'=> $title,
        'description' => $title,
    ];
});

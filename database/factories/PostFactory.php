<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Post;


use App\Model;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
  return [
      'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
      'content' => $faker->text($maxNbChars = 250)
  ];
});

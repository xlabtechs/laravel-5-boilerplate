<?php

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use Faker\Generator;
use Webpatser\Uuid\Uuid;
use App\Models\Auth\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(Article::class, function (\Faker\Generator $faker) {

    static $reduce = 999;

    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence(10),
        'body' => $faker->paragraphs($faker->numberBetween(1, 3), true),
        'created_at' => \Carbon\Carbon::now()->subSeconds($reduce--),
    ];
});

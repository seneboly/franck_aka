<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    return [
        
        'title'=>$faker->sentence,
        'subtitle'=>$faker->sentence,
    	'content'=>$faker->realText(),
    	'slug'=>Str::slug($faker->sentence),
    	'category_id'=>rand(1,5),
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\todos::class, function (Faker $faker) {
    return [
        
        'name' => $faker->sentence(3),
        'describtion'=>$faker->sentence(2),
        'compleated'=>false

        







    ];
});

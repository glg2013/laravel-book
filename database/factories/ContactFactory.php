<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->unique()->name,
        'email' =>  $faker->unique()->email,
        'company_id'    =>  $faker->uuid,
        'company_size'  =>  rand(1, 999)
    ];
});

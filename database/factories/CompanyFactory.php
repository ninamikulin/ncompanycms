<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\User;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'email'=>$faker->email,
        'website'=>$faker->domainName,
        'user_id'=>factory(User::class),
    ];
});

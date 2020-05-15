<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nama_user' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'), //Password Standart 'password'
        'role' => 'admin',
        'nik' => $faker->unique()->ean13,
        'telfon' => '085251926752',
        'alamat' => $faker->address

    ];
});

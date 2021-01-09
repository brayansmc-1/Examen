<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
 
    use talento\Client;
    use Faker\Generator as Faker;
    use Illuminate\Support\Str;

    $factory->define(talento\Client::class, function (Faker $faker) {
        return [
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'email_verified_at' => now(),
                    'role' => ('client'),
                    'direccion' => Str::random(10),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
        ];
    });

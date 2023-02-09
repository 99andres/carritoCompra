<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->name,
        'email'=>$this->faker->Email,
        'password'=>'$2y$10$f6Wt75WBBIX6vkf6ReAteO4IcITop2IC7AeDwQs3jCsRbLaZwixX2',
        'perfil_id'=>$faker->numberBetween(1,2)

    ];
});

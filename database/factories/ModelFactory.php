<?php

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

$user_types = ['Administrator', 'Seller'];
foreach($user_types as $type){
    $user_type = new App\UserType();
    $user_type->user_type = $type;
    $user_type->save();
}

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'address' => $faker->streetAddress,
        'phone' => $faker->e164PhoneNumber,
        'user_type_id' => App\UserType::all()->random()->id,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

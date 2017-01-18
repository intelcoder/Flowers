<?php
use App\Models\Customers;
use App\Models\Address;
use App\Models\Products;
use App\Models\Colors;
use App\Models\Orders;
use Faker\Generator;

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Customers::class, function(Faker\Generator $faker) {
  $phone ='+'.$faker->randomDigitNotNull.' '.$faker->numerify('###').'-'.$faker->numerify('###').'-'.$faker->numerify('####');
  return [
    'last_name' =>  $faker->lastName,
    'first_name' => $faker->firstName,
    'phone' => (string)$phone,
    'email' => $faker->safeEmail,
    'address_id' => $faker->numberBetween($min=1, $max=100)
  ];
});
$factory->define(Address::class, function(Faker\Generator $faker){
    $postalCode = $faker->postcode;
    return [
      'address_code' => $faker->countryCode.'-'.$postalCode,
      'address1' => $faker->streetAddress,
      'city' => $faker->city,
      'province' => $faker->state,
      'country' => $faker->countryCode,
      'postal_code' => $postalCode
    ];
});
$factory->define(Products::class, function(Faker\Generator $faker){
  return [
    'product_code' => $faker->unique()->swiftBicNumber,
    'product_description' => $faker->text($maxNbChars = 150),
    'packing_inner' => $faker->randomNumber($nbDigits = 2),
    'packing_outer' => $faker->randomNumber($nbDigits = 2),
    'meast' =>  $faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 1),
    'color_id' => $faker->numberBetween($min=1 , $max=200)
  ];
});

$factory->define(Colors::class, function(Faker\Generator $faker){
  return [
    'color_code' => $faker->randomLetter.$faker->randomLetter."-".(string)$faker->numberBetween($min = 10, $max = 100),
    'color_name' => $faker->text($maxNbChars = 40),
  ];
});

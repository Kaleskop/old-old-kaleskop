<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

use App\Brand;
use App\Business;

$factory->define( Brand::class, function( Faker $faker ) {
 return [
  'business_id' => function() {
   return factory( Business::class )->create()->id;
  },
  'name'        => $faker->firstName,
  'description' => $faker->text(550),
  'logo_path'   => null
 ];
} );

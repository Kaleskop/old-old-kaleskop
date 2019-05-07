<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

use App\Adv;
use App\User;

$factory->define( Adv::class, function( Faker $faker ) {
 return [
  'user_id' => function() {
   return factory( User::class )->create()->id;
  },
  'title'        => $faker->text(95),
  'endpoint'     => $faker->url,
  'clicks'       => $faker->randomNumber,
  'published_at' => null,
 ];
} );

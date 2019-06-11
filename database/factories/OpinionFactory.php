<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

use Agpretto\Opineon\Opinion;
use App\User;
use App\Adv;

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

$factory->define( Opinion::class, function( Faker $faker ) {
 return [
  'author_id' => function() {
   return factory( User::class )->create()->id;
  },
  'subject_id' => function() {
   return factory( Adv::class )->create()->id;
  },
  'subject_type' => Adv::class,
  'body' => $faker->text(350)
 ];
} );

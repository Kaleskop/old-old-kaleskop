<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

use Agpretto\Opineon\Comment;
use Agpretto\Opineon\Opinion;
use App\User;

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

$factory->define( Comment::class, function( Faker $faker ) {
 return [
  'author_id' => function() {
   return factory( User::class )->create()->id;
  },
  'author_type' => User::class,
  'subject_id' => function() {
   return factory( Opinion::class )->create()->id;
  },
  'subject_type' => Opinion::class,
  'body' => $faker->text(250)
 ];
} );

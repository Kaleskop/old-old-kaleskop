<?php

use Illuminate\Database\Seeder;

use Agpretto\Opineon\Comment;
use Agpretto\Opineon\Opinion;
use App\User;

class CommentSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  $opinions = Opinion::inRandomOrder()->get();

  foreach( $opinions as $opinion ) {
   $x = rand(0,17);

   for( $a=0; $a<$x; $a++ ) {
    factory( Comment::class )->create( [
     'author_id' => User::inRandomOrder()->first()->id,
     'subject_id' => $opinion->id
    ] );
   }
  }
 }
}

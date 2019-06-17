<?php

use Illuminate\Database\Seeder;

use Agpretto\Opineon\Opinion;
use Agpretto\Opineon\Comment;
use App\Adv;
use App\User;

class OpineonSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  $advs = Adv::inRandomOrder()->get();

  foreach( $advs as $adv ) {
   $x = rand(0,13);

   for( $a=0; $a<$x; $a++ ) {
    factory( Opinion::class )->create( [
     'author_id'=>User::inRandomOrder()->first()->id,
     'subject_id'=>$adv->id
    ] );
   }
  }
 }
}

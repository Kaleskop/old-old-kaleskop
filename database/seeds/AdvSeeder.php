<?php

use Illuminate\Database\Seeder;

use App\Adv;
use App\User;

class AdvSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  $users = User::inRandomOrder()->get()->filter(function( $user ) {
   return $user->hasBusiness();
  });

  foreach( $users as $user ) {
   factory( Adv::class, rand(0,5) )->create( [ 'user_id'=>$user->id ] );
  }
 }
}

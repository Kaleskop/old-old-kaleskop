<?php

use Illuminate\Database\Seeder;

use App\Brand;
use App\User;

class BrandSeeder extends Seeder {

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
   factory( Brand::class, rand(0,7) )->create( [ 'business_id'=>$user->business->id ] );
  }
 }
}

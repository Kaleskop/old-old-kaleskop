<?php

use Illuminate\Database\Seeder;

use App\Business;

class SponsorSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  $businesses = Business::all();

  foreach( $businesses as $business ) {
   $user = $business->manager;

   $x = rand(1,7);
   for( $a=0; $a<$x; $a++ ) {
    $adv = $user->advs()->inRandomOrder()->first();
    $brand = $business->brands()->inRandomOrder()->first();
    
    if ( $brand ) {
     $brand->advs()->attach( $adv );
    }
   }
  }
 }
}

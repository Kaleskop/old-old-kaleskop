<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

 /**
  * Seed the application's database.
  *
  * @return void
  */
 public function run() {
  $this->call( UserSeeder::class );
  $this->call( BusinessSeeder::class );
  $this->call( AdvSeeder::class );
  $this->call( BrandSeeder::class );
  $this->call( VideoSeeder::class );
  $this->call( PlanSeeder::class );
  $this->call( ManifestoSeeder::class );
  $this->call( SponsorSeeder::class );
  $this->call( OpineonSeeder::class );
  $this->call( CommentSeeder::class );
 }
}

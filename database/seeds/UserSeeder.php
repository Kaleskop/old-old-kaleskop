<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  factory( User::class, rand(1,120) )->create();
 }
}

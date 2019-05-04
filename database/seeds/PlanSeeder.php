<?php

use Illuminate\Database\Seeder;

use App\Plan;

class PlanSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  // - yearly
  factory( Plan::class )->create( [
   'product_id' => 'prod_EHotzEytjeP74I',
   'product_name' => 'Subscriptions',
   'plan_id' => 'plan_EHozlsAe2RfwAp'
  ] );
  // - half
  factory( Plan::class )->create( [
   'product_id' => 'prod_EHotzEytjeP74I',
   'product_name' => 'Subscriptions',
   'plan_id' => 'plan_EHoyqsBfRjYsSg'
  ] );
  // - monthly
  factory( Plan::class )->create( [
   'product_id' => 'prod_EHotzEytjeP74I',
   'product_name' => 'Subscriptions',
   'plan_id' => 'plan_EHouRyzHQYawXA'
  ] );
 }
}

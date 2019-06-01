<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Plan;
use App\Business;
use Storage;

class SubscriptionsTest extends TestCase {

 use RefreshDatabase;

 public function test_AuthUser_CanInsertSubscriptionPlan_HasPlan() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $plan = factory( Plan::class )->make();

  $response = $this->post( route( 'plans.store' ), $plan->toArray() );

  $this->assertDatabaseHas( 'plans', [ 'name'=>$plan->name ] );
 }

 public function test_AuthUser_CanEditSubscriptionPlan_HasPlan() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $plan = factory( Plan::class )->create();

  $data = $plan->toArray();
  $data['name'] = 'enterprise';
  $response = $this->patch( route( 'plans.update', $plan ), $data );

  $this->assertDatabaseHas( 'plans', [ 'name'=>$data['name'] ] );
 }

 public function test_AuthUser_CanDeleteSubscriptionPlan_MissingPlan() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $plan = factory( Plan::class )->create();

  $response = $this->delete( route( 'plans.destroy', $plan ) );

  $this->assertDatabaseMissing( 'plans', [ 'id'=>$plan->id ] );
 }

 public function test_AuthUser_BusinessRegistrationCreateStripeCustomer_NotNullStripeId() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->make();

  $response = $this->post( route( 'business.store' ), $business->toArray() );

  $business = Business::where( 'name', $business->name )->first();
  $this->assertNotNull( $business->stripe_id );
 }

 public function test_BusinessUser_CanSubscribeToPlan_HasSubscription() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_F7VBkOHU297sxU', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );

  $this->assertDatabaseHas( 'subscriptions', [ 'business_id'=>$business->id ] );
 }

 public function test_SubscribedUser_CanSwapToPlan_HasSubscription() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_F7VBkOHU297sxU', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );

  $plan = factory( Plan::class )->create( [
   'product_id'=>'prod_EHotzEytjeP74I',
   'product_name'=>'Subscriptions',
   'plan_id'=>'plan_EHoyqsBfRjYsSg'
  ] );
  $response = $this->patch( route( 'plans.swap', $plan ) );

  $this->assertDatabaseHas( 'subscriptions', [ 'business_id'=>$business->id, 'stripe_plan'=>$plan->plan_id ] );
 }

 public function test_SubscribedUser_CanCancelSubscription_HasSubscription() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_F7VBkOHU297sxU', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $plan = factory( Plan::class )->create( [
   'product_id'=>'prod_EHotzEytjeP74I',
   'product_name'=>'Subscriptions',
   'plan_id'=>'plan_F7VBkOHU297sxU'
  ] );
  $response = $this->delete( route( 'plans.cancel', $plan ) );

  $this->assertNotNull( $business->subscription( 'Subscriptions' )->ends_at );
 }
}

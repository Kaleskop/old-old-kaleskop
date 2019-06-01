<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Business;
use App\Adv;
use Storage;

class AdvertisementTest extends TestCase {

 use RefreshDatabase;

 public function test_User_EndpointClickUpdateAdvClicks_HasOneMoreClick() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $adv = factory( Adv::class )->create( [ 'user_id'=>$user->id ] );

  $response = $this->get( route( 'website.endpoint', $adv ) );

  $this->assertDatabaseHas( 'advs', [ 'id'=>$adv->id, 'clicks'=>1 ] );
 }

 public function test_SubscribedUser_CanInsertAdv_HasAdv() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_F7VBkOHU297sxU', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );

  $adv = factory( Adv::class )->make();
  $response = $this->post( route( 'advs.store' ), $adv->toArray() );

  $this->assertDatabaseHas( 'advs', [ 'title'=>$adv->title ] );
 }

 public function test_SubscribedUser_CanDeleteAdv_IsSoftDeleted() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_F7VBkOHU297sxU', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $adv = factory( Adv::class )->create();

  $response = $this->delete( route( 'advs.destroy', $adv ) );

  $this->assertSoftDeleted( 'advs', [ 'id'=>$adv->id ] );
 }
}

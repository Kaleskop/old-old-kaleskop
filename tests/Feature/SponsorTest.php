<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Brand;
use App\Adv;
use App\User;
use App\Business;
use Storage;

class SponsorTest extends TestCase {

 use RefreshDatabase;

 public function test_Brand_CanBeAttachedToAdv_IsAttached() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_EHouRyzHQYawXA', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $brand = factory( Brand::class )->create();
  $advs = factory( Adv::class, 5 )->create();

  $response = $this->post( route( 'brands.linkTo', $brand ), [ 'advs'=>$advs->pluck( 'id' )->toArray() ] );

  $this->assertDatabaseHas( 'sponsor', [ 'brand_id'=>$brand->id, 'adv_id'=>$advs->first()->id ] );
 }

 public function test_Adv_CanBeAttachedToBrand_IsAttached() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_EHouRyzHQYawXA', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $adv = factory( Adv::class )->create();
  $brands = factory( Brand::class, 3 )->create();

  $response = $this->post( route( 'advs.sponsor', $adv ), [ 'brands'=>$brands->pluck( 'id' )->toArray() ] );

  $this->assertDatabaseHas( 'sponsor', [ 'adv_id'=>$adv->id, 'brand_id'=>$brands->first()->id ] );
 }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Business;
use App\User;
use Storage;

class BusinessManagementTest extends TestCase {

 use RefreshDatabase;

 public function test_AuthUser_CanRegisterBusiness_DatabaseHasBusiness() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->make( [ 'terms'=>'true' ] );

  $response = $this->post( route( 'business.store' ), $business->toArray() );

  $this->assertDatabaseHas( 'businesses', [ 'vat'=>$business->vat ] );
 }

 public function test_Business_CanAccessBusinessManagementPage_AssertSuccessful() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ]);

  $response = $this->get( route( 'business.index' ) );

  $response->assertSuccessful();
 }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Brand;
use App\User;
use App\Business;
use Storage;

class BrandsTest extends TestCase {

 use RefreshDatabase;

 public function test_AuthUser_CannotRegisterBrands_AssertRedirect() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $brand = factory( Brand::class )->make();

  $response = $this->post( route( 'brands.store' ), $brand->toArray() );

  $response->assertRedirect( route( 'account.business' ) );
 }

 public function test_BusinessUser_CanInsertABrand_HasBrand() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );

  $brand = factory( Brand::class )->make( [ 'business_id'=>$business->id ] );
  $response = $this->post( route( 'brands.store' ), $brand->toArray() );

  $this->assertDatabaseHas( 'brands', [ 'name'=>$brand->name ] );
 }

 public function test_BusinessUser_CanEditBrandData_HasBrand() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $brand = factory( Brand::class )->create( [ 'business_id'=>$business->id ] );

  $data = $brand->toArray();
  $data['name'] = 'Giuditta';
  $response = $this->patch( route( 'brands.update', $brand ), $data );

  $this->assertDatabaseHas( 'brands', [ 'name'=>$data['name'] ] );
 }

 public function test_BusinessUser_CanDeleteABrand_IsSoftDeleted() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $brand = factory( Brand::class )->create( [ 'business_id'=>$business->id ]);

  $response = $this->delete( route( 'brands.destroy', $brand ) );

  $this->assertSoftDeleted( 'brands', [ 'id'=>$brand->id ] );
 }
}

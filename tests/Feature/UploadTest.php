<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Business;
use Storage;
use Illuminate\Http\UploadedFile;

class UploadTest extends TestCase {

 use RefreshDatabase;

 public function test_AuthUser_BusinessRegistrationAssignUUID_HasUUID() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->make();

  $response = $this->post( route( 'business.store' ), $business->toArray() );
  $db = Business::where( 'name', $business->name )->first();

  $this->assertDatabaseHas( 'businesses', [ 'id'=>$db->id, 'folder'=>$db->folder ] );
 }

 public function test_SubscribedUser_CanUploadVideos_FileExists() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_EHouRyzHQYawXA', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $file = UploadedFile::fake()->create( 'fakevideo.mp4', 15200 );
  $response = $this->post( route( 'videos.upload' ), [ 'uservideo'=>$file ] );

  Storage::disk( 's3' )->assertExists( "{$business->folder}/videos/{$file->hashName()}" );
 }

 public function test_SubscribedUser_CanDeleteUploadedVideos_FileMissing() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_EHouRyzHQYawXA', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $file = UploadedFile::fake()->create( 'fakevideo.mp4', 15200 );
  $this->post( route( 'videos.upload' ), [ 'uservideo'=>$file ] );
  $video = $user->business->videos()->first();
  $response = $this->delete( route( 'videos.destroy', $video ) );

  Storage::disk( 's3' )->assertMissing( $video->path );
 }
}

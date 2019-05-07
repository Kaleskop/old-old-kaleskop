<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Video;
use App\Adv;
use App\User;
use App\Business;
use Storage;

class ManifestoTest extends TestCase {

 use RefreshDatabase;

 public function test_Video_CanBeAttachedToAdv_IsAttached() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_EHouRyzHQYawXA', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $video = factory( Video::class )->create();
  $advs = factory( Adv::class, 5 )->create();

  $response = $this->post( route( 'videos.linkTo', $video ), [ 'advs'=>$advs->pluck( 'id' )->toArray() ] );

  $this->assertDatabaseHas( 'manifesto', [ 'video_id'=>$video->id, 'adv_id'=>$advs->first()->id ] );
 }

 public function test_Adv_CanBeAttachedToVideo_IsAttached() {
  Storage::fake( 's3' );

  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $business = factory( Business::class )->create( [ 'user_id'=>$user->id ] );
  $data = [ 'plan'=>'plan_EHouRyzHQYawXA', 'stripeToken'=>'tok_visa' ];
  $this->post( route( 'plans.subscribe' ), $data );
  $adv = factory( Adv::class )->create();
  $videos = factory( Video::class, 3 )->create();

  $response = $this->post( route( 'advs.linkTo', $adv ), [ 'videos'=>$videos->pluck( 'id' )->toArray() ] );

  $this->assertDatabaseHas( 'manifesto', [ 'adv_id'=>$adv->id, 'video_id'=>$videos->first()->id ] );
 }
}

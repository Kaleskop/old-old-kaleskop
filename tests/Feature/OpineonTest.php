<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Adv;

class OpineonTest extends TestCase {

 use RefreshDatabase;

 public function test_AuthUser_CanExpressOpinionOnAdv_HasOpinion() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $adv = factory( Adv::class )->create();

  $data = [ 'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate convallis felis vitae lacinia.' ];
  $response = $this->post( route( 'opineon.express', $adv ), $data );

  $this->assertDatabaseHas( 'opinions', [ 'author_id'=>$user->id, 'subject_id'=>$adv->id, 'body'=>$data['body'] ] );
 }

 public function test_AuthUser_CanModifyOpinionOnAdv_HasNewOpinion() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $adv = factory( Adv::class )->create();
  $data = [ 'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate convallis felis vitae lacinia.' ];
  $this->post( route( 'opineon.express', $adv ), $data );

  $newdata = [ 'body'=>'My new opinion' ];
  $response = $this->post( route( 'opineon.express', $adv ), $newdata );

  $this->assertDatabaseHas( 'opinions', [ 'author_id'=>$user->id, 'subject_id'=>$adv->id, 'body'=>$newdata['body'] ] );
 }

 public function test_AuthUser_WhenModifyOpinionOnAdvOldOpinion_IsSoftDeleted() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $adv = factory( Adv::class )->create();
  $data = [ 'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate convallis felis vitae lacinia.' ];
  $this->post( route( 'opineon.express', $adv ), $data );

  $newdata = [ 'body'=>'My new opinion' ];
  $response = $this->post( route( 'opineon.express', $adv ), $newdata );

  $this->assertSoftDeleted( 'opinions', [ 'author_id'=>$user->id, 'subject_id'=>$adv->id, 'body'=>$data['body'] ] );
 }
}

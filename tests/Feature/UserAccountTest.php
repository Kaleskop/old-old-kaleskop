<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class UserAccountTest extends TestCase {

 use RefreshDatabase;

 public function test_User_CanRegister_DatabaseHasUser() {
  $data = [
   'name' => 'Name',
   'email' => 'a@b.c',
   'password' => 'password',
   'password_confirmation' => 'password'
  ];

  $response = $this->post( route( 'register' ), $data );

  $this->assertDatabaseHas( 'users', [ 'email'=>$data['email'] ] );
 }

 public function test_User_LoginIn_IsAuthenticated() {
  $user = factory( User::class )->create();

  $data = [ 'email'=>$user->email, 'password'=>'password' ];
  $response = $this->post( route( 'login' ), $data );

  $this->assertAuthenticatedAs( $user );
 }
 
 public function test_User_LogOut_IsLoggedOut() {
  $user = factory( User::class )->create();

  $data = [ 'email'=>$user->email, 'password'=>'password' ];
  $this->post( route( 'login' ), $data );
  $response = $this->post( route( 'logout' ) );

  $this->assertGuest();
 }
}

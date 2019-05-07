<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AccountController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
 }


 // - view actions

 public function index() {
  $user = Auth::user();
 }
}

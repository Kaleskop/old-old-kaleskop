<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Agpretto\Opineon\Opinion;
use App\Adv;

class OpineonController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
  $this->middleware( 'verified' );
 }

 public function express( Request $request, Adv $subject ) {
  $this->validate( $request, [
   'body' => [ 'required', 'string' ]
  ] );

  $opinion = $request->user()->express( $request->all(), $subject );

  return back();
 }

 public function comment( Request $request, Opinion $opinion ) {
  $this->validate( $request, [
   'body' => [ 'required', 'string' ]
  ] );

  $comment = $request->user()->comment( $request->all(), $opinion );

  return back();
 }
}

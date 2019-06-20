<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Agpretto\Opineon\Opinion;

class OpineonController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' )->except( 'comments' );
  $this->middleware( 'verified' )->except( 'comments' );
 }

 public function comments( Opinion $opinion ) {
  return $opinion->comments()->latest()->get();
 }

 public function comment( Request $request, Opinion $opinion ) {
  $this->validate( $request, [
   'body' => [ 'required', 'string' ]
  ] );

  $comment = $request->user()->comment( $request->all(), $opinion );

  if ( $request->wantsJson() ) {
   return $comment;
  }

  return back();
 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adv;
use App\Auth;

class AdvsController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
  $this->middleware( 'business' );
  $this->middleware( 'subscribed' );
 }

 public function store( Request $request ) {
  $this->validate( $request, [
   'title'    => [ 'required', 'string', 'max:255' ],
   'endpoint' => [ 'required', 'string', 'max:255' ],
  ] );

  $adv = $request->user()->advs()->create( $request->all() );

  return back();
 }

 public function destroy( Adv $adv ) {
  $adv->delete();

  return back();
 }


 // - view actions

 public function index() {
  $advs = Auth::user()->advs;

  return view( 'layouts.wrapper', [ 'page'=>'advs.index-page' ] )
   ->with( 'advs', $advs );
 }

 public function create() {
  return view( 'layouts.wrapper', [ 'page'=>'advs.create-page' ] );
 }
}

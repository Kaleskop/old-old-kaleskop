<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adv;
use Auth;

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

 public function manifestoTo( Request $request, Adv $adv ) {
  $this->validate( $request, [
   'videos' => [ 'required', 'array' ]
  ] );

  $adv->videos()->sync( $request->videos );

  return back();
 }

 public function sponsorTo( Request $request, Adv $adv ) {
  $this->validate( $request, [
   'brands' => [ 'required', 'array' ]
  ] );

  $adv->brands()->sync( $request->brands );

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

 public function manifesto( Adv $adv ) {
  $videos = Auth::user()->business->videos()->latest()->get();

  return view( 'layouts.wrapper', [ 'page'=>'advs.manifesto-page' ] )
   ->with( 'adv', $adv )
   ->with( 'videos', $videos );
 }

 public function sponsor( Adv $adv ) {
  $brands = Auth::user()->business->brands()->latest()->get();

  return view( 'layouts.wrapper', [ 'page'=>'advs.sponsor-page' ] )
   ->with( 'adv', $adv )
   ->with( 'brands', $brands );
 }
}

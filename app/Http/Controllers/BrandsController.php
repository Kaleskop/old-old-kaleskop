<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use Auth;

class BrandsController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
  $this->middleware( 'business' );
  $this->middleware( 'subscribed' )->only( [ 'sponsor', 'linkTo' ] );
 }

 public function store( Request $request ) {
  $this->validate( $request, [
   'name'        => [ 'required', 'string', 'max:255' ],
   'description' => [ 'required', 'string' ],
   'userfile'    => [ 'nullable', 'image' ],
  ] );

  $brand = $request->user()->business->brands()->create( $request->all() );

  if ( $request->has( 'userfile' ) ) {
   $path = $request->file( 'userfile' )->store( 'logos', 'public' );
   $brand->update( [ 'logo_path'=>$path ] );
  }

  return back();
 }

 public function update( Request $request, Brand $brand ) {
  $this->validate( $request, [
   'name'        => [ 'required', 'string', 'max:255' ],
   'description' => [ 'required', 'string' ],
   'userfile'    => [ 'nullable', 'image' ],
  ] );

  $brand->update( $request->all() );

  if ( $request->has( 'userfile' ) ) {
   $path = $request->file( 'userfile' )->store( 'logos', 'public' );
   $brand->update( [ 'logo_path'=>$path ] );
  }

  return back();
 }

 public function destroy( Brand $brand ) {
  $brand->delete();

  return back();
 }

 public function linkTo( Request $request, Brand $brand ) {
  $this->validate( $request, [
   'advs' => [ 'required', 'array' ]
  ] );

  $brand->advs()->attach( $request->advs );

  return back();
 }


 // - view actions

 public function index() {
  $brands = Auth::user()->business->brands()->latest()->get();

  return view( 'layouts.wrapper', [ 'page'=>'brands.index-page' ] )
   ->with( 'brands', $brands );
 }

 public function create() {
  return view( 'layouts.wrapper', [ 'page'=>'brands.create-page' ] );
 }

 public function sponsor( Brand $brand ) {
  $advs = Auth::user()->advs;

  return view( 'layouts.wrapper', [ 'page'=>'brands.sponsor-page' ] )
   ->with( 'brand', $brand )
   ->with( 'advs', $advs );
 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Business;
use Auth;
use App\Plan;

class BusinessController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
  $this->middleware( 'business' )->only( [ 'index', 'subscriptions' ] );
 }

 public function store( Request $request ) {
  $this->validate( $request, [
   'country'       => [ 'required', 'string', 'max:255' ],
   'name'          => [ 'required', 'string', 'max:255' ],
   'email'         => [ 'required', 'email', 'unique:businesses,email' ],
   'vat'           => [ 'required', 'max:15', 'unique:businesses,vat' ],
   'address_line1' => [ 'required', 'string', 'max:255' ],
   'city'          => [ 'required', 'string', 'max:255' ],
   'cap'           => [ 'required', 'string', 'max:11' ],
   'terms'         => [ 'accepted' ],
  ] );

  $business = $request->user()->business()->create( $request->all() );

  return redirect()->route( 'business.index' );
 }

 // - view actions

 public function index() {
  $business = Auth::user()->business;

  return view( 'layouts.wrapper', [ 'page'=>'business.index-page' ] )
   ->with( 'business', $business );
 }

 public function subscriptions() {
  $business = Auth::user()->business;
  $plans = Plan::latest()->get();

  return view( 'layouts.wrapper', [ 'page'=>'business.subscriptions-page' ] )
   ->with( 'business', $business )
   ->with( 'plans', $plans );
 }

 public function invoice( Request $request, $invoice ) {
  return $request->user()->business->downloadInvoice( $invoice );
 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Plan;
use Carbon\Carbon;

class PlansController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
  $this->middleware( 'business' )->only( [ 'subscribe', 'swap', 'cancel' ] );
  $this->middleware( 'subscribed' )->only( [ 'swap', 'cancel' ] );
 }

 public function store( Request $request ) {
  $this->validate( $request, [
   'name'         => [ 'required', 'string', 'max:255', 'unique:plans' ],
   'description'  => [ 'required', 'string' ],
   'price'        => [ 'required', 'numeric' ],
   'product_id'   => [ 'required', 'string' ],
   'product_name' => [ 'required', 'string' ],
   'plan_id'      => [ 'required', 'string' ],
  ] );

  $plan = Plan::create( $request->all() );

  return back();
 }

 public function update( Request $request, Plan $plan ) {
  $this->validate( $request, [
   'name'        => [
    'required', 'string', 'max:255',
    Rule::unique( 'plans' )->ignore( $plan->id )
   ],
   'description'  => [ 'required', 'string' ],
   'price'        => [ 'required', 'numeric' ],
   'product_id'   => [ 'required', 'string' ],
   'product_name' => [ 'required', 'string' ],
   'plan_id'      => [ 'required', 'string' ],
  ] );

  $plan->update( $request->all() );

  return back();
 }

 public function destroy( Plan $plan ) {
  $plan->delete();

  return back();
 }

 public function subscribe( Request $request ) {
  $this->validate( $request, [
   'plan'        => [ 'required' ],
   'stripeToken' => [ 'required' ],
   'coupon'      => [ 'nullable', 'string', 'max:255' ],
  ] );

  $business = $request->user()->business;

  $subscription = $business->newSubscription( 'Subscriptions', $request->plan );
  if ( $request->has( 'coupon' ) && !empty( $request->coupon ) ) {
   $subscription->withCoupon( $request->coupon );
  }
  $subscription = $subscription->create( $request->stripeToken );

  return back();
 }

 public function swap( Request $request, Plan $plan ) {
  $this->validate( $request, [
   'coupon' => [ 'nullable', 'string', 'max:255' ],
  ] );

  $business = $request->user()->business;

  $subscription = $business->subscription( $plan->product_name )->swap( $plan->plan_id );
  if ( $request->has( 'coupon' ) && !empty( $request->coupon ) ) {
   $subscription->withCoupon( $request->coupon );
  }

  return back();
 }

 public function cancel( Request $request, Plan $plan ) {
  $request->user()->business->subscription( $plan->product_name )->cancel();

  return back();
 }


 // - view actions

 public function index() {
  $plans = Plan::latest()->get();

 }

 public function create() {}
}

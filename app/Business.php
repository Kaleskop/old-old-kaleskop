<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Laravel\Cashier\Billable;
use Carbon\Carbon;
use Storage;

class Business extends Model {

 use Billable;

 /**
  * The table associated with the model
  *
  * @var string
  */
 protected $table = 'businesses';

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
  'folder', 'country', 'name', 'email', 'vat', 'address_line1', 'city', 'cap', 'terms_at'
 ];


 /**
  * Register methods when booting model
  */
 public static function boot() {
  parent::boot();

  static::creating( function( $model ) {
   $model->folder = (string) Str::orderedUuid();
   $model->terms_at = Carbon::now();
  } );

  static::created( function( $model ) {
   // - create the stripe customer before any possible error
   $model->createStripeCustomer();

   // - create folder on storage
   Storage::disk( 's3' )->makeDirectory( $model->folder );
  } );
 }

 /**
  * Specify the tax percentage business pays on a subscription
  */
 public function taxPercentage() {
  return 22;
 }


 // - relations

 /**
  * A business belongs to a user
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function manager() {
  return $this->belongsTo( User::class, 'user_id' );
 }

 /**
  * A business may have many brands
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function brands() {
  return $this->hasMany( Brand::class, 'business_id' );
 }

 /**
  * A business may have many videos
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function videos() {
  return $this->hasMany( Video::class, 'business_id' );
 }


 // - checks

 /**
  * Checks if business is subscribed to a plan
  */
 public function isSubscribed() {
  $result = false;
  $plans = Plan::all();

  if ( $plans->isNotEmpty() ) {
   foreach( $plans as $plan ) {
    if ( $this->subscribed( $plan->product_name ) ) {
     $result = true;
    }
   }
  }

  return $result;
 }
 


 // - helpers

 /**
  * Create the stripe customer for this model
  */
 public function createStripeCustomer() {
  $customer = [
   'email'=>$this->email,
   'shipping'=>[
    'address'=>[
     'country'=>$this->country,
     'line1'=>$this->address_line1,
     'city'=>$this->city,
     'postal_code'=>$this->cap
    ],
    'name'=>$this->name
   ],
   'tax_info'=>[
    'tax_id'=>$this->vat,
    'type'=>'vat'
   ]
  ];
  $this->createAsStripeCustomer( $customer );
 }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model {

 use SoftDeletes;

 /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'brands';

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
  'name', 'description', 'logo_path',
 ];


 /**
  * Register methods when booting model
  */
 public static function boot() {
  parent::boot();

  static::saving( function( $model ) {
   $model->slug = str_slug( $model->name, '-' );
  } );
 }


 // - relations

 /**
  * A brand belongs to a business
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function owner() {
  return $this->belongsTo( Business::class, 'business_id' );
 }

 /**
  * A brand may have many advs
  *
  * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
  */
 public function advs() {
  return $this->belongsToMany( Adv::class, 'sponsor', 'brand_id', 'adv_id' );
 }
}

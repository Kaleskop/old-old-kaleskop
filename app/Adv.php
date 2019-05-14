<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\HasClicks;
use Agpretto\Opineon\Traits\HasOpinions;

class Adv extends Model {

 use SoftDeletes, HasClicks, HasOpinions;

 /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'advs';

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [ 'title', 'endpoint', 'clicks', 'published_at' ];

 /**
  * The relationships that should always be loaded.
  *
  * @var array
  */
 protected $with = [ 'videos' ];

 /**
  * Register methods when booting model
  */
 public static function boot() {
  parent::boot();

  static::creating( function( $model ) {
   $model->clicks = 0;
  } );
 }


 // - relations

 /**
  * An adv belongs to a brand
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function owner() {
  return $this->belongsTo( User::class, 'user_id' );
 }

 /**
  * An adv may have many videos
  *
  * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
  */
 public function videos() {
  return $this->belongsToMany( Video::class, 'manifesto', 'adv_id', 'video_id' )->withTimestamps();
 }

 /**
  * An adv may have many brands
  *
  * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
  */
 public function brands() {
  return $this->belongsToMany( Brand::class, 'sponsor', 'adv_id', 'brand_id' )->withTimestamps();
 }
}

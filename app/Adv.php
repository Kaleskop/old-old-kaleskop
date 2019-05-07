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
}

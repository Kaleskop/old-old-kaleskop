<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Agpretto\Opineon\Traits\Opineon;
use Agpretto\Opineon\Traits\CanComment;

class User extends Authenticatable implements MustVerifyEmail {

 use Notifiable, Opineon, CanComment;

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
  'name', 'email', 'password', 'terms_at'
 ];

 /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
 protected $hidden = [
  'password', 'remember_token',
 ];

 /**
  * The attributes that should be cast to native types.
  *
  * @var array
  */
 protected $casts = [
  'email_verified_at' => 'datetime',
 ];


 // - relations

 /**
  * A user may have one business
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasOne
  */
 public function business() {
  return $this->hasOne( Business::class, 'user_id' );
 }

 /**
  * A user may have many advs
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function advs() {
  return $this->hasMany( Adv::class, 'user_id' );
 }


 // - checks

 /**
  * Checks if the user has a business
  *
  * @return bool
  */
 public function hasBusiness() {
  return $this->business()->exists();
 }
}

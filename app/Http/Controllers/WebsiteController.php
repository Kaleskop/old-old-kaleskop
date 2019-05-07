<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adv;

class WebsiteController extends Controller {

 public function endpoint( Adv $adv ) {
  $adv = $adv->incrementClicks();

  return redirect( $adv->endpoint );
 }


 // - view actions

 public function homepage() {
  return '';
 }
}

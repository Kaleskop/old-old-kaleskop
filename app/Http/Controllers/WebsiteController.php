<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adv;
use App\Brand;

class WebsiteController extends Controller {

 public function endpoint( Adv $adv ) {
  $adv = $adv->incrementClicks();

  return redirect( $adv->endpoint );
 }


 // - view actions

 public function homepage() {
  return '';
 }

 public function channels() {
  $advs = Adv::latest()->get();

  return view( 'layouts.wrapper', [ 'page'=>'website.channels-page' ] )
   ->with( 'advs', $advs );
 }

 public function advs( Brand $brand, Adv $adv = null ) {
  return view( 'layouts.wrapper', [ 'page'=>'website.advs-page' ] )
   ->with( 'brand', $brand )
   ->with( 'adv', $adv );
 }
}

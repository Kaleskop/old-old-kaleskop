<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Business;
use Auth;

class BusinessController extends Controller {

 public function store( Request $request ) {
  $this->validate( $request, [
   'country'       => [ 'required', 'string', 'max:255' ],
   'name'          => [ 'required', 'string', 'max:255' ],
   'email'         => [ 'required', 'email', 'unique:businesses,email' ],
   'vat'           => [ 'required', 'max:15', 'unique:businesses,vat' ],
   'address_line1' => [ 'required', 'string', 'max:255' ],
   'city'          => [ 'required', 'string', 'max:255' ],
   'cap'           => [ 'required', 'string', 'max:11' ],
  ] );

  $business = $request->user()->business()->create( $request->all() );

  return back();
 }

 // - view actions

 public function index() {
  $business = Auth::user()->business;
 }
}

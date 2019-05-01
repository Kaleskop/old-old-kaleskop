<?php

namespace App\Http\Middleware;

use Closure;

class SubscribedMiddleware {

 /**
  * Handle an incoming request.
  *
  * @param \Illuminate\Http\Request $request
  * @param \Closure $next
  * @return mixed
  */
 public function handle( $request, Closure $next ) {
  if ( !$request->user()->business->isSubscribed() ) {

   return redirect()->route( 'business.subscriptions' );
  }

  return $next( $request );
 }
}

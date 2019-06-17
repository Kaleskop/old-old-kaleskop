@if ( Session::has( 'message' ) )
 <flash-message v-bind:message="{{ Session::get( 'message' ) }}"></flash-message>

@else
 <flash-message></flash-message>

@endif

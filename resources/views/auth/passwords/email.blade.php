@extends(  'layouts.layout' )

@section( 'body' )
<section>
 <header>
  <h2>{{ __( 'Reset password' ) }}</h2>
  <p>{{ config( 'app.name' ) }}</p>
 </header>

 @if ( session( 'status' ) )
  {{ session( 'status' ) }}
 @endif

 @include( 'auth.passwords.email-form' )

</section>

@endsection

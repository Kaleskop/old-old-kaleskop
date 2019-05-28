@extends(  'layouts.layout' )

@section( 'body' )
<section class="px-8 py-16">
 <header>
  <h2>{{ __( 'Reset password' ) }}</h2>
  <p>{{ config( 'app.name' ) }}</p>
 </header>

 @include( 'auth.passwords.reset-form' )

</section>

@endsection

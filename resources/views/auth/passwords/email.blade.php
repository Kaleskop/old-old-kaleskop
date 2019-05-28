@extends(  'layouts.layout' )

@section( 'body' )
<section class="px-8 py-16">
 <header class="mb-4 text-center">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Reset password' ) }}</h2>
  <p class="font-semibold text-2xl uppercase">{{ config( 'app.name' ) }}</p>
 </header>

 @if ( session( 'status' ) )
  {{ session( 'status' ) }}
 @endif

 @include( 'auth.passwords.email-form' )

</section>

@endsection

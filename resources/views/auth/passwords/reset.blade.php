@extends(  'layouts.layout' )

@section( 'body' )
<section class="px-8 py-16">
 <header class="mb-4 text-center">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Reset password' ) }}</h2>
  <p>{{ config( 'app.name' ) }}</p>
 </header>

 @include( 'auth.passwords.reset-form' )

</section>

@endsection

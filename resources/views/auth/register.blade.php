@extends( 'layouts.layout' )

@section( 'body' )
<section class="px-8 py-16">
 <header class="mb-4 text-center">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'New Account' ) }}</h2>
  <p>{{ config( 'app.name' ) }}</p>
 </header>

 <p class="mb-4 font-light text-sm">{{ __( 'Already have an account? Please,' ) }} <a href="{{ route( 'login' ) }}" class="underline">{{ __( 'sign in' ) }}</a></p>

 @include( 'auth.register-form' )

</section>

@endsection

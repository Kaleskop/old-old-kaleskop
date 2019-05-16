@extends(  'layouts.layout' )

@section( 'body' )
<section class="px-8 py-16">
 <header class="mb-4 text-center">
  <h2>{{ __( 'Sign in' ) }}</h2>
  <p>{{ config( 'app.name' ) }}</p>
 </header>

 <p class="mb-4 font-light text-sm">{{ __( "Don't have a account?" ) }} <a href="{{ route( 'register' ) }}" class="underline">{{ __( 'Create One' ) }}</a></p>

 @include( 'auth.login-form' )

 <p class="mb-4 font-light text-sm"><a href="{{ route( 'password.request' ) }}" class="underline">{{ __( 'Forgot Password?' ) }}</a></p>
</section>

@endsection

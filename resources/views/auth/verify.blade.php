@extends( 'layouts.layout' )

@section( 'body' )
<section class="px-8 py-16">
 <header class="mb-4 text-center">
  <h2>{{ __( 'Verify your email address' ) }}</h2>
  <p>{{ config( 'app.name' ) }}</p>
 </header>

 @if ( session('resent') )
  <p>{{ __( 'A fresh verification link has been sent to your email address.' ) }}</p>
 @endif

 <p>{{ __( 'Before proceeding, please check your email for a verification link.' ) }}</p>
 <p><a href="{{ route( 'verification.resend' ) }}" class="underline">{{ __( 'click here to request another email' ) }}</a></p>
</section>

@endsection

@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <h2>{{ __( 'Hi, :username', [ 'username'=>$user->name ] ) }}</h2>

 @include( 'account.verified-email-message' )

 @include( 'auth.logout-form' )

</section>

@endsection

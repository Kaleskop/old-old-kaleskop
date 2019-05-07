@extends( 'layouts.page' )

@section( 'page' )
<section>
 <h2>{{ __( 'Hi, :username', [ 'username'=>$user->name ] ) }}</h2>

 @include( 'account.verified-email-message' )

 @include( 'auth.logout-form' )

</section>

@endsection

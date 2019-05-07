@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'Business' ) }}</h2>
 </header>

 @include( 'account.business-form' )

</section>

@endsection

@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'Business' ) }}</h2>
 </header>

 @include( 'account.business-form' )

</section>

@endsection

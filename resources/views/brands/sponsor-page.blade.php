@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'New sponsor' ) }}</h2>
 </header>

 @include( 'brands.sponsor-form' )

</section>

@endsection

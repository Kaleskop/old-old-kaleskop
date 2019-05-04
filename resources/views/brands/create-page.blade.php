@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'New Brand' ) }}</h2>
 </header>

 @include( 'brands.create-form' )

</section>

@endsection

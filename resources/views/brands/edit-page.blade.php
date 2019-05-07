@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'Edit Brand' ) }}</h2>
  <p>{{ $brand->name }}</p>
 </header>

 @include( 'brands.update-form' )

</section>

@endsection

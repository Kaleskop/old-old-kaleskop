@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'Edit Brand' ) }}</h2>
  <p>{{ $brand->name }}</p>
 </header>

 @include( 'brands.update-form' )

</section>

@endsection

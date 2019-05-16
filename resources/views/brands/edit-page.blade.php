@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Edit Brand' ) }}</h2>
  <p class="font-medium text-2xl uppercase">{{ $brand->name }}</p>
 </header>

 @include( 'brands.update-form' )

</section>

@endsection

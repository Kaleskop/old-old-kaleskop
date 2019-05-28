@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'New Brand' ) }}</h2>
 </header>

 @include( 'brands.create-form' )

</section>

@endsection

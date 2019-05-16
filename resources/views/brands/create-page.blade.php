@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'New Brand' ) }}</h2>
 </header>

 @include( 'brands.create-form' )

</section>

@endsection

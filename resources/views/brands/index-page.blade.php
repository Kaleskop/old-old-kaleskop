@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Brands' ) }}</h2>

  <a href="{{ route( 'brands.create' ) }}" class="underline">{{ __( 'New brand' ) }}</a>
 </header>

 <div>
  @forelse( $brands as $brand )
   @include( 'brands.tile' )

  @empty
   <p>{{ __( 'No brands' ) }}</p>

  @endforelse
 </div>
</section>

@endsection

@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'Brands' ) }}</h2>

  <a href="{{ route( 'brands.create' ) }}">{{ __( 'New brand' ) }}</a>
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

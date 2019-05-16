@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'New sponsor' ) }}</h2>
 </header>

 @if ( count( $advs ) > 0 )
  @include( 'brands.sponsor-form' )

 @else
  <p>{{ __( 'You need to' ) }} <a href="{{ route( 'advs.create' ) }}">{{ __( 'insert a new advertisement' ) }}</a></p>

 @endif

</section>

@endsection

@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'New sponsor' ) }}</h2>
 </header>

 @if ( count( $advs ) > 0 )
  @include( 'advs.sponsor-form' )

 @else
  <p>{{ __( 'You need to' ) }} <a href="{{ route( 'brands.create' ) }}">{{ __( 'insert a new brand' ) }}</a></p>

 @endif

</section>

@endsection

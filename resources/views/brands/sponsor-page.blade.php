@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'New sponsor' ) }}</h2>
 </header>

 @if ( count( $advs ) > 0 )
  @include( 'brands.sponsor-form' )

 @else
  <p>{{ __( 'You need to' ) }} <a href="{{ route( 'advs.create' ) }}">{{ __( 'insert a new advertisement' ) }}</a></p>

 @endif

</section>

@endsection

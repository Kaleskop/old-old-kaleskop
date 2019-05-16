@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'New manifesto' ) }}</h2>
 </header>

 @if ( count( $videos ) > 0 )
  @include( 'advs.manifesto-form' )

 @else
  <p>{{ __( 'You need to' ) }} <a href="{{ route( 'videos.create' ) }}">{{ __( 'insert a new video' ) }}</a></p>

 @endif

</section>

@endsection

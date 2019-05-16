@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'New manifesto' ) }}</h2>
 </header>

 @if ( count( $advs ) > 0 )
  @include( 'videos.manifesto-form' )

 @else
  <p>{{ __( 'You need to' ) }} <a href="{{ route( 'advs.create' ) }}" class="underline">{{ __( 'insert a new advertisement' ) }}</a></p>

 @endif

</section>

@endsection

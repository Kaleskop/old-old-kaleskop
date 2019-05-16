@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'Videos' ) }}</h2>

  <a href="{{ route( 'videos.create' ) }}" class="underline">{{ __( 'New Video' ) }}</a>
 </header>

 @include( 'videos.table' )

</section>

@endsection

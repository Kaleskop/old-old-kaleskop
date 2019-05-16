@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'Videos' ) }}</h2>

  <a href="{{ route( 'videos.create' ) }}">{{ __( 'New Video' ) }}</a>
 </header>

 @include( 'videos.table' )

</section>

@endsection

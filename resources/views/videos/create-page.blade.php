@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'Upload a new video' ) }}</h2>
 </header>

 @include( 'videos.create-form' )

</section>

@endsection

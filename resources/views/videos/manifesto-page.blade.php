@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'New manifesto' ) }}</h2>
 </header>

 @include( 'videos.manifesto-form' )

</section>

@endsection

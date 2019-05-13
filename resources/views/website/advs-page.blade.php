@extends( 'layouts.page' )

@section( 'page' )
<section>
 <div>
  <video-player v-bind:adv="{{ $adv }}"></video-player>

  <header>
   <h2>{{ $adv->title }}</h2>

   <a href="{{ route( 'website.endpoint', $adv ) }}"><span class="fas fa-external-link-square-alt"></span></a>
  </header>
 </div>

 <div>
  @foreach( $adv->brands as $brand )
   @include( 'brands.tile-on-channels' )

  @endforeach
 </div>

 @include( 'opineons.section' )

</section>

@endsection

@extends( 'layouts.page' )

@section( 'page' )
<section>
 <div>
  <video-player v-bind:adv="{{ $adv }}"></video-player>

  <header class="p-2 flex justify-between items-center bg-black text-white">
   <h2 class="mb-2 font-semibold text-2xl">{{ $adv->title }}</h2>

   <a href="{{ route( 'website.endpoint', $adv ) }}"><span class="fas fa-external-link-square-alt"></span></a>
  </header>
 </div>

 <div class="flex flex-col">
  @foreach( $adv->brands as $brand )
   @include( 'brands.tile-on-channels' )

  @endforeach
 </div>

 @include( 'opineons.section' )

</section>

@endsection

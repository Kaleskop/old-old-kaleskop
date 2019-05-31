<article class="p-2 w-full md:w-1/2">
 <div class="relative p-2 flex flex-wrap justify-center items-center">
  @forelse( $adv->brands as $brand )
   @include( 'brands.tile-on-adv' )

  @empty
   <p>{{ __( 'No brands' ) }}</p>

  @endforelse
 </div>

 <h4 class="mb-2 font-medium text-2xl">{{ $adv->title }}</h4>
</article>

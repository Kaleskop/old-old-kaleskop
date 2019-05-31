<article>
 <div>
  @forelse( $adv->brands as $brand )
   @include( 'brands.tile-on-adv' )

  @empty
   <p>{{ __( 'No brands' ) }}</p>

  @endforelse
 </div>

 <h4>{{ $adv->title }}</h4>
</article>

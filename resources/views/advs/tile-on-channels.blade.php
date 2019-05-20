<article>
 <h4>{{ $adv->title }}</h4>

 @forelse( $adv->brands as $brand )
  @include( 'brands.tile-on-adv' )

 @empty
  <p>{{ __( 'No brands' ) }}</p>

 @endforelse
</article>

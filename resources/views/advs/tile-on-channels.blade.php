<article>
 <h4>{{ $adv->title }}</h4>

 @forelse( $adv->brands as $brand )
  <a href="{{ route( 'website.advs', [ $brand, $adv ] ) }}">{{ $adv->title }}</a>

 @empty
  <p>{{ __( 'No brands' ) }}</p>

 @endforelse
</article>

<article>
 <h4>{{ $adv->title }}</h4>

 <p>{{ $adv->endpoint }}</p>

 <footer>
  <a href="{{ route( 'advs.manifesto', $adv ) }}">{{ __( 'Manifesto' ) }}</a>
  <a href="{{ route( 'advs.sponsor', $adv ) }}">{{ __( 'Sponsor' ) }}</a>
 </footer>
</article>

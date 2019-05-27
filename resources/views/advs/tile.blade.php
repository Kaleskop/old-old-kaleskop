<article>
 <h4 class="mb-2 font-medium text-2xl">{{ $adv->title }}</h4>

 <p>{{ $adv->endpoint }}</p>

 <footer>
  <a href="{{ route( 'advs.sponsor', $adv ) }}">{{ __( 'Sponsor' ) }}</a>
  <a href="{{ route( 'advs.manifesto', $adv ) }}">{{ __( 'Manifesto' ) }}</a>
 </footer>
</article>

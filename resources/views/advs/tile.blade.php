<article>
 <h4 class="mb-2 font-medium text-2xl">{{ $adv->title }}</h4>

 <p>{{ $adv->endpoint }}</p>

 <footer class="flex justify-end">
  <a href="{{ route( 'advs.sponsor', $adv ) }}" class="underline mr-4">{{ __( 'Sponsor' ) }}</a>
  <a href="{{ route( 'advs.manifesto', $adv ) }}" class="underline">{{ __( 'Manifesto' ) }}</a>
 </footer>
</article>

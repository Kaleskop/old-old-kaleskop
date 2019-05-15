<nav>

 @auth
 <a href="{{ route( 'account.index' ) }}">
  <span class="far fa-user"></span>
  <span class="hidden">{{ __( 'Account' ) }}</span>
 </a>
 <a href="{{ route( 'business.index' ) }}">
  <span class="far fa-building"></span>
  <span class="hidden">{{ __( 'Business' ) }}</span>
 </a>
 @endauth

 @business
 <a href="{{ route( 'brands.index' ) }}">
  <span class="fas fa-tags"></span>
  <span class="hidden">{{ __( 'Brands' ) }}</span>
 </a>
 <a href="{{ route( 'advs.index' ) }}">
  <span class="fas fa-play"></span>
  <span class="hidden">{{ __( 'Advertisements' ) }}</span>
 </a>
 @endbusiness

 @subscribed
 <a href="{{ route( 'videos.index' ) }}">
  <span class="fas fa-film"></span>
  <span class="hidden">{{ __( 'Videos' ) }}</span>
 </a>
 @endsubscribed

</nav>

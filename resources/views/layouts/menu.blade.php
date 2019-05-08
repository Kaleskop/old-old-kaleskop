<nav>

 @auth
 <a href="{{ route( 'account.index' ) }}">
  <span class="far fa-user"></span>
  <span>{{ __( 'Account' ) }}</span>
 </a>
 <a href="{{ route( 'business.index' ) }}">
  <span class="far fa-building"></span>
  <span>{{ __( 'Business' ) }}</span>
 </a>
 @endauth

 @business
 <a href="{{ route( 'brands.index' ) }}">
  <span class="fas fa-tags"></span>
  <span>{{ __( 'Brands' ) }}</span>
 </a>
 @endbusiness

 @subscribed
 <a href="{{ route( 'videos.index' ) }}">
  <span class="fas fa-film"></span>
  <span>{{ __( 'Videos' ) }}</span>
 </a>
 @endsubscribed

</nav>

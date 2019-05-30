<nav class="py-4 flex justify-around sm:flex-col sm:items-center">

 @auth
 <a href="{{ route( 'account.index' ) }}" class="w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full bg-grey-300 shadow-inner hover:shadow-none active:bg-kaleskop-gold sm:mb-4">
  <span class="far fa-user"></span>
  <span class="hidden">{{ __( 'Account' ) }}</span>
 </a>
 <a href="{{ route( 'business.index' ) }}" class="w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full bg-grey-300 shadow-inner hover:shadow-none active:bg-kaleskop-gold sm:mb-4">
  <span class="far fa-building"></span>
  <span class="hidden">{{ __( 'Business' ) }}</span>
 </a>
 @endauth

 @business
 <a href="{{ route( 'brands.index' ) }}" class="w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full bg-grey-300 shadow-inner hover:shadow-none active:bg-kaleskop-gold sm:mb-4">
  <span class="fas fa-tags"></span>
  <span class="hidden">{{ __( 'Brands' ) }}</span>
 </a>
 <a href="{{ route( 'advs.index' ) }}" class="w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full bg-grey-300 shadow-inner hover:shadow-none active:bg-kaleskop-gold sm:mb-4">
  <span class="fas fa-play"></span>
  <span class="hidden">{{ __( 'Advertisements' ) }}</span>
 </a>
 @endbusiness

 @subscribed
 <a href="{{ route( 'videos.index' ) }}" class="w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full bg-grey-300 shadow-inner hover:shadow-none active:bg-kaleskop-gold">
  <span class="fas fa-film"></span>
  <span class="hidden">{{ __( 'Videos' ) }}</span>
 </a>
 @endsubscribed

</nav>

<header class="p-4 flex justify-between items-center">
 <h1 class="font-semibold text-2xl"><a href="{{ route( 'website.homepage' ) }}">{{ config( 'app.name' ) }}</a></h1>

 @guest
 <a href="{{ route( 'login' ) }}" class="{{ request()->routeIs( 'login' ) ? 'active ' : '' }}w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full ml-auto mr-4 sm:hidden">
  <span class="far fa-user"></span>
  <span class="hidden">{{ __( 'Login' ) }}</span>
 </a>
 @endguest

 <a href="{{ route( 'website.channels' ) }}" class="{{ request()->routeIs( [ 'website.channels', 'website.advs' ] ) ? 'active ' : '' }}w-8 h-8 inline-flex items-center justify-center border border-transparent rounded-full sm:hidden">
  <span class="fas fa-project-diagram"></span>
  <span class="hidden">{{ __( 'Channels' ) }}</span>
 </a>
</header>

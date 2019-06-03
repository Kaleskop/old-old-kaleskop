<header class="p-4 flex justify-between items-center">
 <h1 class="font-semibold text-2xl"><a href="{{ route( 'website.homepage' ) }}">{{ config( 'app.name' ) }}</a></h1>

 @guest
 <a href="{{ route( 'login' ) }}" class="ml-auto mr-4 sm:hidden">
  <span class="far fa-user"></span>
  <span class="hidden">{{ __( 'Login' ) }}</span>
 </a>
 @endguest

 <a href="{{ route( 'website.channels' ) }}" class="sm:hidden">
  <span class="fas fa-project-diagram"></span>
  <span class="hidden">{{ __( 'Channels' ) }}</span>
 </a>
</header>

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

</nav>

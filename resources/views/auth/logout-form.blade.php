<form method="POST" action="{{ route( 'logout' ) }}">
 @csrf

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block leading-snug py-1 px-2 border border-transparent text-lg font-medium focus:shadow-md">{{ __( 'Logout' ) }}</button>
</form>

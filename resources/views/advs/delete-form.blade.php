<form method="POST" action="{{ route( 'advs.destroy', $adv ) }}">
 @csrf
 @method('DELETE')

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block leading-snug py-1 px-2 border border-transparent text-lg font-medium focus:shadow-md">{{ __( 'Delete' ) }}</button>
</form>

<form method="POST" action="{{ route( 'brands.destroy', $brand ) }}">
 @csrf
 @method('DELETE')

 <button type="submit">{{ __( 'Delete' ) }}</button>
</form>

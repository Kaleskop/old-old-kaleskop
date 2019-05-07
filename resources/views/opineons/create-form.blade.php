<form method="POST" action="{{ route( 'opineon.express', $adv ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Opineon' ) }}</legend>

  <div>
   <label for="body">{{ __( 'Your opinion' ) }}</label>
   <textarea name="body" id="body" placeholder="I think.." required>{{ old( 'body' ) }}</textarea>

   @if ( $errors->has( 'body' ) )
    {{ $errors->first( 'body' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Publish' ) }}</button>
</form>

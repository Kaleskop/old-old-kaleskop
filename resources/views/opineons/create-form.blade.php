<form method="POST" action="{{ route( 'opineon.express', $adv ) }}">
 @csrf

 <fieldset>
  <legend class="p-2 font-light italic hidden">{{ __( 'Opineon' ) }}</legend>

  <div>
   <label for="body" class="block p-2 font-semibold hidden">{{ __( 'Your opinion' ) }}</label>
   <textarea name="body" id="body" placeholder="I think.." required>{{ old( 'body' ) }}</textarea>

   @if ( $errors->has( 'body' ) )
    {{ $errors->first( 'body' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Publish' ) }}</button>
</form>

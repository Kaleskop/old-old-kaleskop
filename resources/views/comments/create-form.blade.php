<form method="POST" action="{{ route( 'opineon.comment', $opinion ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Comment details' ) }}</legend>

  <div>
   <label for="body">{{ __( 'Body' ) }}</label>
   <textarea name="body" id="body" required>{{ old( 'body' ) }}</textarea>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Comment' ) }}</button>
</form>

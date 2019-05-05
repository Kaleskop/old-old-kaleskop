<form method="POST" enctype="multipart/form-data" action="{{ route( 'videos.upload' ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Video details' ) }}</legend>

  <div>
   <label for="uservideo">{{ __( 'Choose Video' ) }}</label>
   <input type="file" accept="video/*" name="uservideo" id="uservideo" required />

   @if ( $errors->has( 'uservideo' ) )
    {{ $errors->first( 'uservideo' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Upload video' ) }}</button>
</form>

<form method="POST" action="{{ route( 'advs.manifestoTo', $adv ) }}">
 @csrf

 <p>{{ $video->title }}</p>

 <fieldset>
  <legend>{{ __( 'Manifesto details' ) }}</legend>

  <div>
   <label for="videos">{{ __( 'Videos' ) }}</label>
   <select name="videos[]" id="videos" multiple>
    @foreach( $videos as $video )
     <option value="{{ $video->id }}"{{ in_array( $video->id, $adv->videos()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $video->name }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

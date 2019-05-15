<form method="POST" action="{{ route( 'advs.manifestoTo', $adv ) }}">
 @csrf

 <p>{{ $adv->title }}</p>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Manifesto details' ) }}</legend>

  <div>
   <label for="videos" class="block p-2 font-semibold">{{ __( 'Videos' ) }}</label>
   <select name="videos[]" id="videos" multiple>
    @foreach( $videos as $video )
     <option value="{{ $video->id }}"{{ in_array( $video->id, $adv->videos()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $video->name }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

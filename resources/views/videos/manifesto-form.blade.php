<form method="POST" action="{{ route( 'videos.linkTo', $video ) }}">
 @csrf

 <p>{{ $video->name }}</p>

 <fieldset>
  <legend>{{ __( 'Manifesto details' ) }}</legend>

  <div>
   <label for="advs" class="block p-2 font-semibold">{{ __( 'Advertisements' ) }}</label>
   <select name="advs[]" id="advs" multiple>
    @foreach( $advs as $adv )
     <option value="{{ $adv->id }}"{{ in_array( $adv->id, $video->advs()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $adv->title }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

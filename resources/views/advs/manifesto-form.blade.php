<form method="POST" action="{{ route( 'advs.manifestoTo', $adv ) }}">
 @csrf

 <p>{{ $adv->title }}</p>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Manifesto details' ) }}</legend>

  <div>
   <label for="videos" class="block p-2 font-semibold">{{ __( 'Videos' ) }}</label>
   <select name="videos[]" id="videos" class="appearance-none outline-none cursor-pointer block w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" multiple>
    @foreach( $videos as $video )
     <option value="{{ $video->id }}"{{ in_array( $video->id, $adv->videos()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $video->name }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

<form method="POST" action="{{ route( 'brands.linkTo', $brand ) }}">
 @csrf

 <p>{{ $brand->name }}</p>

 <fieldset>
  <legend class="p-2 font-light italic">{{ __( 'Sponsor details' ) }}</legend>

  <div>
   <label for="advs" class="block p-2 font-semibold">{{ __( 'Advertisements' ) }}</label>
   <select name="advs[]" id="advs" multiple>
    @foreach( $advs as $adv )
     <option value="{{ $adv->id }}"{{ in_array( $adv->id, $brand->advs()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $adv->title }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

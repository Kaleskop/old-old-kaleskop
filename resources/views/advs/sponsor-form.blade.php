<form method="POST" action="{{ route( 'advs.sponsorTo', $adv ) }}">
 @csrf

 <p>{{ $adv->title }}</p>

 <fieldset>
  <legend class="p-2 font-light italic">{{ __( 'Sponsor details' ) }}</legend>

  <div>
   <label for="brands" class="block p-2 font-semibold">{{ __( 'Brands' ) }}</label>
   <select name="brands[]" id="brands" multiple>
    @foreach( $brands as $brand )
     <option value="{{ $brand->id }}"{{ in_array( $brand->id, $adv->brands()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $brand->name }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

<form method="POST" action="{{ route( 'advs.sponsorTo', $adv ) }}">
 @csrf

 <p>{{ $adv->title }}</p>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Sponsor details' ) }}</legend>

  <div>
   <label for="brands" class="block p-2 font-semibold">{{ __( 'Brands' ) }}</label>
   <select name="brands[]" id="brands" class="appearance-none outline-none cursor-pointer block w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" multiple>
    @foreach( $brands as $brand )
     <option value="{{ $brand->id }}"{{ in_array( $brand->id, $adv->brands()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $brand->name }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

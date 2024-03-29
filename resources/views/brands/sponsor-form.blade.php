<form method="POST" action="{{ route( 'brands.linkTo', $brand ) }}">
 @csrf

 <p class="mb-2 font-medium text-xl uppercase">{{ $brand->name }}</p>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Sponsor details' ) }}</legend>

  <div>
   <label for="advs" class="block p-2 font-semibold">{{ __( 'Advertisements' ) }}</label>
   <select name="advs[]" id="advs" class="appearance-none outline-none cursor-pointer block w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" multiple>
    @foreach( $advs as $adv )
     <option value="{{ $adv->id }}"{{ in_array( $adv->id, $brand->advs()->pluck( 'id' )->toArray()) ? ' selected' : '' }}>{{ $adv->title }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block w-full leading-snug py-1 px-2 border border-transparent bg-gray-400 text-lg font-semibold text-center focus:shadow-md">{{ __( 'Create' ) }}</button>
</form>

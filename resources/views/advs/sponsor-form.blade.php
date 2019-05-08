<form method="POST" action="{{ route( 'advs.sponsor', $adv ) }}">
 @csrf

 <p>{{ $adv->title }}</p>

 <fieldset>
  <legend>{{ __( 'Sponsor details' ) }}</legend>

  <div>
   <label for="brands">{{ __( 'Brands' ) }}</label>
   <select name="brands[]" id="brands" multiple>
    @foreach( $brands as $brand )
     <option value="{{ $brand->id }}">{{ $brand->name }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

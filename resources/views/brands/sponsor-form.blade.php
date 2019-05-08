<form method="POST" action="{{ route( 'brands.linkTo', $brand ) }}">
 @csrf

 <p>{{ $brand->name }}</p>

 <fieldset>
  <legend>{{ __( 'Sponsor details' ) }}</legend>

  <div>
   <label for="advs">{{ __( 'Advertisements' ) }}</label>
   <select name="advs[]" id="advs" multiple>
    @foreach( $advs as $adv )
     <option value="{{ $adv->id }}">{{ $adv->title }}</option>

    @endforeach
   </select>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

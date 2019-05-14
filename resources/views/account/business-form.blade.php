<form method="POST" action="{{ route( 'business.store' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Business details' ) }}</legend>

  <div>
   <label for="country" class="block p-2 font-semibold">{{ __( 'Country' ) }}</label>
   <select name="country" id="country" required>
    @foreach( $countries as $iso=>$country )
     <option value="{{ $iso }}"{{ (old( 'country' ) === $iso) ? ' selected' : '' }}>{{ $country }}</option>

    @endforeach
   </select>

   @if ( $errors->has( 'country' ) )
    {{ $errors->first( 'country' ) }}
   @endif
  </div>

  <div>
   <label for="name" class="block p-2 font-semibold">{{ __( 'Legal Name' ) }}</label>
   <input type="text" name="name" id="name" placeholder="My Company Ltd" value="{{ old( 'name' ) }}" required />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div>
   <label for="email" class="block p-2 font-semibold">{{ __( 'Email' ) }}</label>
   <input type="email" name="email" id="email" placeholder="info@mycompany.com" value="{{ old( 'email' ) }}" required />

   @if ( $errors->has( 'email' ) )
    {{ $errors->first( 'email' ) }}
   @endif
  </div>

  <div>
   <label for="vat" class="block p-2 font-semibold">{{ __( 'Vat number' ) }}</label>
   <input type="text" name="vat" id="vat" placeholder="IT123456789" value="{{ old( 'vat' ) }}" required />

   @if ( $errors->has( 'vat' ) )
    {{ $errors->first( 'vat' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Address details' ) }}</legend>

  <div>
   <label for="address_line1" class="block p-2 font-semibold">{{ __( 'Address' ) }}</label>
   <input type="text" name="address_line1" id="address_line1" placeholder="Main address line" value="{{ old( 'address_line1' ) }}" required />

   @if ( $errors->has( 'address_line1' ) )
    {{ $errors->first( 'address_line1' ) }}
   @endif
  </div>

  <div>
   <label for="city" class="block p-2 font-semibold">{{ __( 'City' ) }}</label>
   <input type="text" name="city" id="city" placeholder="City" value="{{ old( 'city' ) }}" required />

   @if ( $errors->has( 'city' ) )
    {{ $errors->first( 'city' ) }}
   @endif
  </div>

  <div>
   <label for="cap" class="block p-2 font-semibold">{{ __( 'Postal Code' ) }}</label>
   <input type="text" name="cap" id="cap" placeholder="12345" value="{{ old( 'cap' ) }}" required />

   @if ( $errors->has( 'cap' ) )
    {{ $errors->first( 'cap' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Terms & Conditions' ) }}</legend>

  <div>
   <input type="checkbox" name="terms" id="terms" value="true" />
   <label for="terms">{{ __( 'I agree with the' ) }} <a href="" target="_blank">{{ __( 'Terms of service' ) }}</a></label>

   @if ( $errors->has( 'terms' ) )
    {{ $errors->first( 'terms' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Register' ) }}</button>
</form>

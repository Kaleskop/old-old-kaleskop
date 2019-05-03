<form method="POST" action="{{ route( 'business.store' ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Business details' ) }}</legend>

  <div>
   <label for="country">{{ __( 'Country' ) }}</label>
   <select name="country"></select>

   @if ( $errors->has( 'country' ) )
    {{ $errors->first( 'country' ) }}
   @endif
  </div>

  <div>
   <label for="name">{{ __( 'Legal Name' ) }}</label>
   <input type="text" name="name" id="name" placeholder="My Company Ltd" value="{{ old( 'name' ) }}" required />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div>
   <label for="email">{{ __( 'Email' ) }}</label>
   <input type="email" name="email" id="email" placeholder="info@mycompany.com" value="{{ old( 'email' ) }}" required />

   @if ( $errors->has( 'email' ) )
    {{ $errors->first( 'email' ) }}
   @endif
  </div>

  <div>
   <label for="vat">{{ __( 'Vat number' ) }}</label>
   <input type="text" name="vat" id="vat" placeholder="IT123456789" value="{{ old( 'vat' ) }}" required />

   @if ( $errors->has( 'vat' ) )
    {{ $errors->first( 'vat' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset>
  <legend>{{ __( 'Address details' ) }}</legend>

  <div>
   <label for="address_line1">{{ __( 'Address' ) }}</label>
   <input type="text" name="address_line1" id="address_line1" placeholder="Main address line" value="{{ old( 'address_line1' ) }}" required />

   @if ( $errors->has( 'address_line1' ) )
    {{ $errors->first( 'address_line1' ) }}
   @endif
  </div>

  <div>
   <label for="city">{{ __( 'City' ) }}</label>
   <input type="text" name="city" id="city" placeholder="" value="{{ old( 'city' ) }}" required />

   @if ( $errors->has( 'city' ) )
    {{ $errors->first( 'city' ) }}
   @endif
  </div>

  <div>
   <label for="cap">{{ __( 'CAP' ) }}</label>
   <input type="text" name="cap" id="cap" value="{{ old( 'cap' ) }}" required />

   @if ( $errors->has( 'cap' ) )
    {{ $errors->first( 'cap' ) }}
   @endif
  </div>
 </fieldset>

 <div>
  <label for="terms">{{ __( 'Terms & Conditions' ) }}</label>

  <div>
   <input type="checkbox" name="terms" id="terms" value="true" />
   <label for="terms">{{ __( 'I agree with the' ) }} <a href="" target="_blank">{{ __( 'Terms of service' ) }}</a></p>
  </div>

  @if ( $errors->has( 'terms' ) )
   {{ $errors->first( 'terms' ) }}
  @endif
 </div>

 <button type="submit">{{ __( 'Register' ) }}</button>
</form>

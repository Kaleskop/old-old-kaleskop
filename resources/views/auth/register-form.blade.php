<form method="POST" action="{{ route( 'register' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Sign up' ) }}</legend>

  <div>
   <label for="name" class="block p-2 font-semibold">{{ __( 'Name' ) }}</label>
   <input type="text" name="name" id="name" value="{{ old( 'name' ) }}" required autofocus />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="email" class="block p-2 font-semibold">{{ __( 'Email address' ) }}</label>
   <input type="email" name="email" id="email" required />

   @if ( $errors->has( 'email' ) )
    {{ $errors->first( 'email' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="password" class="block p-2 font-semibold">{{ __( 'Password' ) }}</label>
   <input type="password" name="password" id="password" required />

   @if ( $errors->has( 'password' ) )
    {{ $errors->first( 'password' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="password_confirmation" class="block p-2 font-semibold">{{ __( 'Confirm password' ) }}</label>
   <input type="password" name="password_confirmation" id="password_confirmation" required />
  </div>
 </fieldset>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Terms & Conditions' ) }}</legend>

  <div>
   <input type="checkbox" name="terms" id="terms" value="true" />
   <label for="terms">{{ __( 'I agree with the' ) }} <a href="" target="_blank" class="underline">{{ __( 'Terms of service' ) }}</a></label>

   @if ( $errors->has( 'terms' ) )
    {{ $errors->first( 'terms' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Register' ) }}</button>
</form>

<form method="POST" action="{{ route('password.update') }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Account details' ) }}</legend>

  <div>
   <label for="email">{{ __( 'Email address' ) }}</label>
   <input type="email" name="email" id="email" value="{{ $email ?? old('email') }}" required autofocus />

   @if ( $errors->has( 'email' ) )
    {{ $errors->first( 'email' ) }}
   @endif
  </div>

  <div>
   <label for="password">{{ __( 'Password' ) }}</label>
   <input type="password" name="password" id="password" required />

   @if ( $errors->has( 'password' ) )
    {{ $errors->first( 'password' ) }}
   @endif
  </div>

  <div>
   <label for="password-confirm">{{ __( 'Confirm password' ) }}</label>
   <input type="password" name="password_confirmation" id="password-confirm" required />
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Reset password' ) }}</button>
</form>

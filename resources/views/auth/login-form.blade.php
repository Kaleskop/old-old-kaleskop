<form method="POST" action="{{ route( 'login' ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Login' ) }}</legend>

  <div>
   <label for="email">{{ __( 'Email address' ) }}</label>
   <input type="email" name="email" id="email" required autofocus />

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
   <label for="remember">{{ __( 'Stay connected' ) }}</label>

   <div>
    <input type="checkbox" name="remember" id="remember" value="true" />
    <label for="remember">{{ __( 'Remember me' ) }}</label>
   </div>

   @if ( $errors->has( 'remember' ) )
    {{ $errors->first( 'remember' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Login' ) }}</button>
</form>

<form method="POST" action="{{ route( 'login' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Login' ) }}</legend>

  <div>
   <label for="email" class="block p-2 font-semibold">{{ __( 'Email address' ) }}</label>
   <input type="email" name="email" id="email" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" required autofocus />

   @if ( $errors->has( 'email' ) )
    {{ $errors->first( 'email' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="password" class="block p-2 font-semibold">{{ __( 'Password' ) }}</label>
   <input type="password" name="password" id="password" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" required />

   @if ( $errors->has( 'password' ) )
    {{ $errors->first( 'password' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="remember" class="block p-2 font-semibold">{{ __( 'Stay connected' ) }}</label>

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

<form method="POST" action="{{ route('password.update') }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Account details' ) }}</legend>

  <div>
   <label for="email" class="block p-2 font-semibold">{{ __( 'Email address' ) }}</label>
   <input type="email" name="email" id="email" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" value="{{ $email ?? old('email') }}" required autofocus />

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
   <label for="password-confirm" class="block p-2 font-semibold">{{ __( 'Confirm password' ) }}</label>
   <input type="password" name="password_confirmation" id="password-confirm" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" required />
  </div>
 </fieldset>

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block w-full leading-snug py-1 px-2 border border-transparent bg-gray-400 text-lg font-semibold text-center focus:shadow-md">{{ __( 'Reset password' ) }}</button>
</form>

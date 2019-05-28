<form method="POST" action="{{ route( 'register' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Sign up' ) }}</legend>

  <div>
   <label for="name" class="block p-2 font-semibold">{{ __( 'Name' ) }}</label>
   <input type="text" name="name" id="name" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" value="{{ old( 'name' ) }}" required autofocus />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="email" class="block p-2 font-semibold">{{ __( 'Email address' ) }}</label>
   <input type="email" name="email" id="email" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" required />

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
   <label for="password_confirmation" class="block p-2 font-semibold">{{ __( 'Confirm password' ) }}</label>
   <input type="password" name="password_confirmation" id="password_confirmation" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" required />
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

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block w-full leading-snug py-1 px-2 border border-transparent bg-gray-400 text-lg font-semibold text-center focus:shadow-md">{{ __( 'Register' ) }}</button>
</form>

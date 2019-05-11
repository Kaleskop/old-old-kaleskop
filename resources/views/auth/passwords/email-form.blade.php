<form method="POST" action="{{ route( 'password.email' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Account details' ) }}</legend>

  <div>
   <label for="email" class="block p-2 font-semibold">{{ __('Email address') }}</label>
   <input type="email" name="email" id="email" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" value="{{ old( 'email' ) }}" required autofocus />

   @if ($errors->has('email'))
    {{ $errors->first('email') }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Send password reset link' ) }}</button>
</form>

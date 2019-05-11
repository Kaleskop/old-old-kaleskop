<form method="POST" action="{{ route( 'password.email' ) }}">
 @csrf

 <fieldset>
  <legend class="p-2 font-light italic">{{ __( 'Account details' ) }}</legend>

  <div>
   <label for="email" class="block p-2 font-semibold">{{ __('Email address') }}</label>
   <input type="email" name="email" id="email" value="{{ old( 'email' ) }}" required autofocus />

   @if ($errors->has('email'))
    {{ $errors->first('email') }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Send password reset link' ) }}</button>
</form>

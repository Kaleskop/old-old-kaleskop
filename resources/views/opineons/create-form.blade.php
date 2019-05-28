<form method="POST" action="{{ route( 'opineon.express', $adv ) }}">
 @csrf

 <fieldset>
  <legend class="p-2 font-light italic hidden">{{ __( 'Opineon' ) }}</legend>

  <div>
   <label for="body" class="block p-2 font-semibold hidden">{{ __( 'Your opinion' ) }}</label>
   <textarea name="body" id="body" class="appearance-none outline-none cursor-text block resize-y w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" placeholder="I think.." required>{{ old( 'body' ) }}</textarea>

   @if ( $errors->has( 'body' ) )
    {{ $errors->first( 'body' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 ml-auto border border-transparent font-medium text-center focus:shadow-md">{{ __( 'Publish' ) }}</button>
</form>
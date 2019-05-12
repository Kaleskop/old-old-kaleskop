<form method="POST" action="{{ route( 'advs.store' ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Advertisement details' ) }}</legend>

  <div>
   <label for="title" class="block p-2 font-semibold">{{ __( 'Title' ) }}</label>
   <input type="text" name="title" id="title" value="{{ old( 'title' ) }}" required autofocus />

   @if ( $errors->has( 'title' ) )
    {{ $errors->first( 'title' ) }}
   @endif
  </div>

  <div>
   <label for="endpoint" class="block p-2 font-semibold">{{ __( 'Endpoint' ) }}</label>
   <input type="text" name="endpoint" id="endpoint" value="{{ old( 'endpoint' ) }}" required />

   @if ( $errors->has( 'endpoint' ) )
    {{ $errors->first( 'endpoint' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

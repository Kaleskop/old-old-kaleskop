<form method="POST"  enctype="multipart/form-data" action="{{ route( 'brands.store' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Brand details' ) }}</legend>

  <div>
   <label for="name" class="block p-2 font-semibold">{{ __( 'Name' ) }}</label>
   <input type="text" name="name" id="name" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" value="{{ old( 'name' ) }}" required autofocus />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="description" class="block p-2 font-semibold">{{ __( 'Description' ) }}</label>
   <textarea name="description" id="description" class="appearance-none outline-none cursor-text block resize-y w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md">{{ old( 'description' ) }}</textarea>

   @if ( $errors->has( 'description' ) )
    {{ $errors->first( 'description' ) }}
   @endif

   <p><small><span class="fab fa-markdown"></span> <a href="https://guides.github.com/features/mastering-markdown/" target="_blank">Style with Markdown</a></small></p>
  </div>

  <div class="mt-4">
   <label for="userfile" class="block p-2 font-semibold">{{ __( 'Choose Logo' ) }}</label>
   <input type="file" name="userfile" accept="image/*" id="userfile" />

   @if ( $errors->has( 'userfile' ) )
    {{ $errors->first( 'userfile' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block w-full leading-snug py-1 px-2 border border-transparent bg-gray-400 text-lg font-semibold text-center focus:shadow-md">{{ __( 'Create' ) }}</button>
</form>

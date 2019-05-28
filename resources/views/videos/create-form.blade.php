<form method="POST" enctype="multipart/form-data" action="{{ route( 'videos.upload' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Video details' ) }}</legend>

  <div>
   <label for="uservideo" class="block p-2 font-semibold">{{ __( 'Choose Video' ) }}</label>
   <input type="file" accept="video/*" name="uservideo" id="uservideo" required />

   @if ( $errors->has( 'uservideo' ) )
    {{ $errors->first( 'uservideo' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block w-full leading-snug py-1 px-2 border border-transparent bg-gray-400 text-lg font-semibold text-center focus:shadow-md">{{ __( 'Upload video' ) }}</button>
</form>

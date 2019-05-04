<form method="POST" enctype="multipart/form-data" action="{{ route( 'brands.update', $brand ) }}">
 @csrf
 @method( 'PATCH' )

 <fieldset>
  <legend>{{ __( 'Brand details' ) }}</legend>

  <div>
   <label for="name">{{ __( 'Name' ) }}</label>
   <input type="text" name="name" id="name" value="{{ $brand->name }}" required autofocus />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div>
   <label for="description">{{ __( 'Description' ) }}</label>
   <textarea name="description" id="description">{{ $brand->description }}</textarea>

   @if ( $errors->has( 'description' ) )
    {{ $errors->first( 'description' ) }}
   @endif
  </div>

  <div>
   <label for="userfile">{{ __( 'Choose Logo' ) }}</label>
   <input type="file" name="userfile" accept="image/*" id="userfile" />

   @if ( $errors->has( 'userfile' ) )
    {{ $errors->first( 'userfile' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

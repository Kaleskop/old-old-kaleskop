<form method="POST" action="{{ route( 'plans.store' ) }}">
 @csrf

 <fieldset>
  <legend>{{ __( 'Plan details' ) }}</legend>

  <div>
   <label for="name" class="block p-2 font-semibold">{{ __( 'Name' ) }}</label>
   <input type="text" name="name" id="name" value="{{ old( 'name' ) }}" required autofocus />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div>
   <label for="description" class="block p-2 font-semibold">{{ __( 'Description' ) }}</label>
   <textarea name="description" id="description">{{ old( 'description' ) }}</textarea>

   @if ( $errors->has( 'description' ) )
    {{ $errors->first( 'description' ) }}
   @endif
  </div>

  <div>
   <label for="price" class="block p-2 font-semibold">{{ __( 'Price' ) }}</label>
   <input type="number" min="0" step="0.01" name="price" id="price" value="{{ old( 'price' ) }}" required />

   @if ( $errors->has( 'price' ) )
    {{ $errors->first( 'price' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset>
  <legend>{{ __( 'Plan details' ) }}</legend>

  <div>
   <label for="product_id" class="block p-2 font-semibold">{{ __( 'Product id' ) }}</label>
   <input type="text" name="product_id" id="product_id" value="{{ old( 'product_id' ) }}" required />

   @if ( $errors->has( 'product_id' ) )
    {{ $errors->first( 'product_id' ) }}
   @endif
  </div>

  <div>
   <label for="product_name" class="block p-2 font-semibold">{{ __( 'Product name' ) }}</label>
   <input type="text" name="product_name" id="product_name" value="{{ old( 'product_name' ) }}" required />

   @if ( $errors->has( 'product_name' ) )
    {{ $errors->first( 'product_name' ) }}
   @endif
  </div>

  <div>
   <label for="plan_id" class="block p-2 font-semibold">{{ __( 'Plan id' ) }}</label>
   <input type="text" name="plan_id" id="plan_id" value="{{ old( 'plan_id' ) }}" required />

   @if ( $errors->has( 'plan_id' ) )
    {{ $errors->first( 'plan_id' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

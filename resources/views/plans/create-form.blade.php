<form method="POST" action="{{ route( 'plans.store' ) }}">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Plan details' ) }}</legend>

  <div>
   <label for="name" class="block p-2 font-semibold">{{ __( 'Name' ) }}</label>
   <input type="text" name="name" id="name" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white text-base font-normal shadow focus:shadow-md" value="{{ old( 'name' ) }}" required autofocus />

   @if ( $errors->has( 'name' ) )
    {{ $errors->first( 'name' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="description" class="block p-2 font-semibold">{{ __( 'Description' ) }}</label>
   <textarea name="description" id="description" class="appearance-none outline-none cursor-text block resize-y w-full leading-snug py-1 px-2 border border-transparent bg-white text-base font-normal shadow focus:shadow-md">{{ old( 'description' ) }}</textarea>

   @if ( $errors->has( 'description' ) )
    {{ $errors->first( 'description' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="price" class="block p-2 font-semibold">{{ __( 'Price' ) }}</label>
   <input type="number" min="0" step="0.01" name="price" id="price" value="{{ old( 'price' ) }}" required />

   @if ( $errors->has( 'price' ) )
    {{ $errors->first( 'price' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Plan details' ) }}</legend>

  <div>
   <label for="product_id" class="block p-2 font-semibold">{{ __( 'Product id' ) }}</label>
   <input type="text" name="product_id" id="product_id" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white text-base font-normal shadow focus:shadow-md" value="{{ old( 'product_id' ) }}" required />

   @if ( $errors->has( 'product_id' ) )
    {{ $errors->first( 'product_id' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="product_name" class="block p-2 font-semibold">{{ __( 'Product name' ) }}</label>
   <input type="text" name="product_name" id="product_name" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white text-base font-normal shadow focus:shadow-md" value="{{ old( 'product_name' ) }}" required />

   @if ( $errors->has( 'product_name' ) )
    {{ $errors->first( 'product_name' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="plan_id" class="block p-2 font-semibold">{{ __( 'Plan id' ) }}</label>
   <input type="text" name="plan_id" id="plan_id" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white text-base font-normal shadow focus:shadow-md" value="{{ old( 'plan_id' ) }}" required />

   @if ( $errors->has( 'plan_id' ) )
    {{ $errors->first( 'plan_id' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Create' ) }}</button>
</form>

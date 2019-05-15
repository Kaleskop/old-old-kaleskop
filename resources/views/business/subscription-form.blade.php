<form action="{{ route( 'plans.subscribe' ) }}" method="POST" id="checkout-form">
 @csrf

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Subscription details' ) }}</legend>

  <div>
   <label class="block p-2 font-semibold">{{ __( 'Choose plan' ) }}</label>

   <div>
    @forelse( $plans as $plan )
    <div>
     <div>
      <input type="radio" name="plan" id="{{ $plan->plan_id }}" value="{{ $plan->plan_id }}" />
      <label for="{{ $plan->plan_id }}">
       <span>{{ $plan->price }}</span>
      </label>
      <span>{{ $plan->name }}</span>
      <div>{{ Illuminate\Mail\Markdown::parse( $plan->description ) }}</div>
     </div>
    </div>

    @empty
     <p>{{ __( 'No plans' ) }}</p>

    @endforelse
   </div>

   @if ( $errors->has( 'plan' ) )
    {{ $errors->first( 'plan' ) }}
   @endif
  </div>

  <div class="mt-4">
   <label for="coupon" class="block p-2 font-semibold">{{ __( 'Coupon' ) }}</label>
   <input type="text" name="coupon" id="coupon" class="appearance-none outline-none cursor-text block w-full leading-snug py-1 px-2 rounded border border-transparent bg-white shadow focus:shadow-md" />

   @if ( $errors->has( 'coupon' ) )
    {{ $errors->first( 'coupon' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset class="mb-8">
  <legend class="p-2 font-light italic">{{ __( 'Payment details' ) }}</legend>

  <div>
   <label for="card-element" class="block p-2 font-semibold">{{ __( 'Credit or debit card' ) }}</label>
   <div id="card-element"></div>
   <div id="card-errors" role="alert"></div>
   <input type="hidden" name="stripeToken" />
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

 <button type="submit">{{ __( 'Subscribe' ) }}</button>
</form>

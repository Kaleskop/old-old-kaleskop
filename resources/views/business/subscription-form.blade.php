<form action="{{ route( 'plans.subscribe' ) }}" method="POST" id="checkout-form">
 @csrf

 <fieldset>
  <legend>{{ __( 'Subscription details' ) }}</legend>

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

  <div>
   <label for="coupon" class="block p-2 font-semibold">{{ __( 'Coupon' ) }}</label>
   <input type="text" name="coupon" id="coupon" />

   @if ( $errors->has( 'coupon' ) )
    {{ $errors->first( 'coupon' ) }}
   @endif
  </div>
 </fieldset>

 <fieldset>
  <legend>{{ __( 'Payment details' ) }}</legend>

  <div>
   <label for="card-element" class="block p-2 font-semibold">{{ __( 'Credit or debit card' ) }}</label>
   <div id="card-element"></div>
   <div id="card-errors" role="alert"></div>
   <input type="hidden" name="stripeToken" />
  </div>
 </fieldset>

 <fieldset>
  <legend>{{ __( 'Terms & Conditions' ) }}</legend>

  <div>
   <input type="checkbox" name="terms" id="terms" value="true" />
   <label for="terms">{{ __( 'I agree with the' ) }} <a href="" target="_blank">{{ __( 'Terms of service' ) }}</a></label>

   @if ( $errors->has( 'terms' ) )
    {{ $errors->first( 'terms' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Subscribe' ) }}</button>
</form>

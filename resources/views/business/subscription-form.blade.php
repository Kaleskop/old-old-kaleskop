<form action="{{ route( 'plans.subscribe' ) }}" method="POST" id="checkout-form">
 @csrf

 <fieldset>
  <legend>{{ __( 'Subscription details' ) }}</legend>

  <div>
   <label>{{ __( 'Choose plan' ) }}</label>

   <div>
    @forelse( $plans as $plan )
    <div>
     <div>
      <input type="radio" name="plan" id="{{ $plan->plan_id }}" value="{{ $plan->plan_id }}" />
      <label for="{{ $plan->plan_id }}">
       <span>{{ $plan->price }}</span>
      </label>
      <span>{{ $plan->name }}</span>
      <span>{{ $plan->description }}</span>
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
   <label for="card-element">{{ __( 'Credit or debit card' ) }}</label>
   <div id="card-element"></div>
   <div id="card-errors" role="alert"></div>
   <input type="hidden" name="stripeToken" />
  </div>

  <div>
   <label for="coupon">{{ __( 'Coupon' ) }}</label>
   <input type="text" name="coupon" id="coupon" />

   @if ( $errors->has( 'coupon' ) )
    {{ $errors->first( 'coupon' ) }}
   @endif
  </div>

  <div>
   <label for="terms">{{ __( 'Terms & Conditions' ) }}</label>

   <div>
    <input type="checkbox" name="terms" id="terms" value="true" />
    <label for="terms">{{ __( 'I agree with the' ) }} <a href="" target="_blank">{{ __( 'Terms of service' ) }}</a></label>
   </div>

   @if ( $errors->has( 'terms' ) )
    {{ $errors->first( 'terms' ) }}
   @endif
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Subscribe' ) }}</button>
</form>

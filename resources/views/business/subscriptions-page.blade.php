@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Subscriptions' ) }}</h2>
 </header>

 @include( 'business.subscription-form' )

</section>

@endsection

@push( 'scripts' )
 <script src="https://js.stripe.com/v3/"></script>
 <script src="{{ asset( 'js/kaleshop.js' ) }}" defer></script>

@endpush

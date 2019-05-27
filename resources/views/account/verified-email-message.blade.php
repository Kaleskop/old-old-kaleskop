@if ( !Auth::user()->hasVerifiedEmail() )
<div class="my-4 p-2 font-light bg-green-200 text-green-800">
 <p class="mb-4 font-medium text-normal">{{ __( 'We sent you an activation code' ) }}</p>
 <p>{{ __( 'Check your email and click on the link to verify your account.' ) }}</p>
</div>
@endif

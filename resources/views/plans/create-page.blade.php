@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'New Plan' ) }}</h2>
 </header>

 @include( 'plans.create-form' )

</section>

@endsection

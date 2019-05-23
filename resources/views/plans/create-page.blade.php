@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'New Plan' ) }}</h2>
 </header>

 @include( 'plans.create-form' )

</section>

@endsection

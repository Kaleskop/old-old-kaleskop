@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'Plans' ) }}</h2>

  <a href="{{ route( 'plans.create' ) }}" class="underline">{{ __( 'New plan' ) }}</a>
 </header>

 @include( 'plans.table' )

</section>

@endsection

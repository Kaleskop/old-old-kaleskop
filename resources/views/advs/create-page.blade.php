@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header>
  <h2>{{ __( 'New advertisement' ) }}</h2>
 </header>

 @include( 'advs.create-form' )

</section>

@endsection

@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'New advertisement' ) }}</h2>
 </header>

 @include( 'advs.create-form' )

</section>

@endsection

@extends( 'layouts.layout' )

@section( 'body' )
<div class="sm:flex">
 <div class="md:bg-grey-100">
  @include( 'layouts.sidebar' )
 </div>

 <div class="sm:flex-1 sm:order-first">
  @include( $page )
 </div>
</div>

@endsection

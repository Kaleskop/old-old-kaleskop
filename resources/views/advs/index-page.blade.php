@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2>{{ __( 'Advertisements' ) }}</h2>

  <a href="{{ route( 'advs.create' ) }}" class="underline">{{ __( 'New advertisement' ) }}</a>
 </header>

 <div>
  @forelse( $advs as $adv )
   @include( 'advs.tile' )

  @empty
   <p>{{ __( 'No advertisement' ) }}</p>

  @endforelse
 </div>
</section>

@endsection

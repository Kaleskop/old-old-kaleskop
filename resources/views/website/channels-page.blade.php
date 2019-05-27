@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Channels' ) }}</h2>
 </header>

 <div>
  @forelse( $advs as $adv )
   @include( 'advs.tile-on-channels' )

  @empty
   <p>{{ __( 'No channels' ) }}</p>

  @endforelse
 </div>

</section>

@endsection

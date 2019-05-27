@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header class="mb-4 px-2">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Channels' ) }}</h2>
 </header>

 <div class="flex flex-col">
  @forelse( $advs as $adv )
   @include( 'advs.tile-on-channels' )

  @empty
   <p>{{ __( 'No channels' ) }}</p>

  @endforelse
 </div>

</section>

@endsection

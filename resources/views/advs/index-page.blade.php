@extends( 'layouts.page' )

@section( 'page' )
<section class="px-4 py-8">
 <header class="mb-4">
  <h2 class="mb-2 font-medium text-3xl">{{ __( 'Advertisements' ) }}</h2>

  <a href="{{ route( 'advs.create' ) }}" class="underline">{{ __( 'New advertisement' ) }}</a>
 </header>

 <div class="flex flex-col">
  @forelse( $advs as $adv )
   @include( 'advs.tile' )

  @empty
   <p>{{ __( 'No advertisement' ) }}</p>

  @endforelse
 </div>
</section>

@endsection

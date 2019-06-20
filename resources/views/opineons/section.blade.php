<section class="px-2 py-8">
 <h3 class="mb-2 font-semibold text-2xl">{{ __( 'Opineon' ) }}</h3>

 @if ( isset( $opineon ) && $opineon->exists() )
  @include( 'opineons.opineon-feed', [ 'opinion'=>$opineon->first() ] )

 @else
  @auth
   @include( 'opineons.publisher' )

  @endauth
 @endif

 @isset( $opinions )
 <div class="mt-8 flex flex-col">
  @forelse( $opinions as $opinion )
   @include( 'opineons.opineon-feed' )

  @empty
   <p>{{ _( 'No opinions' ) }}</p>

  @endforelse
 </div>

 @endisset

</section>

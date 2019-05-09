<section>
 <h3>{{ __( 'Opineon' ) }}</h3>

 @if ( isset( $opineon ) && $opineon->exists() )
  @include( 'opineons.opineon', [ 'opineon'=>$opineon->first() ] )

 @else
  @auth
   @include( 'opineons.publisher' )

  @endauth
 @endif

 @isset( $opinions )
 <div>
  @forelse( $opinions as $opinion )
   @include( 'opineons.feed' )

  @empty
   <p>{{ _( 'No opinions' ) }}</p>

  @endforelse
 </div>

 @endisset

</section>

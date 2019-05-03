<section>
 <h4>{{ __( 'Comments' ) }}</h4>

 @auth
  @include( 'comments.create-form' )

 @endauth

 <div>
  @forelse( $comments as $comment )
   @include( 'comments.tile' )

  @empty
   <div>{{ __( 'No Comments' ) }}</div>

  @endforelse
 </div>
</section>

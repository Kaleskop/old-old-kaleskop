<section>
 <h4>{{ __( 'Comments' ) }}</h4>

 @auth
  @include( 'comments.create-form' )

 @endauth

 <div>
  @forelse( $comments as $comment )
   @include( 'comments.tile' )

  @empty
   <p>{{ __( 'No Comments' ) }}</p>

  @endforelse
 </div>
</section>

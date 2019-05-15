<section class="p-2">
 <h4 class="mb-2 font-medium text-sm text-gray-800 uppercase">{{ __( 'Comments' ) }}</h4>

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

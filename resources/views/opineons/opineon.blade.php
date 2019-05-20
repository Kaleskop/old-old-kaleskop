<article>
 <div>
  <figure><!-- user picture here --></figure>
  
  <div>
   <p>{{ Illuminate\Mail\Markdown::parse( $opineon->body ) }}</p>
  </div>
 </div>

 <footer>
  <small>{{ __( ':count comments', [ 'count'=>$opineon->comments_count ] ) }}</small>
 </footer>

 @include( 'comments.section', [ 'opinion'=>$opineon, 'comments'=>$opineon->comments ] )

</article>

<article>
 <div>
  <figure><!-- user picture here --></figure>
  
  <div>
   <p>{{ Illuminate\Mail\Markdown::parse( $opineon->body ) }}</p>
  </div>
 </div>

 @include( 'comments.section', [ 'opinion'=>$opineon, 'comments'=>$opineon->comments ] )

</article>

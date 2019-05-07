<article>
 <div>
  <figure><!-- user picture here --></figure>
  
  <div>
   <p>{{ Illuminate\Mail\Markdown::parse( $opinion->body ) }}</p>
  </div>
 </div>

 @include( 'comments.section', [ 'comments'=>$opinion->comments ] )

</article>

<article>
 <div>
  <figure><!-- user picture here --></figure>
  
  <div>
   <p>{{ Illuminate\Mail\Markdown::parse( $opinion->body ) }}</p>
  </div>
 </div>

 <footer class="flex">
  <small>{{ __( ':count comments', [ 'count'=>$opinion->comments_count ] ) }}</small>
 </footer>

 @include( 'comments.section', [ 'comments'=>$opinion->comments ] )

</article>

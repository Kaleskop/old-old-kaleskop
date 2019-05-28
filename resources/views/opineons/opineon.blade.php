<article class="pl-2 pr-4 border-l-2 border-kaleskop-gold">
 <div class="relative py-4 flex">
  <figure class="w-8 h-8 mr-2 rounded-full"><!-- user picture here --></figure>
  
  <div class="p-2 flex-1">
   <p>{{ Illuminate\Mail\Markdown::parse( $opineon->body ) }}</p>
  </div>
 </div>

 <footer class="flex">
  <small class="ml-auto">{{ __( ':count comments', [ 'count'=>$opineon->comments_count ] ) }}</small>
 </footer>

 @include( 'comments.section', [ 'opinion'=>$opineon, 'comments'=>$opineon->comments ] )

</article>

<form method="POST" action="{{ route( 'opineon.comment', $opinion ) }}">
 @csrf

 <fieldset>
  <legend class="p-2 font-light italic hidden">{{ __( 'Comment details' ) }}</legend>

  <div>
   <label for="body" class="block p-2 font-semibold hidden">{{ __( 'Body' ) }}</label>
   <textarea name="body" id="body" class="appearance-none outline-none cursor-text block resize-y w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" placeholder="Your comment.." required>{{ old( 'body' ) }}</textarea>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Comment' ) }}</button>
</form>

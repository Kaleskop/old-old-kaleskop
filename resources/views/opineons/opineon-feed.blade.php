<opineon-feed inline-template>

<article>
 <div>
  <div>
   <div>
    <button type="button">{{ __( 'Cancel' ) }}</button>
    <button type="button">{{ __( 'Edit' ) }}</button>
   </div>

   <div>
    <textarea></textarea>
    <button type="button">{{ __( 'Change opinion' ) }}</button>
   </div>
   <div></div>
  </div>

  <footer>
   <div>
    <figure></figure>
    
    <div>
     <p>{{ $opinion->author->name }}</p>
     <p></p>
    </div>
   </div>
   
   <div></div>
  </footer>
 </div>

 <section>
  <div></div>

  <div>
   <header>
    <h4>{{ __( 'Comments' ) }}</h4>

    <button type="button">{{ __( 'Cancel' ) }}</button>
    <button type="button">{{ __( 'New' ) }}</button>
   </header>

   <div></div>
  </div>
 </section>
</article>

</opineon-feed>

<opineon-feed inline-template>

<article>
 <div>
  <div>
   <div v-if="signedIn && canEdit">
    <button type="button" v-if="editing" v-on:click="editing = false">{{ __( 'Cancel' ) }}</button>
    <button type="button" v-else v-on:click="editing = true">{{ __( 'Edit' ) }}</button>
   </div>

   <div v-if="editing">
    <textarea></textarea>
    <button type="button">{{ __( 'Change opinion' ) }}</button>
   </div>
   <div v-else></div>
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

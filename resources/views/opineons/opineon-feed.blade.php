<opineon-feed action="{{ route( 'advs.express', $adv ) }}" v-bind:opinion="{{ $opinion }}" inline-template>

<article>
 <div>
  <div>
   <div v-if="signedIn && canEdit">
    <button type="button" v-if="editing" v-on:click="editing = false">{{ __( 'Cancel' ) }}</button>
    <button type="button" v-else v-on:click="editing = true">{{ __( 'Edit' ) }}</button>
   </div>

   <div v-if="editing">
    <textarea v-model="opineon.body"></textarea>
    <button type="button" v-on:click="newOpinion">{{ __( 'Change opinion' ) }}</button>
   </div>
   <div v-else>@{{ opineon.body }}</div>
  </div>

  <footer>
   <div>
    <figure></figure>
    
    <div>
     <p>{{ $opinion->author->name }}</p>
     <p>@{{ opineon.created_at }}</p>
    </div>
   </div>
   
   <div>
    <button type="button" v-on:click="toggleCommentSection">@{{ opineon.comments_count }} comments</button>
   </div>
  </footer>
 </div>

 <section v-if="commentSection">
  <div v-if="signedIn" v-show="commentForm">
   <comment-form v-bind:action="commentAction"></comment-form>
  </div>

  <div>
   <header>
    <h4>{{ __( 'Comments' ) }}</h4>

    <div v-if="signedIn">
     <button type="button" v-if="commentForm" v-on:click="commentForm = false">{{ __( 'Cancel' ) }}</button>
     <button type="button" v-else v-on:click="commentForm = true">{{ __( 'New' ) }}</button>
    </div>
   </header>

   <div>
    <opineon-comment v-for="comment in comments" v-bind:key="comment.id" v-bind:comment="comment"></opineon-comment>
   </div>
  </div>
 </section>
</article>

</opineon-feed>

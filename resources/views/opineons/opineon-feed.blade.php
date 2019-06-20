<opineon-feed action="{{ route( 'advs.express', $adv ) }}" v-bind:opinion="{{ $opinion }}" inline-template>

<article class="mb-4 border border-kaleskop-blue hover:bg-grey-100">
 <div>
  <div>
   <div v-if="signedIn && canEdit">
    <button type="button" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 border border-transparent font-medium text-center focus:shadow-md" v-if="editing" v-on:click="editing = false">{{ __( 'Cancel' ) }}</button>
    <button type="button" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 border border-transparent font-medium text-center focus:shadow-md" v-else v-on:click="editing = true">{{ __( 'Edit' ) }}</button>
   </div>

   <div v-if="editing">
    <textarea class="appearance-none outline-none cursor-text block resize-y w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" v-model="opineon.body"></textarea>
    <button type="button" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 ml-auto border border-transparent font-medium text-center focus:shadow-md" v-on:click="newOpinion">{{ __( 'Change opinion' ) }}</button>
   </div>
   <div class="p-2" v-else>@{{ opineon.body }}</div>
  </div>

  <footer class="p-2 flex justify-between items-center">
   <div class="flex items-center">
    <figure class="w-8 h-8 mr-2 rounded-full bg-kaleskop-blue"></figure>
    
    <div class="text-sm">
     <p>{{ $opinion->author->name }}</p>
     <p>@{{ opineon.created_at }}</p>
    </div>
   </div>
   
   <div>
    <button type="button" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 border border-transparent font-medium text-center underline" v-on:click="toggleCommentSection">@{{ opineon.comments_count }} comments</button>
   </div>
  </footer>
 </div>

 <section v-if="commentSection">
  <div class="p-4" v-if="signedIn" v-show="commentForm">
   <comment-form v-bind:action="commentAction" v-on:new-comment="onNewComment"></comment-form>
  </div>

  <div class="py-4 pl-6 pr-2">
   <header class="flex justify-between items-center">
    <h4 class="font-medium text-sm text-gray-800 uppercase">{{ __( 'Comments' ) }}</h4>

    <div v-if="signedIn">
     <button type="button" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 border border-transparent font-medium text-center focus:shadow-md" v-if="commentForm" v-on:click="commentForm = false">{{ __( 'Cancel' ) }}</button>
     <button type="button" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 border border-transparent font-medium text-center focus:shadow-md" v-else v-on:click="commentForm = true">{{ __( 'New' ) }}</button>
    </div>
   </header>

   <div class="flex flex-col">
    <opineon-comment v-for="comment in comments" v-bind:key="comment.id" v-bind:comment="comment"></opineon-comment>
   </div>
  </div>
 </section>
</article>

</opineon-feed>

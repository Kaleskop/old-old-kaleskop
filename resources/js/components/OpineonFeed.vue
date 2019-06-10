<script>
export default {
 "name": "opineon-feed",

 "props": {
  "opinion": {
   "type": Object,
   "required": true
  },
  "action": {
   "type": String,
   "required": true
  }
 },

 data() {
  return {
   "opineon": this.opinion,
   "editing": false,
   "comments": [],
   "commentSection": false
  }
 },

 "computed": {
  "endpoint": function() {
   return '/opineon/'+this.opineon.id+'/comments';
  },
  "signedIn": function() {
   return window.KALESKOP.signedIn;
  },
  "canEdit": function() {
   return window.KALESKOP.user === this.opineon.author_id;
  },
  "hasComments": function() {
   return this.opineon.comments_count > 0;
  }
 },

 "methods": {
  fetchComments() {
   return axios.get(this.endpoint);
  },
  postOpinion() {
   return axios.post(this.action, { "body": this.opineon.body });
  },
  async updateComments() {
   try {
    const result = await this.fetchComments();

    result.data.forEach(comment => {
     if (!this.comments.includes(comment)) {
      this.comments.push(comment);
     }
    });
   } catch(err) {
    console.log('comments fetch fail: ', err);
   }
  },
  async newOpinion() {
   try {
    const result = await this.postOpinion();

    this.opineon = result.data;
    this.editing = false;
    this.comments = [];

    window.events.$emit('flash', { "body": "New Opinion!" });
   } catch(err) {
    console.log('post new opinion fail: '+ err);
   }
  },
  toggleCommentSection() {
   if (this.commentSection) {
    this.commentSection = false;
    } else {
    this.commentSection = true;

    this.comments = [];
    this.updateComments();
   }
  }
 }
}
</script>

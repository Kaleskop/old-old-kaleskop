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
   "comments": []
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
  }
 },

 "methods": {
  fetchComments() {
   return axios.get(this.endpoint);
  },
  postOpinion() {
   return axios.post(this.action, { "body": this.opineon.body });
  }
 }
}
</script>

<script>
export default {
 "name": "opineon-feed",

 "props": {
  "opinion": {
   "type": Object,
   "required": true
  }
 },

 data() {
  return {
   "opineon": this.opinion
  }
 },

 "computed": {
  "endpoint": function() {
   return '/opineon/'+this.opineon.id+'/comments';
  }
 },

 "methods": {
  fetchComments() {
   return axios.get(this.endpoint);
  }
 }
}
</script>

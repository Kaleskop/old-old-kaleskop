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
 }
}
</script>

<template>

<form v-on:submit.prevent="onSubmit">
 <fieldset>
  <legend>Comment details</legend>

  <div>
   <label for="body">Body</label>
   <textarea name="body" id="body" placeholder="Your comment.." v-model="form.body" required></textarea>
  </div>
 </fieldset>

 <button type="submit">Comment</button>
</form>

</template>

<script>
import Form from "../core/Form";

export default {
 "name": "comment-form",

 "props": {
  "action": {
   "type": String,
   "required": true
  }
 },

 data() {
  return {
   "form": new Form({ 'body': '' })
  }
 },

 "methods": {
  onSubmit() {
   this.form.post(this.action).then(status => alert('All done!'));
  }
 }
}
</script>

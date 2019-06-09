<template>

<form v-on:submit.prevent="onSubmit" v-on:keydown="form.errors.clear()">
 <fieldset>
  <legend>Comment details</legend>

  <div>
   <label for="body">Body</label>
   <textarea name="body" id="body" placeholder="Your comment.." v-model="form.body" required></textarea>

   <p v-if="form.errors.has('body')" v-text="form.errors.get('body')"></p>
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

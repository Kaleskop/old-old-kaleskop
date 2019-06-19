<template>

<form v-on:submit.prevent="onSubmit" v-on:keydown="form.errors.clear()">
 <fieldset>
  <legend class="p-2 font-light italic hidden">Comment details</legend>

  <div>
   <label for="body" class="block p-2 font-semibold hidden">Body</label>
   <textarea name="body" id="body" class="appearance-none outline-none cursor-text block resize-y w-full leading-snug py-1 px-2 border border-transparent bg-white shadow focus:shadow-md" placeholder="Your comment.." v-model="form.body" required></textarea>

   <p class="text-sm text-red-400" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></p>
  </div>
 </fieldset>

 <button type="submit" class="appearance-none outline-none cursor-pointer select-none block leading-snug p-2 ml-auto border border-transparent font-medium text-center focus:shadow-md" v-bind:disabled="form.errors.any()">Comment</button>
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
   this.form.post(this.action).then(comment => window.events.$emit('new-comment', comment));

   window.events.$emit('flash', { "body": "New Comment!" });
  }
 }
}
</script>

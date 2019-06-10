<template>

<div role="alert" class="fixed z-50 inset-x-0 bottom-0 p-4 bg-kaleskop-blue text-white" v-show="show">
 {{ body }}
</div>

</template>

<script>
export default {
 "name": "flash-message",

 "props": {
  "message": {
   "type": Object
  }
 },

 data() {
  return {
   "body": '',
   "show": false
  }
 },

 created() {
  if (this.message) {
   this.flash(this.message);
  }

  window.events.$on('flash', message => this.flash(message));
 },

 "methods": {
  flash(message) {
   this.body = message.body;
   this.show = true;

   this.hide();
  },
  hide() {
   setTimeout(() => { this.show = false; },3000);
  }
 }
}
</script>

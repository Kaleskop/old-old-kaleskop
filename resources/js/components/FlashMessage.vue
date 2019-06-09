<template>

<div role="alert" v-show="show">
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

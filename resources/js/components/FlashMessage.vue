<template>

<div role="alert">
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
   "body": ''
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
  }
 }
}
</script>

<template>

<div role="alert">
 {{ body }}
</div>

</template>

<script>
export default {
 "name": "flash-message",

 "props": {
  "type": Object,
  "required": true
 },

 data() {
  return {
   "body": ''
  }
 }
}
</script>

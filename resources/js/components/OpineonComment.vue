<template>

<div>
 <figure></figure>

 <div>{{ comment.body }}</div>
</div>

</template>

<script>
export default {
 "name": "opineon-comment",

 "props": {
  "comment": {
   "type": Object,
   "required": true
  }
 }
}
</script>

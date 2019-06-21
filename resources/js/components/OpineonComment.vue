<template>

<div class="relative mb-2 p-2 flex border-l-2 border-transparent hover:border-grey-300">
 <figure class="w-8 h-8 mr-2 rounded-full bg-kaleskop-gold"></figure>

 <div class="flex-1">{{ comment.body }}</div>
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

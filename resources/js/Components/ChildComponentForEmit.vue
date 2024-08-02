<template>
  <v-row>
    <v-col col="6"
      >
      This is the child component that will send a event to parent component 
    </v-col>
    <v-col col="6">
      <button @click="$emit('increaseBy', 1)">Increase by 1</button>
      <small> this will dispatch increaseBy event from child with parameter 1 </small>
    </v-col>
  </v-row>
</template>

<script setup>
const emit = defineEmits(['increaseBy', 'submit'])
// this is telling that child component will only emit these events
// and we can do it like   emit('submit');
</script>
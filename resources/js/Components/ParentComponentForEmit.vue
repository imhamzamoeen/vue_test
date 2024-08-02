<template>
  <v-row>
    <v-col col="6"
      >This is Parent Component that will listen to child Component for event and will
      display that data in the parent component
      
    </v-col>
    <v-col col="6">
    <ChildComponentForEmit @increase-by="increaseCount"></ChildComponentForEmit>
      <!--This is expressing that increase-by is the eevnt that child will be emiting and increaseCount will be the function here to handle that  -->
      <h1> The data is : {{ count }}</h1>
      </v-col>
  </v-row>
</template>

<script setup>
import ChildComponentForEmit from './ChildComponentForEmit.vue';
import {ref} from "vue";
let count= ref(0)
const increaseCount = data =>{
  count.value += data

}

</script>

<script setup>
import { useCounterStore } from "../Store/PiniaCounterStore";

const counter = useCounterStore();

let resetStore = () => counter.$reset();
</script>

<template>
  <!-- Access the state directly from the store -->
  <div>Current Count: {{ counter.count }}</div>
  <div>Current ID: {{ counter.idval }}</div>

  <div>
    <vrow>
      <v-col col="4" col-md="4"> 
      <h1> The Double of Counter is : {{  counter.doublecounter}} </h1>
      <h1> The Triple of Counter is : {{  counter.triplecounter}} </h1>

      </v-col>
      <v-col col="4" col-md="4">
        <button class="btn btn-default" @click="counter.increment()">Increment</button>
      
      </v-col>
      <button class="btn btn-default" @click="resetStore">Reset Store</button>
    </vrow>
  </div>
</template>

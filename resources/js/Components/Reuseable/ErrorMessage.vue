<template>
    <v-row>
    <v-col
    col="12">
    <div class="error-msg">{{ error }}</div>
    </v-col>
    </v-row>
</template>



<script>
import { onMounted } from 'vue';
import { defineProps } from 'vue';
export default {
  props: { 
    // we are defining a prop named error and it says that it should be string and required
    error: {
      type: String,
      required: true,
    },
  },
  onMounted(){
    console.log("error component  mounted");
  },
  setup(props) {
    defineProps(props);
      return {
      error: props.error,
    };
  }
 
};
</script>

<style scoped>
.error {
  color: red;
}
</style>
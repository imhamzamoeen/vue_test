<script setup>
import { onMounted, defineProps, onUpdated } from "vue";
const props = defineProps(["proptest"]);

console.log(props.proptest);
onMounted(() => {
    console.log(`mounted child`);
});
onUpdated(() => {
    // text content should be the same as current `count.value`
    console.log("child updating the prop");
});
</script>
<template>
    <h1>Hy from child prop test</h1>
    <span>{{ props.proptest }}</span>
</template>

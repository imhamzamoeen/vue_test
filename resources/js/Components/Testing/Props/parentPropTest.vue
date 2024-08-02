<script setup>
import { onMounted, ref, onUpdated } from "vue";
import ChildPropTest from "./ChildPropTest.vue";

const propVal = ref(0);

onMounted(() => {
    console.log(`parent mounted`);
});

const updateProp = () => {
    propVal.value = propVal.value + 1;
};
onUpdated(() => {
    // text content should be the same as current `count.value`
    console.log("parent updating the prop");
});
</script>

<template>
    <h1>Hy from parent prop test</h1>
    <small>
        Understaning : basically prop change ho tu koi child component dobara
        mount nhe hota .. woh updated ka life cycle event chalta updated
        lifecycle is k dom tree has been updated so pehly child ka hota usky bad
        parent ka hota
    </small>
    <br>
    <button @click="updateProp">Update the prop</button>
    <child-prop-test :proptest="propVal" />
</template>

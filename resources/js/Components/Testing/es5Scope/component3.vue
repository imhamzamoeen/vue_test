<script setup>
import { onMounted } from "vue";
import {
    testObjwithoutRef,
    testObjwithRef,
    count,
    functionaddcount,
} from "./index";
onMounted(() => {
    console.log("before without ref", testObjwithoutRef);
    console.log("before with ref", testObjwithRef);
    console.log(`count before`, count);
    functionaddcount(); // it modifies the counter
    console.log(`count after`, count);
});

const checkWithoutRef = () => {
    console.log("now without ref ", testObjwithoutRef);
};
</script>
<template>
    <small>
        without ref value after changing after mount change :
        {{ testObjwithoutRef.testVal }}</small
    >
    <br />

    <small>
        with ref value after changing after mount change
        {{ testObjwithRef.testVal }}</small
    >
    <br />

    <button @click="checkWithoutRef()">Check without ref</button>
    <br />

    <router-link to="/test-es5scope-component2"> Component 1</router-link>

    <br />
    <ul>
        <li>since yeh data component 1 main change ho chuka tha and heap p tha </li>
        <li>plus import is cached  </li>
        <li>plus import is cached  </li>


    </ul>
</template>

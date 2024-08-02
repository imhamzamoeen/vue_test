<script setup>
import { onMounted } from "vue";
import {
    testObjwithoutRef,
    testObjwithRef,
    testString,
    count,
    functionaddcount,
    resetWithoutref,
} from "./index";
onMounted(() => {
    console.log("before without ref", testObjwithoutRef);
    console.log("before with ref", testObjwithRef);
    testObjwithoutRef.testVal = "newi value for without ref";
    testObjwithRef.value.testVal = "nawi value h bhai ";
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
    <button
        @click="
            testObjwithoutRef.testVal =
                'onclick withoutref testval change value'
        "
    >
        Onclick without ref change
    </button>
    <button @click="checkWithoutRef()">Check without ref</button>
    <button @click="resetWithoutref()">Set actual to null</button>

    <br />

    <button
        @click="testObjwithRef.testVal = 'onclick withref testval change value'"
    >
        Onclick with ref change
    </button>

    <router-link to="/test-es5scope-component2"> Component 2</router-link>

    <br />
    <small>notes:</small>
    <ul>
        <ul>
            common js mai jab ek var export krty tu woh apki us file mai as a
            regular variable act krta h and uska apni wali file s link nhe rehta
            .. yani export s uski value copy ho k idr aa jati and yeh ek new var
            ban jata .. jisko app update b kr skty
        </ul>
        <li>
            es6 main woh direct file s directly link hota and read only hota h
            jis file mai ap import kr rhy hoty (objects ki value tu ap kr sakty
            mgr yeh string etc nhe idr impoerted file main .. udr ap exported
            wali main change kr sakty and since yeh live connection hota tu udr
            ka change idr b hoga ).In other words, every import is a live
            connection to the exported data. Imports are read-only..iska mtlb
            yeh b h usky original jagah yani jdr s export ho rha whan s ap data
            change krien gay tu is file main b hoga
        </li>
        <li>
            on mount p without ref ki hm value change krty hn and woh change ho
            jati but buttocn click p chnage hoti mgr dom update nhe krta
        </li>
        <li>with ref s up k dom p update hota</li>
        <li>
            sirf const object , array ya jo chez reference jati woh update hoti
            baqi jo file mai likha wa wohi
        </li>
    </ul>
</template>

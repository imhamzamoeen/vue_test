import { ref } from "vue";

export let testObjwithoutRef = {
    name: "testObjWithoutRef",
    testVal: "initial test value",
};
export const testString = "testString";
export let count = 0;
export const functionaddcount = () => {
    count++;
};
export const resetWithoutref = () => {
    testObjwithoutRef=null; //for releasing heap memory
};
export const testObjwithRef = ref({ ...testObjwithoutRef });

import ParentPropTest from "../Components/Testing/Props/parentPropTest.vue";
import component1 from "../Components/Testing/es5scope/component1.vue";
import component2 from "../Components/Testing/es5scope/component2.vue";
import component3 from "../Components/Testing/es5scope/component3.vue";

export const testRoutes = [
    {
        path: "/promise",
        component: () => import("../Components/Testing/promise/index.vue"),
        name: "promise",
    },
    {
        path: "/parent-prop-test",
        component: ParentPropTest,
        name: "parent-prop-test",
    },

    {
        path: "/test-es5scope-component1",
        component: component1,
        name: "component1",
    },
    {
        path: "/test-es5scope-component2",
        component: component2,
        name: "component2",
    },
    {
        path: "/test-es5scope-component3",
        component: component3,
        name: "component3",
    },
];

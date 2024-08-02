import { createRouter,createWebHistory } from "vue-router";
import {testRoutes} from "./testRoutes"
import HeaderComponent from "../Components/Header.vue"
import OptionsComponent from "../Components/Options.vue"
import CompositionComponent from "../Components/Composition.vue"
import StoreComponent from "../Components/Store.vue"
import BooksComponent from "../Components/Books.vue"
import BooksCreateComponent from "../Components/BooksCreate.vue"
import PiniaStoreComponent from "../Components/PiniaStoreComponent.vue"
import EmitComponent from "../Components/ParentComponentForEmit.vue"







const routes =[
    ...testRoutes,
    {
        path: "/",
        component:OptionsComponent,
        name: "home",
    },
    {
        path: '/options',
        component:OptionsComponent,
        name:'options',
    },
    {
        path: '/composition',
        component:CompositionComponent,
        name:'composition',
    },
    {
        path: '/Store',
        component:StoreComponent,
        name:'store',
    },
    {
        path: '/books',
        component:BooksComponent,
        name:'books',
    },
    {
        path: '/books/create',
        component:BooksCreateComponent,
        name:'booksCreate',
    },
    {
        path: '/PiniaStore',
        component:PiniaStoreComponent,
        name:'PiniaStore',
    },
    {
        path: '/emit',
        component:EmitComponent,
        name:'emit',
    }
]
const router = createRouter({
    history: createWebHistory(),
    routes,
});

//global middleware as it return true or false
router.beforeEach((to, from) => {
    // ...
    console.log(to, "yeh route kr ja rha ");
    console.log(from, "yeh route khan s aa rha  ");
    // explicitly return false to cancel the navigation
    return true;
  })

export default router;

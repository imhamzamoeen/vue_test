import {createStore} from "vuex";
import axios from "axios";
export default createStore({
    state:{
        //state basically holds the data

        color:"red",
        tasks:"test",
        tasksArray:[
            {
                "id":1,
                "name":"ali",

            },
            {
                "id":1,
                "name":"ali",

            },
        ]

    },mutations:{
    // if we want to change the state directly, we can commit a mutation
    changeColor(state,value){
        state.color=value;
    }
    },actions:{
        // if you want to update the state that needs an api or needs wait  then we use actions to commit the mutation to change the state
        GetRandomColor({commit}){
                console.log("inside random color");
                let response=  axios.get("/api/getRandomColor").then(response=>{

                commit('changeColor',response.data)

                }).catch(error=>{
                    console.log(response);
                });


        }
    },getters:{
        //if we want to change the state like its accessor of laravel
        GetUpperColor(state){
            return state.color.toUpperCase();
        }
    },modules:{
        // yeh kis module ka store
    }
})

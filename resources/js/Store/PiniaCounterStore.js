import { defineStore } from 'pinia'



//the difference between vuex and store is that store is like composeable and we can direclty access its state getter and action with name.uscheezkanaam 
// vuex main hmien woh dispatch , mutate etc krna parta tha 
export const useCounterStore = defineStore('counter', {
  state: () => {
    //state basically holds the data 
    // its like data function that are reactive by default
    return {
      count: 5,
      idval:1,
      users: [
        {
          'id': 1,
          'name': 'John',
        },
        {
          'id': 2,
          'name': 'Qazi',
        }
      ],
    }
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  actions: {
    // actions are used to change the state of the store 
    increment() {
      console.log("increment function running");
      this.count++
    },
  },
  getters: {
    //getters are basically computed
    doublecounter: state => state.count * 2,
    triplecounter: state => state.count * 3,
  }

})
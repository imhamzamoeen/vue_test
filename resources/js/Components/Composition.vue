<template>
  <div class="row">
    <div class="col-md-12">
      <h1>Add the task from here</h1>
      <small> Your total tasks right now is {{ TasksCount }} !</small>
      <br />
      <label for="task">Task </label>
      <input
        type="text"
        class="form-control"
        placeholder="task"
        name="task"
        style="background-color: black; color: white"
        v-model="task"
      />
      <button class="btn btn-primary" @click="AddTask">Add Task</button>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(value, index) in tasksArray" :key="value.id">
            <th scope="row">{{ value.id }}</th>
            <td>{{ value.title }}</td>
            <td>
              <button class="btn btn-danger" @click="DeleteTask(value.id)">
                Delete
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script>
import { ref, watch, computed } from "vue";
export default {
  name: "composition",
  /* it only has setup method that contains all methods data etc
    so whatever is needed or used above must be returened from setup function
    we need to make variables reactive so any changes in that would reactive
    variables are accessed like var.data
    */

  /* ref vs reactive
   for ref you need to use .value to get the value of variable but in reactive you dont need that
   for reactive you import reactive from vue
   and reactive is for only objects while ref is for boths
   create a object
   let reactivedata= reactive({
    tasksArray: [],
    task:'',
   })
    and would be used as reactivedata.tasksArray or reactivedata.task in everywhere
    */
  mounted() {
    console.log("mounted");
    console.log(this);
  },
  setup() {
    /* ref basically creates an object and has .value to get the value of the variable or object */
    let task = ref(""); // ref is to make changes happen happen
    let tasksArray = ref([
      {
        id: 0,
        title: "Home",
      },
      {
        id: 1,
        title: "Doctor",
      },
    ]);

    function AddTask() {
      //   console.log(this.task);       // is main this. work kr jata but neechy waly main nhe
      tasksArray.value.push({
        id: tasksArray.value.length,
        title: task.value,
      });
      task.value = "";
    }
    function DeleteTask(index) {
      tasksArray.value.splice(index, 1);
    }
    /* the nechy wala alsso works */
    //     let AddTask = () => {
    //   console.log(this.task);
    //       tasksArray.value.push({
    //         id: tasksArray.value.length,
    //         title: task.value,
    //       });
    //       task.value = "";
    //     };

    /* watchers you need to import it from vue first */
    watch(task, (value) => {
      if (value == "faisal") {
        alert("this name is not already");
        task.value = "";
      }
    });


    /* computed */

    let TasksCount = computed(() => {
      return tasksArray.value.length;
    });

    return {
      /* all the variables and function that are used above */
      task,
      tasksArray,
      AddTask,
      DeleteTask,
      TasksCount,
    };
  },
};
</script>

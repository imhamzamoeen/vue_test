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
                            <button
                                class="btn btn-danger btn-large"
                                @click="DeleteTask(value.id)"
                            >
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
export default {
    mounted() {
        console.log("mounted");
        console.log(this);
    },
    /* data returns an array of data. it is like a function
  all variables in data are by default reactive
  */
    data() {
        return {
            task: "",
            tasksArray: [
                {
                    id: 0,
                    title: "Home",
                },
                {
                    id: 1,
                    title: "Doctor",
                },
            ],
        };
    },
    /* watchers methods etc are obj */
    /* methods contains obj that are functions */
    methods: {
        AddTask() {
            console.log("pushed");
            this.tasksArray.push({
                id: this.tasksArray.length,
                title: this.task,
            });
            this.task = "";
        },
        DeleteTask(index) {
            this.tasksArray.splice(index, 1);
        },
    },
    /* watchers are what look are watches something like input i.e if a input gets something alert etc
    watchers are on the name of that input
    */
    watch: {
        task(val) {
            if (val == "faisal") {
                alert("faisal word is not accepted");
                this.task = "";
            }
        },
    },
    /*
    computed are that dont get arguemnt and run automatically
    computed are what that return what need some computation logic like eik array ki length jab b update ho
    tu computed khud e compute kr k apko oper dy dy
    its called like function but it dont take argument ..
    is function k andar jo b data use ho rha hota woh jab change ya update hota tu khud e call ho jata
    */
    computed: {
        TasksCount() {
            return this.tasksArray.length;
        },
    },
};
</script>

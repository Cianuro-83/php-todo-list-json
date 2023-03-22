const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "to do list php e json",
      lista: [],
      nuovoTask: "",
    };
  },
  methods: {
    // faccio la chiamata axios per recuperare i dati dall'API
    fetchTodoList() {
      axios
        .get("./server.php")
        .then((res) => {
          console.log(res.data);
          this.lista = res.data;
        })
        .catch((err) => {
          console.log(err);
          this.todos = [];
        });
    },
    // creo nuovo task
    createTask() {
      console.log("nuovo task", this.nuovoTask);

      $data = [
        {
          task: this.nuovoTask,
          done: false,
        },
      ];

      axios
        .post("./server.php", $data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          this.lista = res.data;
          this.newTodo = "";
        })
        .catch((err) => {
          console.log(err);
        });
    },
    //FINE METHODS
  },
  mounted() {
    this.fetchTodoList();
  },
}).mount("#app");

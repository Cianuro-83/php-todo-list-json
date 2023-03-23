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
      if (!this.nuovoTask.trim()) {
        return;
      }
      console.log("nuovo task", this.nuovoTask);

      let data = {
        task: this.nuovoTask.trim(),
      };

      axios
        .post("./server.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          this.lista = res.data;
          this.nuovoTask = "";
        })
        .catch((err) => {
          console.log(err);
        });
    },
    statoDelTask(task) {
      task.done = !task.done;
    },

    eliminaTask(index) {
      this.lista.splice(index, 1);
    },
    //FINE METHODS
  },
  mounted() {
    this.fetchTodoList();
  },
}).mount("#app");

const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "to do list php e json",
      lista: [],
    };
  },
  methods: {
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
  },
  mounted() {
    this.fetchTodoList();
  },
}).mount("#app");

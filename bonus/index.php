<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONUS TO DO LIST PHP E JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- FONTAWESOME FREE -->
    <script src="https://kit.fontawesome.com/6b35d32b47.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

    <div id="app">
        <div class="container container-scb py-5 my-5">
            <h1 class="text-center text-uppercase">{{titolo}}</h1>
            <div class="container container-scb2 py-5 my-5">
                <ul class="list-group">
                    <li @click="statoDelTask(task)" class="list-group-item" v-for="(task,index) in lista" :key="index">
                        <div class="scb-icon">
                            <span :class="task.done ? 'text-decoration-line-through' : ''">{{task.task}}</span>
                            <span @click.stop="eliminaTask(task)" class="">
                                <i class="fa-solid fa-trash-can-arrow-up"></i>
                            </span>

                        </div>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-center">
                    <input v-model="nuovoTask" @keyup.enter="createTask" type="text" name="task"
                        placeholder="inserisci il nuovo task" class="my-3">
                    <button @click="createTask" type="submit" class="text-uppercase">inserisci</button>
                </div>




            </div>
        </div>

        <script src="./script.js"></script>
</body>

</html>
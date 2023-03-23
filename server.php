<?php
// importo il file json
$todo= file_get_contents("./todo.json");
// decodifico il file json
$todo_decodificato = json_decode($todo, true);
// verifico che il server sia collegato al file json
// var_dump($todo, "<br> <br> ",  $todo_decodificato);

// ricevo il nuovo task
$new_task = isset($_POST["task"]) ? $_POST["task"] : null;

// converto la stringa in un array associativo
$prova=[
    "task"=>$new_task,
    "done"=>false,
];


if ($new_task) {
  $todo_decodificato[] = $prova;
}

// sovrascrivo il file json
file_put_contents("./todo.json",json_encode($todo_decodificato));
//imposto l'header Content-Type
header('Content-Type: application/json');
// ricodifico il file json
echo json_encode($todo_decodificato);
?>
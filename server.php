<?php
// importo il file json
$todo= file_get_contents("./todo.json");
// decodifico il file json
$todo_decodificato = json_decode($todo, true);
// verifico che il server sia collegato al file json
var_dump($todo, "<br> <br> ",  $todo_decodificato);


$new_task = json_encode($todo_decodificato);
file_put_contents('./todo.json', $new_task);

//imposto l'header Content-Type
header('Content-Type: application/json');
// la stringa json
echo $new_task;
?>
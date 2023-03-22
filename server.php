<?php
// leggo il contenuto del file json
$todo= file_get_contents("./todo.json");
$todo_decodificato = json_decode($todo, true);
var_dump($todo, "<br> <br> ",  $todo_decodificato);





?>
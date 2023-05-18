<?php

$json_object = file_get_contents('db.json');


$task_list = json_decode($json_object);

var_dump($task_list);
?>
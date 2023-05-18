<?php

$json_string = file_get_contents('data.json');


$task_list = json_decode($json_string, true);

if(isset($_POST['toDoTask'])){
    $task_list[] = $_POST['toDoTask'];
    writeOn($task_list);
};

function writeOn($task_list) {
    file_put_contents('data.json', json_encode($task_list));
};

header('Content-Type: application/json');

echo json_encode($task_list);
?>
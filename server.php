<?php

$json_string = file_get_contents('data.json');


$task_list = json_decode($json_string, true);

if(isset($_POST['task'])){

    $newTask = [
        "task" => $_POST['task'],
        'done' => false
    ];
    $task_list[] = $newTask;
    writeOn($task_list);
};

if(isset($_POST['taskToDelete'])) {
    $index = $_POST['taskToDelete'];
    array_splice($task_list, $index, 1);
    writeOn($task_list);
}

if(isset($_POST['indexToToggle'])) {
    $index = $_POST['indexToToggle'];
    $task_list[$index]['done'] = !$task_list[$index]['done'];
    writeOn($task_list);
}

function writeOn($task_list) {
    file_put_contents('data.json', json_encode($task_list, JSON_PRETTY_PRINT));
};

header('Content-Type: application/json');

echo json_encode($task_list);
?>
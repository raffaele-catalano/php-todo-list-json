<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/todoist_favicon.png" type="png">
    <!-- font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
    <!-- Axios -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.js' integrity='sha512-RjvSEaeDqPCfUVQ9kna2/2OqHz/7F04IOl1/66LmQjB/lOeAzwq7LrbTzDbz5cJzlPNJ5qteNtHR56XaJSTNWw==' crossorigin='anonymous'></script>
    <!-- Vue -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.47/vue.global.js' integrity='sha512-2zwx0mkoR2cxZY0humPK79YhJYgoX5lT+WNqkgTcV7qhVm3+msjlmOgoXnN1cW2r9qqbZez3XhnLZsyW3k8Wtg==' crossorigin='anonymous'></script>
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ToDoist</title>
</head>

<body>
    <div id="app">

        <div class="logo-wrapper">
            <img src="assets/img/logo.png" alt="logo">
        </div>

        <div class="input-area">

            <input type="text" placeholder="Aggiungi un nuovo Task">
            <button>AGGIUNGI</button>
        </div>

        <!-- <div class="error-message-container">
            <h3>ERRORE</h3>
        </div> -->

        <!-- --- -->

        <div class="list-container">
            
            <ul class="tasks-list">

                <li v-for="(task, index) in taskList" :key="index"> 
                    <span>{{task.task}}</span>
                    <i
                        class="fa-solid fa-trash"
                        @mouseover="shake = true"
                        @mouseleave="shake = false"></i>
                    
                </li>

            </ul>

        </div>

    </div>

    <script src="main.js"></script>
</body>

</html>
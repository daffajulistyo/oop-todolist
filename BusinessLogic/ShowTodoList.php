<?php

function showTodoList(){
    global $todoList;

    echo "TODOLIST" . PHP_EOL;
    echo "-------------------".PHP_EOL;

    foreach($todoList as $no => $value){
        echo "$no. $value" . PHP_EOL;
    }
}
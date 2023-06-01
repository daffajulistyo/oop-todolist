<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todo" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal Menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}

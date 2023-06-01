<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Daffa");
addTodoList("Julistio");

var_dump($todoList);
<?php

require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Lupa");
addTodoList("Ingatan");
addTodoList("Good");

showTodoList();
removeTodoList(2);
showTodoList();
var_dump(removeTodoList(5));
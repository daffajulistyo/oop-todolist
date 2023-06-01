<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Fe");
addTodoList("Fef");
addTodoList("Fed");

viewAddTodoList();

showTodoList();
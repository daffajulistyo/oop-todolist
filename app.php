<?php

require_once __DIR__ . "/Model/TodoList.PHP";
require_once __DIR__ . "/BusinessLogic/AddTodoList.PHP";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.PHP";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.PHP";
require_once __DIR__ . "/View/ViewAddTodoList.PHP";
require_once __DIR__ . "/View/ViewShowTodoList.PHP";
require_once __DIR__ . "/View/ViewRemoveTodoList.PHP";
require_once __DIR__ . "/Helper/input.php";


echo "Aplikasi To Do List" . PHP_EOL;

viewShowTodoList();

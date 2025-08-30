<?php

use App\Controller\AppController;
use App\Controller\TodoItems\SalvarController as TodoItemSalvarController;
use App\Controller\TodoItems\ToggleController;
use App\Controller\TodoItems\RemoverController as TodoItemRemoverController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;

$router = [
    'routes' => [
        '/' => AppController::class,
        '/todo-items/salvar' => TodoItemSalvarController::class,
        '/todo-items/toggle' => ToggleController::class,
        '/todo-items/remover' => TodoItemRemoverController::class,
        '/error' => ErrorController::class,
    ],
    'default' => NotFoundController::class
];

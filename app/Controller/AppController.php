<?php

namespace App\Controller;

use App\Model\Tarefa;

class AppController extends AbstractController
{
    public function index(array $requestData): void
    {
        $tarefaModel = new Tarefa();
        $todoItems = $tarefaModel->findAll();

        $this->render('index.php', [
            'todoItems' => $todoItems
        ]);
    }
}

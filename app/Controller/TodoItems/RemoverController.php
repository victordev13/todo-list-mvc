<?php

namespace App\Controller\TodoItems;

use App\Controller\AbstractController;
use App\Model\Tarefa;

class RemoverController extends AbstractController
{
    public function index(array $requestData): void
    {
        if (!isset($requestData['id'])) {
            $this->redirectToError("ID não informado");
        }

        $tarefaModel = new Tarefa();
        $success = $tarefaModel->delete((int)$requestData['id']);

        if ($success) {
            $this->redirect('/');
        } else {
            $this->redirectToError("Erro ao remover item");
        }
    }
}

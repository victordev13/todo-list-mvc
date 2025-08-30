<?php

namespace App\Controller\TodoItems;

use App\Controller\AbstractController;
use App\Model\Tarefa;

class SalvarController extends AbstractController
{
    public function index(array $requestData): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirectToError("Método não permitido");
        }

        if (empty($requestData['title'])) {
            $this->redirectToError("Título é obrigatório");
        }

        $data = [
            'title' => trim($requestData['title']),
            'description' => trim($requestData['description'] ?? ''),
            'completed' => isset($requestData['completed']) ? (int) $requestData['completed'] : 0
        ];

        $tarefaModel = new Tarefa();
        if (!empty($requestData['id'])) {
            $success = $tarefaModel->update((int) $requestData['id'], $data);
        } else {
            $success = $tarefaModel->create($data);
        }

        if ($success) {
            $this->redirect('/');
        } else {
            $this->redirectToError("Erro ao salvar item");
        }
    }
}

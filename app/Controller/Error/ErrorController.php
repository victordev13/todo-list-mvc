<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function index(array $requestData): void
    {
        $data = [
            'mensagem' => $requestData['mensagem'] ?? 'Erro interno do servidor'
        ];

        $this->render('error.php', $data);
    }
}

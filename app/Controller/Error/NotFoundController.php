<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class NotFoundController extends AbstractController
{
    public function index(array $requestData): void
    {
        $data = [
            'mensagem' => 'Página não encontrada'
        ];

        $this->render('404.php', $data);
    }
}

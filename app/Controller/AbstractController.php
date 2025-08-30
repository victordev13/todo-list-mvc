<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName, array $data = []): void
    {
        require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    public function redirectToError(string $mensagemErro): never
    {
        header("Location: /error?mensagem=" . urlencode($mensagemErro));
        die();
    }

    abstract public function index(array $requestData): void;
}

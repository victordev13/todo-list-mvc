<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List - Erro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main>
        <div class="border-bottom mb-2">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center align-items-center py-3">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <i class="bi bi-list-check me-2 fs-2 text-primary"></i>
                        <span class="fs-4">Todo List Manager</span>
                    </a>

                    <ul class="nav nav-pills d-flex align-items-center">
                        <li class="nav-item"><a href="/" class="nav-link">Início</a></li>
                        <li class="nav-item"><a href="/todo-lists" class="nav-link">Minhas Listas</a></li>
                        <li class="nav-item"><a href="/todo-lists/cadastrar" class="nav-link">Nova Lista</a></li>
                    </ul>
                </header>
            </div>
        </div>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-triangle fs-1 mb-3 d-block"></i>
                        <h4 class="alert-heading">Ops! Algo deu errado</h4>
                        <p class="mb-0"><?php echo htmlspecialchars($data['mensagem']); ?></p>
                        <hr>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="javascript:history.back()" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </a>
                            <a href="/" class="btn btn-primary">
                                <i class="bi bi-house"></i> Ir para o Início
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

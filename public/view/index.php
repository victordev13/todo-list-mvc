<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List - Página Inicial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                <h1 class="display-4">Minha Lista de Tarefas</h1>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <form action="/todo-items/salvar" method="POST" class="d-flex gap-2">
                        <input type="text" name="title" class="form-control" placeholder="Nova tarefa..." maxlength="255" required>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Adicionar</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="bi bi-list-ul"></i> Tarefas <span class="badge bg-secondary"><?php echo count($data['todoItems']); ?></span></h5>
                        </div>
                        <div class="card-body p-0">
                            <?php if (empty($data['todoItems'])): ?>
                                <div class="text-center py-5">
                                    <i class="bi bi-list-ul fs-1 text-muted mb-3 d-block"></i>
                                    <h5 class="text-muted">Nenhuma tarefa adicionada</h5>
                                    <p class="text-muted">Comece adicionando sua primeira tarefa acima.</p>
                                </div>
                            <?php else: ?>
                                <div class="list-group list-group-flush">
                                    <?php foreach($data['todoItems'] as $item): ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" 
                                                           type="checkbox" 
                                                           <?php echo $item['completed'] ? 'checked' : ''; ?>
                                                           onchange="toggleItem(<?php echo $item['id']; ?>)">
                                                </div>
                                                <div class="flex-grow-1 <?php echo $item['completed'] ? 'text-decoration-line-through text-muted' : ''; ?>">
                                                    <h6 class="mb-1"><?php echo htmlspecialchars($item['title']); ?></h6>
                                                </div>
                                            </div>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" 
                                                        class="btn btn-outline-danger" 
                                                        onclick="removeItem(<?php echo $item['id']; ?>)"
                                                        title="Remover tarefa">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function toggleItem(itemId) {
            window.location.href = `/todo-items/toggle?id=${itemId}`;
        }
        function removeItem(itemId) {
            if (confirm('Tem certeza que deseja remover esta tarefa?')) {
                window.location.href = `/todo-items/remover?id=${itemId}`;
            }
        }
    </script>
</body>

</html>

<?php

namespace App\Model;

use App\Database\Query;

class Tarefa
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function findById(int $id): ?array
    {
        $result = $this->query->select('tarefas', 'id = ' . $id);

        if ($result && count($result) > 0) {
            return $result[0];
        }

        return null;
    }

    public function create(array $data): int|false
    {
        return $this->query->insert('tarefas', [
            'title' => $data['title'],
            'description' => $data['description'] ?? '',
            'completed' => $data['completed'] ?? false
        ]);
    }

    public function update(int $id, array $data): bool
    {
        return $this->query->update('tarefas', [
            'title' => $data['title'],
            'description' => $data['description'] ?? '',
            'completed' => $data['completed'] ?? false
        ], 'id = ' . $id);
    }

    public function toggleCompleted(int $id): bool
    {
        $tarefa = $this->findById($id);
        if (! $tarefa) {
            return false;
        }

        $novoStatus = (int) ! $tarefa['completed'];
        return $this->query->update('tarefas', ['completed' => $novoStatus], 'id = ' . $id);
    }

    public function delete(int $id): bool
    {
        return $this->query->delete('tarefas', 'id = ' . $id);
    }

    public function findAll(): array
    {
        return $this->query->select('tarefas', null) ?: [];
    }
}

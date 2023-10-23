<?php

namespace App\Services;

use App\Interfaces\TodoRepositoryInterface;
// use App\Repositories\TodoRepository;

class TodoService
{
    private $todoRepository;
    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }
    public function getAll()
    {
        return $this->todoRepository->getAll();
    }
    public function getOne(string $id)
    {
        return $this->todoRepository->getOne($id);
    }
    public function create($todo)
    {
        return $this->todoRepository->create($todo);
    }
    public function update($todo, string $id)
    {
        return $this->todoRepository->update($todo, $id);
    }
    public function delete(string $id)
    {
        return $this->todoRepository->delete($id);
    }
}

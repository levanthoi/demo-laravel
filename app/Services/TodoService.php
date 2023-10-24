<?php

namespace App\Services;

use App\Interfaces\TodoRepositoryInterface;
use App\Interfaces\TodoServiceInterface;

// use App\Repositories\TodoRepository;

class TodoService implements TodoServiceInterface
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
    public function getOne($id)
    {
        return $this->todoRepository->getOne($id);
    }
    public function create($todo)
    {
        return $this->todoRepository->create($todo);
    }
    public function update($todo, $id)
    {
        return $this->todoRepository->update($todo, $id);
    }
    public function delete($id)
    {
        return $this->todoRepository->delete($id);
    }
}

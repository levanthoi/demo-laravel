<?php

namespace App\Repositories;

use App\Interfaces\TodoRepositoryInterface;
use App\Models\Todo;

class TodoRepository implements TodoRepositoryInterface
{
    private Todo $todo;
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }
    public function getAll()
    {
        $res = $this->todo::all();
        return $res;
    }
    public function getOne($id)
    {
        $res = $this->todo::find($id);
        return $res;
    }
    public function create($todo)
    {
        $res = $this->todo::create($todo);
        return $res;
    }
    public function update($todo, $id)
    {
        $res = $this->todo::findOrFail($id)->update($todo);
        return $res;
    }
    public function delete($id)
    {
        $res = $this->todo::findOrFail($id);
        return $res;
    }
}

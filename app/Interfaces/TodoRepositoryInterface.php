<?php

namespace App\Interfaces;

use App\Models\Todo;

interface TodoRepositoryInterface
{
    public function getAll();
    public function getOne(string $id);
    public function create(Todo $todo);
    public function update(Todo $todo, string $id);
    public function delete(string $id);
}

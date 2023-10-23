<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAll();
    public function getOne(string $id);
    public function create($todo);
    public function update($todo, string $id);
    public function delete(string $id);
}

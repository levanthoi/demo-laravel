<?php

namespace App\Interfaces;

interface TodoServiceInterface
{
    public function getAll();
    public function getOne($id);
    public function create($todo);
    public function update($todo, $id);
    public function delete($id);
};

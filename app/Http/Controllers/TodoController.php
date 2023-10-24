<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Interfaces\TodoServiceInterface;
use App\Models\Todo;
use App\Services\TodoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    private $todoService;
    public function __construct(TodoServiceInterface $todoService)
    {
        $this->todoService = $todoService;
    }
    //Get all Todos
    public function index()
    {
        $res = $this->todoService->getAll();
        return response()->json([
            "success" => true,
            "message" => "Lấy todo thành công",
            "data" => $res
        ]);
        // return response()->json($todos);
    }

    // Get a Todo
    public function show(string $id)
    {
        $res = $this->todoService->getOne($id);
        return $res;
    }
    /**
     * Create a Todo
     */
    public function create(TodoRequest $request)
    {
        $res = $this->todoService->create($request->all());
        return $res;
    }

    /**
     * Update a todo
     */
    public function update(TodoRequest $request, string $id)
    {

        $res = $this->todoService->update($request->all(), $id);
        return $res;
    }
    /**
     * Delete a todo
     */
    public function delete(string $id)
    {
        $res = $this->todoService->delete($id);
        return $res;
    }
}

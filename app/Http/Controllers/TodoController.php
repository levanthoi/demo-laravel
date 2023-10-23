<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Services\TodoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    private $todoService;
    public function __construct(TodoService $todoService)
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

    // private function validatorBody(Request $request)
    // {
    //     $validator  = Validator::make($request->all(), [
    //         'title' => 'required|string',
    //         'isCompleted' => 'required|boolean',
    //         'time' => 'nullable|date',
    //     ]);

    //     if ($validator->fails()) return false;

    //     return true;
    // }

    /**
     * Create a Todo
     */
    public function create(TodoRequest $request)
    {
        // if ($this->validatorBody($request)) {
        //     $todo = Todo::create($request->all());
        //     return response()->json($todo);
        // }
        // return response()->json([
        //     "success" => false,
        //     "message" => "Hãy nhập đúng."
        // ], 500);
        $res = $this->todoService->create($request->all());
        return $res;
    }

    /**
     * Update a todo
     */
    public function update(TodoRequest $request, string $id)
    {
        // $todo = Todo::findOrFail($id);
        // if ($this->validatorBody($request)) {
        //     $todo->update($request->all());
        //     return response()->json([
        //         "success" => true,
        //         "message" => "Cập nhật thành công.",
        //     ]);
        // }
        // return response()->json([
        //     "success" => false,
        //     "message" => "Hãy nhập tiêu đề đúng."
        // ], 500);

        $res = $this->todoService->update($request->all(), $id);
        return $res;
    }
    /**
     * Delete a todo
     */
    public function delete(string $id)
    {
        // $todo = Todo::find($id);
        // $todo->delete();
        // return response()->json([
        //     "success" => true,
        //     "message" => "Xóa thành công"
        // ]);
        $res = $this->todoService->delete($id);
        return $res;
    }
}

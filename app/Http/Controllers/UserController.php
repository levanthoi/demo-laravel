<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(string $id)
    {
        return "Hello {$id}";
    }
    public function register()
    {
        return response()->json([
            "message" => "Đăng kí thành công",
            "success" => true
        ]);
    }
    public function login()
    {
        return response()->json([
            "message" => "Đăng nhập thành công",
            "success" => true
        ]);
    }
}

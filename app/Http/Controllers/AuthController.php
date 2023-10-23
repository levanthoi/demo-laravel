<?php

namespace App\Http\Controllers;

use App\Repositories\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authRepository;
    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }
    //
    public function register(Request $request)
    {
        $user = $this->authRepository->register($request->all());
        return response()->json([
            "message" => "Đăng kí thành công",
            "success" => true,
            "data" => $user
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

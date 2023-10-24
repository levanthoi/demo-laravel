<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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
            "data" => $user,
            // "accessToken" => $user->createToken("api_token")->plainTextToken
        ]);
    }
    public function login(LoginRequest $request)
    {
        $user = $this->authRepository->login($request->all());
        return response()->json([
            "message" => "Đăng nhập thành công",
            "success" => true,
            "data" => $user,

        ]);
    }
}

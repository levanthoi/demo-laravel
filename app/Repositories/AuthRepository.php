<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthRepository implements AuthRepositoryInterface
{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function register($user)
    {
        $user = $this->user::create([
            'name' => $user["name"],
            'email' => $user["email"],
            'password' => Hash::make($user['password']),
            'api_token' => Str::random(60),
        ]);
        return $user;
    }
    public function login($user)
    {
    }
}

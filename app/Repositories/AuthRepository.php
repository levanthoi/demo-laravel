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
        ]);
        return $user;
    }
    public function login($user)
    {
        $alreadyUser = User::where('email', $user["email"])->first();
        if ($alreadyUser && Hash::check($user['password'], $alreadyUser->password)) {
            // $token = $alreadyUser->creatToken('api-token');
            $token = hash('sha256', Str::random(40));
            return $token;
        }
        return "ss";
    }
}

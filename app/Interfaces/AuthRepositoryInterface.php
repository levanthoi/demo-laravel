<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{
    public function register($user);
    public function login($user);
}

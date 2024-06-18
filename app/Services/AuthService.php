<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login($request): array
    {
        $credentials = $request->only('user', 'password');

        return $credentials;
    }

    public function register($request)
    {
        $data = $request->only(['name', 'user', 'email', 'password']);
        $data['password'] = Hash::make($data['password']);

        return $this->authRepository->insert($data);
    }
}
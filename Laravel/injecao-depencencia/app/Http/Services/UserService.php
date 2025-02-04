<?php

namespace App\Http\Services;

use App\Http\Repositories\UserRepository;

class UserService{
    protected $userRepository;

    // Injeção de dependência via construtor
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getUsers();
    }
}
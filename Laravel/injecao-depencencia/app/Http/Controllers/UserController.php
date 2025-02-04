<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;

class UserController extends Controller
{
    public function index(UserService $userService)
    {
        $users = $userService->getAllUsers();
        return view('users.index', compact('users'));
    }
}

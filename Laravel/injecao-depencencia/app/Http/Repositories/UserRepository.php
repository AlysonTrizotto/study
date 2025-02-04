<?php

namespace App\Http\Repositories;


class UserRepository{
    public function getUsers()
    {
        return ['Alice', 'Bob', 'Charlie'];
    }
}
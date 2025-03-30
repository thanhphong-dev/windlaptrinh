<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInferface;
use App\Models\User;

class UserRepository implements UserRepositoryInferface
{
    public function getAll()
    {
        return User::all();
    }
}

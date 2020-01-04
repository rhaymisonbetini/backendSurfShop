<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function create($request)
    {
        $request['nome'] = $request['nome'] ?? false;
        $request['email'] = $request['email'] ?? false;
        $request['password'] = Hash::make($request['password']) ?? false;
        return User::create($request);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user->load('articles');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }
}

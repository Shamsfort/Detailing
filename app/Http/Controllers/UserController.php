<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' => '<PASSWORD>',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => ($request->password),
        ]);
    }
}

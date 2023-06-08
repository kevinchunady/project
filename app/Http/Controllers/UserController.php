<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create() {
        $roles = Role::all();

        return view('insertion.add-user', compact('roles'));
    }

    public function store(UserRequest $request) {

        User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => Hash::make($request->user_password),
            'role_id' => $request->role_id
        ]);

        return redirect('users');
    }

    public function read() {
        $users = User::all();
        
        return view('users', compact('users'));
    }

    public function update() {

    }

    public function delete() {

    }
}

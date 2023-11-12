<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $users = $request->only(['name', 'email', 'password']);
        User::create($user);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Models\Users;

class AuthenticatedSessionController extends Controller
{
    public function store(){
        return view('login');
    }
    public function destroy(Request $request){
        $users = $request->only(['email', 'password']);
        return view('index', compact('users'));
    }

}

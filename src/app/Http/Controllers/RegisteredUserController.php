<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Work;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('register');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Models\Work;

class AuthenticatedSessionController extends Controller
{
    public function store(){
        return view('login');
    }
}

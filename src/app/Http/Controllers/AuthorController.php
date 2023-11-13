<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class AuthorController extends Controller
{
    
public function index()
{
  $user = Auth::user();
  $authors = Author::paginate(4);
  $param = ['authors' => $authors, 'user' =>$user];
  return view('index', $param);
}
}

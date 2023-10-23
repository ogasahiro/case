<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequest;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
  {
    return view('index');
  }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class WorkController extends Controller
{
    public function index(){

  return view('index');
  }

    public function attendance(){

      $authors = Author::Paginate(5);
      return view('attendance', ['authors' => $authors]);
  }

    public function workstart(Request $request){
      $user = Auth::user();

      $work = Work::create([
       'user_id' => $user->id,
       'workstart' => Carbon::now()->format('H:i'),
       'worktime' => Carbon::now()->format('Y-m-d'),
        ]);
      return redirect()->back();
  
}
public function workend(){

  $user = Auth::user();
  $work = Work::create([
       'user_id' => $user->id,
       'workend' => Carbon::now()->format('H:i'),
        ]);
      return redirect()->back();
}
public function breakstart(){
  
  $break -> breakstart = Carbon::now()->format('H:i');
  $break -> breaktime = Carbon::now()->format('Y-m-d');
  $break -> work_id = Work::id();
  $break -> save();
  
  return redirect('attendance',['break' => $break]);
}
public function breakend(Request $request){
  $break -> breakend = Carbon::now()->format('H:i');
  $break -> work_id = Work::id();
  $break -> save();
  
  return redirect('attendance',['break' => $break]);
}
public function check(Request $request)
{
  $text = ['text' => 'ログインして下さい。'];
  return view('auth', $text);
}

public function checkUser(Request $request)
{
  $email = $request->email;
  $password = $request->password;
  if (Auth::attempt(['email' => $email,
    'password' => $password])) {
    $text =   Auth::user()->name . 'さんがログインしました';
  } else {
    $text = 'ログインに失敗しました';
  }
  return view('auth', ['text' => $text]);
}
}
?>








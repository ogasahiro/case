<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Models\User;
use App\Models\Break;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index(){
      $user = Auth::user();
  $authors = Author::paginate(4);
  $param = ['authors' => $authors, 'user' =>$user];
  return view('index', $param);
  }

    public function attendance(){

    return view('attendance');
  }

    public function workstart(Request $request){
  $work -> workstart = Carbon::now()->format('H:i');
  $work -> worktime = Carbon::now()->format('Y-m-d');
  $work -> user_id = Auth::id();
  $work -> save();
  
  return redirect('attendance', ['work' => $work]);

}
public function workend(Request $request){
  $work -> workend = Carbon::now()->format('H:i');
  $work -> user_id = Auth::id();
  $work -> save();
  
  return redirect('attendance',['work' => $work]);
}
public function breakstart(Request $request){
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








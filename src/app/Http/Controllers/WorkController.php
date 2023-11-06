<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequest;
use App\Models\Works;
use App\Models\Users;
use App\Models\Breaks;

class WorkController extends Controller
{
    public function index(){
    return view('index');
  }

    public function attendance(){

    return view('attendance');
  }

    public function workstart(Request $request){
  $work = $request->only(['workstart','worktime','user_id']);
  $work -> workstart = Carbon::now()->format('H:i');
  $work -> worktime = Carbon::now()->format('Y-m-d');
  $work -> user_id = user::id();
  $work -> save();
  
  return redirect('attendance', ['work' => $work]);

}
public function workend(Request $request){
  $work = $request->only(['workend','user_id']);
  $work -> workend = Carbon::now()->format('H:i');
  $work -> user_id = user::id();
  $work -> save();
  
  return redirect('attendance',['work' => $work]);
}
public function breakstart(Request $request){
  $break = $request->only(['breakstart','breaktime','work_id']);
  $break -> breakstart = Carbon::now()->format('H:i');
  $break -> breaktime = Carbon::now()->format('Y-m-d');
  $break -> work_id = work::id();
  $break -> save();
  
  return redirect('attendance',['break' => $break]);
}
public function breakend(Request $request){
  $break = $request->only(['breakend','work_id']);
  $break -> breakend = Carbon::now()->format('H:i');
  $break -> work_id = work::id();
  $break -> save();
  
  return redirect('attendance',['break' => $break]);
}
}
?>








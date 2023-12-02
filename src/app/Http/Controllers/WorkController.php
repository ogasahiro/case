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

      $works = Work::Paginate(5);
      return view('attendance', ['works' => $works]);
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
public function workend(Request $request){
  

  $user = Auth::user();
  $work = Work::create([
       'user_id' => $user->id,
       'workend' => Carbon::now()->format('H:i'),
        ]);
        $works = Work::all();
       dd($works); 
      return redirect()->back();
}
public function breakstart(Request $request){
  
  $work = Auth::work();
  
}
public function breakend(Request $request){
  $work = Auth::work();
  
}
}








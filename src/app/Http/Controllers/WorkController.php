<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequest;
use App\Models\Works;
use App\Models\Users;
use App\Models\Breaks;

class WorkController extends Controller
{
    public function index()
  {
    return view('index');
  }
  public function attendance()
     {
         $works = Work::all();

         return view('attendance', compact('works'));
     }
     public function workstart(Request $request)
{
  $works = $request->only(['workstart']);
  Work::create($works);

  return redirect('/works')->with('message', 'カテゴリを作成しました');
}
public function update(CategoryRequest $request)
{
  $category = $request->only(['name']);
  Category::find($request->id)->update($category);

  return redirect('/categories')->with('message', 'カテゴリを更新しました');
}
public function destroy(Request $request)
{
  Category::find($request->id)->delete();

  return redirect('/categories')->with('message', 'カテゴリを削除しました');
}
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/login',[AuthenticatedSessionController::class,'destroy']);
Route::get('/',[WorkController::class,'index']);
Route::post('/workstart',[WorkController::class,'workstart']);
Route::post('/workend',[WorkController::class,'workend']);
Route::post('/breakstart',[WorkController::class,'breakstart']);
Route::post('/breakend',[WorkController::class,'breakend']);
Route::get('/attendance',[WorkController::class,'attendance']);
Route::get('/auth', [AuthorController::class,'check']);
Route::post('/auth', [AuthorController::class,'checkUser']);
Route::get('/home', [AuthorController::class, 'index'])->middleware('auth');
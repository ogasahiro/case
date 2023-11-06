<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;


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
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('users/store', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('users/destroy', [AuthenticatedSessionController::class, 'destroy']);

Route::get('/', [WorkController::class, 'index']);
Route::post('/workstart/{user_id}', [WorkController::class, 'workstart']);
Route::post('/workend/{user_id}', [WorkController::class, 'workend']);
Route::post('/breakstart/{work_id}', [WorkController::class, 'breakstart']);
Route::post('/breakend/{work_id}', [WorkController::class, 'breakend']);
Route::get('/attendance', [WorkController::class, 'attendance']);
Route::post('/attendance', [WorkController::class, 'attendance']);



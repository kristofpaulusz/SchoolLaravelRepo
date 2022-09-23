<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// get all tasks
Route::get('/api/tasks', [TaskController::class, 'index']);
/* GET -1 /api/task/1 */
Route::get('api/tasks/{id}', [TaskController::class, 'show']);

Route::post('/api/tasks', [TaskController::class, 'store']);

Route::put('/api/tasks/{id}', [TaskController::class, 'update']);

Route::delete('api/tasks/{id}', [TaskController::class, 'destroy']);

Route::get('/task/new', [TaskController::class, 'newView']);

Route::get('/task/edit/{id}', [TaskController::class, 'editView']);

Route::get('/task/list', [TaskController::class, 'listView']);

// User Routes
Route::get('/api/users', [UserController::class, "index"]);

Route::get('/api/users/{id}', [UserController::class, "show"]);

Route::post('/api/users', [UserController::class, "store"]);

Route::put('/api/users/{id}', [UserController::class, 'update']);

Route::patch('/api/users/{id}', [UserController::class, 'update']);

Route::delete('/api/users/{id}', [UserController::class, 'destroy']);

Route::get('/user/new', [UserController::class, 'newView']);

Route::get('/user/list', [UserController::class, 'listView']);

Route::get('/user/edit/{id}', [UserController::class, 'editView']);

Route::get('/user/edits', [UserController::class, 'editAll']);

Route::get('/user/patch/{id}', [UserController::class, 'patchView']);

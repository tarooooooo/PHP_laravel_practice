<?php

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
// 一覧画面表示
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
// 追加画面を表示するための設定
Route::get('/tasks/create', [App\Http\Controllers \TaskController::class, 'create']);
// 編集画面を表示するための設定
Route::get('/tasks/{id}/edit', [App\Http\Controllers \TaskController::class, 'edit']);
// 削除画面を表示するための設定
Route::get('/tasks/{id}', [App\Http\Controllers \TaskController::class, 'show']);
//タスク登録
Route::post('/tasks', [App\Http\Controllers \TaskController::class, 'store']);
// タスク更新
Route::patch('/tasks/{id}', [App\Http\Controllers \TaskController::class, 'update']);
// タスク削除
Route::delete('/tasks/{id}', [App\Http\Controllers \TaskController::class, 'destroy']);

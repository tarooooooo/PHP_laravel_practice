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

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
// 追加画面を表示するための設定
Route::get('/tasks/create', function () {
    return  view('tasks.create');
});
// 編集画面を表示するための設定
Route::get('/tasks/{id}/edit', function () {
    return  view('tasks.edit');
});
// 削除画面を表示するための設定
Route::get('/tasks/{id}', function () {
    return  view('tasks.show');
});

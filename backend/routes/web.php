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

$html = <<<EOF
<html>
    <head>
        <title>Hello</title>
        <style>
            body {font-size: 16pt; color: #999; }
            h1 {  font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
        </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>This is sample page.</p>
        <p>これは、サンプルで作ったページです</p>
    </body>
</html>
EOF;

Route::get('hello', function() use ($html){
    return $html;
});
// // 一覧画面表示
// Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
// // 追加画面を表示するための設定
// Route::get('/tasks/create', [App\Http\Controllers \TaskController::class, 'create']);
// // 編集画面を表示するための設定
// Route::get('/tasks/{id}/edit', [App\Http\Controllers \TaskController::class, 'edit']);
// // 削除画面を表示するための設定
// Route::get('/tasks/{id}', [App\Http\Controllers \TaskController::class, 'show']);
// //タスク登録
// Route::post('/tasks', [App\Http\Controllers \TaskController::class, 'store']);
// // タスク更新
// Route::patch('/tasks/{id}', [App\Http\Controllers \TaskController::class, 'update']);
// // タスク削除
// Route::delete('/tasks/{id}', [App\Http\Controllers \TaskController::class, 'destroy']);

Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function(){
    Route::get('/',
    [App\Http\Controllers\TaskController::class, 'index']);
    Route::get('/create',
    [App\Http\Controllers \TaskController::class, 'create']);
    Route::post('',
    [App\Http\Controllers \TaskController::class, 'store']);
    Route::get('/{id}/edit',
    [App\Http\Controllers \TaskController::class, 'edit']);
    Route::patch('/{id}',
    [App\Http\Controllers \TaskController::class, 'update']);
    Route::get('/{id}',
    [App\Http\Controllers \TaskController::class, 'show']);
    Route::delete('/{id}',
    [App\Http\Controllers \TaskController::class, 'destroy']);
});
<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
    * 一覧画面表示処理
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    // データベースのTasksテーブルから全てのデータを取得する
    $tasks = Task::all();
    // 取得したデータを一覧画面へ渡す
    return view('tasks.index')->with('tasks', $tasks);
    }
}

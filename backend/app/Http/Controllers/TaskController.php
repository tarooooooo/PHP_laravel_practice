<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
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

    /**
    * 登録画面表示処理
    *
    * @return \Illuminate\Http\Response
    */
        public function create()
        {
            // 登録画面を表示する
            return view('tasks.create');
        }
    /**
    * 登録処理
    *
    * @param  \Illuminate\Http\TaskStoreRequest  $request
    * @return \Illuminate\Http\Response
    */
        public function store(TaskStoreRequest $request)
        {
            // 画面で入力されたタスク名で新しいタスクを登録する
            $task = new Task();
            $task->name = $request->name;
            $task->save();
            // 一覧画面へリダイレクトする
            return redirect('/tasks');
        }
    
    /**
    * 編集画面表示処理
    *
    * @param int $id
    * @return \Illuminate\Http\Response */

        public function edit($id)
        {
            // データベースのTasksテーブルからidで更新対象を取得する(取得できなければ404エラーとする) 
            $task = Task::findOrFail($id);
            // 取得したデータを編集画面へ渡す
            return view('tasks.edit')->with('task', $task);
        }
    /**
    * 更新処理
    *
    * @param \Illuminate\Http\Request $request * @param int $id
    * @return \Illuminate\Http\Response
    */
        public function update(Request $request, $id)
        {
            // データベースのTasksテーブルからidで更新対象を取得する(取得できなければ404エラーとする)
            $task = Task::findOrFail($id);
            $task->name = $request->name;
            $task->save();
            // 一覧画面へリダイレクトする
            return redirect('/tasks');
        }
    
    /**
     * 削除画面表示処理
     * @param int $id
     * @return \Illuminate\Http\Response
     */
        public function show($id){
            //データベースのTaskテーブルからidで削除対象を取得する（取得できなければエラーとする）
            $task = Task::findOrFail($id);
            //取得したデータを削除画面へ渡す
            return view('tasks.show')->with('task', $task);
        }

    /**
     *削除処理
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
        public function destroy($id){
            //データベースのTasksテーブルからidで削除対象を取得する(取得できなければエラーとする)
            $task = Task::findOrFail($id);
            $task->delete();

            return redirect('/tasks');
        }
}

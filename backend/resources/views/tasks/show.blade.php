<!doctype html>
<html lang="ja">
  <head>
    <title>やること削除 | Todoアプリケーション</title>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="mt-5">
        <h1>やること削除</h1>
        <form action="/tasks/{{ $task->id }}" method="post">
          @csrf
          @method('delete')
          <div class="mt-3">
            <span>{{ $task->name }}</span>
          </div>
          <div class="mt-3">
            <button type='submit' class="btn btn-danger">実行する</button>
            <a href="/tasks" class="btn btn-secondary ml-2">キャンセル</a>
          </div>
        </form>
      </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  </body>
</html>
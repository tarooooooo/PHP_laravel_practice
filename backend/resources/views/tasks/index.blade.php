<!doctype html>
  <html lang="ja">
    <head>
      <title>やることリスト | Todoアプリケーション</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
      <div class="container">
        <div class="mt-5">
          <h1>やることリスト</h1>
          <div class="mt-3">
            <a href="tasks/create" class="btn btn-primary">追加</a>
          </div>
          @if (count($tasks) > 0)
          <div class="table-responsive mt-3">
            <table class="table table-condensed table-hover mt-2" style="min-width:800px;">
              <thead>
                <tr>
                  <th>やること</th>
                  <th colspan="2">操作</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tasks as $task)
                <tr>
                  <td>{{ $task->name }}</td>
                  <td>
                    <a href="tasks/1/edit" class="btn btn-success">編集</a>
                  </td>
                  <td>
                    <a href="tasks/1" class="btn btn-danger">削除</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @endif
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
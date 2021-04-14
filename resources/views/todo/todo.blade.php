<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/reset.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      <form action="/todo/create" method="post">
        @csrf
        <input type="text" class="todo__add" name="content">
        <input type="submit" value="追加" class="button__add">
      </form>
      @if (count($errors) > 0)
      <ul>
        @foreach($errors as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <table>
        @csrf
        <tbody>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach ($items as $item)
          <tr>
            <td>{{$item->created_at}}</td>
            <td><input type="text" name="content" value="{{$item->getData()}}" class="todo__text"></td>
            <td>
              <form action="/todo/update" method="post">
                @csrf
                <!-- <input type="hidden" name="id"> -->
                <button type="submit" class="button__update">更新</button>
              </form>
            </td>
            <td>
              <form action="/todo/delete" method="post">
                @csrf
                <!-- <input type="hidden" name="id" value="削除"> -->
                <button type="submit" name="id" class="button__delete">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/list.css')}}">
  <title>Document</title>
</head>
<body>
  <main>
    @foreach($golfparks as $golfpark)
    <div class="list">
      <a href="/list/info/{{ $golfpark->id }}">{{ $golfpark->name }}</a>
      <form method="post" action="/list/delete">
      @csrf
        <input type="hidden" name="id" value="{{ $golfpark->id }}">
        <button type="submit" class="delete">削除</button>
      </form>
    </div>
    @endforeach
    <div class="add-link">
     <a href="/form">新しくゴルフ場を<br>追加する</a>
    </div>
  </main>
</body>
</html>
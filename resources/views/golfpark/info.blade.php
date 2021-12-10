<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/info.css')}}">
  <title>Document</title>
</head>
<body>
  <main>
  <h1>{{ $golfparks->name }}</h1>
  <p>{{ $golfparks->name_kana }}</p>
  <div class="info">
  　<h2>屋根付き駐車場</h2>
    <p>{{ $golfparks->roof }}</p>
   </form>
  </div>
  <div class="info">
  　<h2>洗車場</h2>
    <p>{{ $golfparks->wash }}</p>
  </div>
  <div class="info">
  　<h2>運転手控え室</h2>
    <p>{{ $golfparks->restroom }}</p>
  </div>
  <div class="info">
  <h2>運転手食堂</h2>
    <p>{{ $golfparks->lunch }}</p>
  </div>
  <div class="info">
    <h2>喫煙</h2>
    <p>{{ $golfparks->smoke }}</p>
  </div>
  <div class="info">
  　<h2>ラウンド確認</h2>
    <p>{{ $golfparks->round }}</p>
  </div>
  <div class="info">
  　<h2>ゴルフバック受け取り</h2>
    <p>{{ $golfparks->golfbag }}</p>
  </div>
  <div class="info">
  　<h2>ボストンバック受け取り</h2>
    <p>{{ $golfparks->baggage }}</p>
  </div>
  <div class="info">
  　<h2>備考</h2>
    <p>{{ $golfparks->info }}</p>
  </div>
  <a href="/info/edit/{{ $golfparks->id }}">編集</a>
  </main>
</body>
</html>
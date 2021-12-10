<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/form.css')}}">
  <title>Document</title>
</head>

<body>
  <main>
    <form method="post" action="{{ route('update') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $golfpark->id }}">
      <p>ゴルフ場名 ※必須</p>
      <input type="text" name="name" value="{{ $golfpark->name }}">
       @if ($errors->has('name'))
        <div class="text-danger">
          {{ $errors->first('name') }}
        </div>
      @endif
      <p>ゴルフ場名（かな） ※必須</p>
      <input type="text" name="name_kana" value="{{ $golfpark->name_kana }}">
       @if ($errors->has('name_kana'))
          <div class="text-danger">
            {{ $errors->first('name_kana') }}
            </div>
      　@endif
      <p>屋根付き駐車場</p>
      <input type="text" name="roof" value="{{ $golfpark->roof }}">
      <p>洗車場</p>
      <input type="text" name="wash" value="{{ $golfpark->wash }}">
      <p>運転手控え室</p>
      <input type="text" name="restroom" value="{{ $golfpark->restroom }}">
      <p>運転手食堂</p>
      <input type="text" name="lunch" value="{{ $golfpark->lunch }}">
      <p>喫煙</p>
      <input type="text" name="smoke" value="{{ $golfpark->smoke }}">
      <p>ラウンド確認</p>
      <input type="text" name="round" value="{{ $golfpark->round }}">
      <p>ゴルフバッグ受け取り</p>
      <input type="text" name="golfbag" value="{{ $golfpark->golfbag }}">
      <p>ボストンバッグ受け取り</p>
      <input type="text" name="baggage" value="{{ $golfpark->baggage }}">
      <p>備考</p>
      <textarea name="info" rows="5">{{ $golfpark->info }}</textarea>
      <button type="submit">編集する</button>
    </form>
  </main>
</body>

</html>
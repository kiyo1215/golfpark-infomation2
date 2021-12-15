<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/register.css')}}">
  <title>ログインフォーム</title>
</head>
<body>
  <div class="main">
    <h1>Golfpark Infomation<br>for Driver</h1>
    <h2>新規登録</h2>
   <form method="POST" action="{{ route('register') }}">
    @csrf
      <p><input type="text" name="name" placeholder="名前"></p>
      <p><input type="email" name="email" placeholder="メールアドレス"></p>
      @if ($errors->has('email'))
        <div class="text-danger">
          {{ $errors->first('email') }}
        </div>
      @endif
      <p>パスワードは半角英数字８文字以上です</p>
      <p><input type="password" name="password" placeholder="パスワード"></p>
      @if ($errors->has('password'))
        <div class="text-danger">
          {{ $errors->first('password') }}
        </div>
      @endif
      <p><input type="password" name="password_confirmation" placeholder="確認パスワード"　required></p>
      <button type="submit">登録する</button>
    </form>
    
  </div>
  
</body>
</html>
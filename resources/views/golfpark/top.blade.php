<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/top.css')}}">
  <title>Document</title>
</head>
<body>

  <div class="main">


  <!-- @if (session('login_success'))
   <div>{{ session('login_success')}}</div>
  @endif -->
  @if (session('register_msg'))
    <div class="session">
        {{ session('register_msg') }}
    </div>
    @endif
    <h1>Golfpark Infomation<br>for Driver</h1>
@if (session('add_msg'))
    <div class="session">
        {{ session('add_msg') }}
    </div>
    @endif
    @if (session('delete_msg'))
    <div class="session">
        {{ session('delete_msg') }}
    </div>
    @endif
    @if (session('update_msg'))
    <div class="session">
        {{ session('update_msg') }}
    </div>
    @endif
    <ul>
      <li><a href="/list?row=1">あ行</a></li>
      <li><a href="/list?row=2">か行</a></li>
      <li><a href="/list?row=3">さ行</a></li>
    </ul>
    <ul>
      <li><a href="/list?row=4">た行</a></li>
      <li><a href="/list?row=5">な行</a></li>
      <li><a href="/list?row=6">は行</a></li>
    </ul>
    <ul>
      <li><a href="/list?row=7">ま行</a></li>
      <li><a href="/list?row=8">や行</a></li>
      <li><a href="/list?row=9">ら行</a></li>
    </ul>
    <ul>
      <li><a href="/list?row=10">わ行</a></li>
    </ul>
      
    
  </div>
  
</body>
</html>

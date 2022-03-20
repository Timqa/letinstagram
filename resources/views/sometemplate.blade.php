<!DOCTYPE html>
<html lang="ru_RU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Приветствие!</title>
  <style>
    h1 {
      text-align: center;
    }

    a {
      display: block;
      text-align: center;
    }

    .login a {
      display: flex;
      width: 25px;
      margin-left: auto;
      font-family: arial, sans-serif;
      font-size: 11px;
      color: rgb(205, 216, 228);
      text-shadow: 0 -1px rgb(46, 53, 58);
      text-decoration: none;
      user-select: none;
      line-height: 2em;
      padding: 1px 1.2em;
      outline: none;
      border: 1px solid rgba(33, 43, 52, 1);
      border-radius: 3px;
      background: rgb(81, 92, 102) linear-gradient(rgb(81, 92, 102), rgb(69, 78, 87));
      box-shadow: inset 0 1px rgba(101, 114, 126, 1),
      inset 0 0 1px rgba(140, 150, 170, .8),
      0 1px rgb(83, 94, 104),
      0 0 1px rgb(86, 96, 106);
    }
  </style>
</head>
<body>
@empty($someArray)
  <p>Страница пустая</p>
@endempty

<h1>{{ $someArray['title'] }}</h1>
<div class="login">
  <a href="/login">Login</a>
</div>
<a href="https://{{ $someArray['path'] }}">{{ $someArray['laravel'] }}</a>
</body>
</html>

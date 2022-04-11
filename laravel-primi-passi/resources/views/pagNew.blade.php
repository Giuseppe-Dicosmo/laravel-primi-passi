<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      width: 100%;
      height: 100px;
      background-image: linear-gradient(50deg,
          hsl(33deg 100% 50%) 0%,
          hsl(31deg 100% 50%) 11%,
          hsl(29deg 100% 50%) 22%,
          hsl(27deg 100% 50%) 33%,
          hsl(25deg 100% 50%) 44%,
          hsl(22deg 100% 50%) 56%,
          hsl(19deg 100% 50%) 67%,
          hsl(16deg 100% 50%) 78%,
          hsl(11deg 100% 50%) 89%,
          hsl(0deg 100% 50%) 100%);
      display: flex;
      border-bottom-right-radius: 15px;
      border-bottom-left-radius: 15px;
      justify-content: center;
      align-items: center;
      gap: 30px;
    }

    header>a {
      color: white;
      font-size: 20px;
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
    }

    header>a:hover,
    .active {
      text-shadow: 4px 4px 5px black;
    }
  </style>
</head>

<body>
  <header class="links">
    <a href="{{route('helloPag')}}">word</a>
    <a class="active" href="{{route('newPag')}}">News</a>
    <a href="https://blog.laravel.com">Docs</a>
  </header>

  <h1>{{ $new }}</h1>
</body>

</html>
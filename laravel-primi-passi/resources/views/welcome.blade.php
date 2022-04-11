<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

    <!-- Styles -->
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
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }

        svg {
            position: absolute;
            top: 100%;
            /* left: 0; */
            /* right: 0; */
            width: 100%;
            height: 40px;
        }

        header>a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
        }

        header>a:hover,
        .active {
            color: rgba(255, 255, 255, 1);
            text-shadow: 4px 4px 5px black;
        }
    </style>
</head>

<body>

    <div class="content">
        <header class="links">
            <a class="active" href="{{route('helloPag')}}">word</a>
            <a href="{{route('newPag')}}">News</a>
            <a href="https://blog.laravel.com">Docs</a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ff5500" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,272C274.3,277,343,267,411,234.7C480,203,549,149,617,160C685.7,171,754,245,823,272C891.4,299,960,277,1029,245.3C1097.1,213,1166,171,1234,160C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
            </svg>
        </header>

        <div class="title m-b-md">
            <h1>{{ $titolo }}</h1>
        </div>
    </div>
</body>

</html>
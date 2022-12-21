<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Filippo's blog</title>
</head>
<body>
    <h1>{{ $home }}</h1>

    <nav>
        <ul>
        @foreach ($links as $link)
                <li>
                    <a href="#">{{$link}}</a>
                </li>
        @endforeach
        </ul>
    </nav>

    <img src="./logo.svg" alt="">
</body>
</html>

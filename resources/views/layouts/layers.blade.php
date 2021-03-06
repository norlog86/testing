<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">VR парк</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('games')}}">Игры</a></li>
                <li><a href="{{route('rooms')}}">Комнаты</a></li>
                <li><a href="{{route('about')}}">О нас</a></li>
                <li><a href="{{route('reservation')}}">Бронирование</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @if(session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
    @yield('content')
</div>
</body>
</html>


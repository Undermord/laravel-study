<!doctype html>
<html lang="\">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                        </li>                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about.index')}}">About</a>
                        </li>                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav>
            <ul>
                <li><a href="{{route('main.index')}}">Main</a> </li>
                <li><a href="{{route('post.index')}}">Posts</a> </li>
                <li><a href="{{route('about.index')}}">About</a> </li>
                <li><a href="{{route('contact.index')}}">Contacts</a> </li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>

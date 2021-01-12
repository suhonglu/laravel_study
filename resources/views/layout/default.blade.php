<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>@yield('title','默认名称')--网站标题</title>
</head>
<body>
    <nav class="navbar navbar-default navbar-expand-lg bg-dark nav-dark" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">weibo</a>
            </div>
            <ul class="navbar-nav justify-content-end">
                <li class="navr-item"><a class="nav-link" href="/help">帮助</a></li>
                <li class="nav-item"><a class="nav-link" href="/home">主页</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>

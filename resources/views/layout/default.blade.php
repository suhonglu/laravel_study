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
    @include('layout._header')
    @include('user._message')
    @yield('content')
    @include('layout._footer')
</body>
</html>

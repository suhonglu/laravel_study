<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" >
  <title>@yield('title','标题')</title>
</head>
<body>
  @yield('content')
  <hr>
  @yield('footer')
</body>
</html>
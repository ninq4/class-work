<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/assets/style/main.css') }}">
    <script defer src="{{asset('/assets/javascript/app.js')}}"></script>
</head>
<body>
@include('includes.menu')
<main>
    @yield('content')
</main>
</body>
</html>

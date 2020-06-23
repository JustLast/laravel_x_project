<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
    @if(isset($_GET['name']))
        <h1>Hello, {{$_GET['name']}}!</h1>
    @else
        <h1>Hello, guest!</h1>
    @endif
</body>
</html>

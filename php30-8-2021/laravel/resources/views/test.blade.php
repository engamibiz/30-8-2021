<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Our Website</h1>
    @if(isset($name))
    <h2>Good Morning Mr  {{ $name }}  </h2>
    @else
        <h2>Welcome No Body</h2>
    @endif
</body>
</html>

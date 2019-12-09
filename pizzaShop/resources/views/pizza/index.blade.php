<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($pizzas as $pizza)
    <div>
        <p>{{$pizza->name}}</p>
        <p>{{$pizza->price}}</p>
        <a href="#">View pizza</a>
    </div>
@endforeach

    
</body>
</html>
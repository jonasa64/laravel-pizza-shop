<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
  /*  .container {
     display: grid;
     grid-template-columns: 1fr 1fr 1fr 1fr;
        position: relative;


    }

    .row {
        border: 1px solid black;
        height: 170px;

    }

    .row form {
        position: absolute;
    }

    .row button {
        border: none;
        background-color: forestgreen;
        text-decoration: none;
        color: white;
        margin-left: 150px;
        cursor: pointer;
        padding: 10px 20px;
        margin-top: 10px;




    }

    a {
        color: black;
        margin-left: 185px;


    }


    p {
        margin-left: 185px;
    }

*/





    </style>
</head>
<body>
    <div class="container">
        <div class="row">

@foreach ($pizzas as $pizza)

        <p>{{$pizza->name}}</p>
        <p>{{$pizza->price}}</p>


        <a href="pizza/{{$pizza->id }}">View pizza</a>

        @foreach ($pizza->ingredients as $p)
            <p>{{$p->name}}</p>
        @endforeach

        <form action="cart/{{$pizza->id}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$pizza->id}}">
            <input type="hidden" name="name" value="{{$pizza->name}}">
            <input type="hidden" name="price" value="{{$pizza->price}}">
            <button>add to cart</button>
        </form>



</div>








@endforeach
</div>



</body>
</html>

@foreach (Cart::content() as $item)

{{$item->name}}
{{$item->price}} kr

<form action="{{ route('cart.destroy', $item->rowId) }}"" method="POST">
    {{ csrf_field() }}
    @method('DELETE')
<button>Remove from cart</button>
</form>
    
@endforeach

subtotal

{{Cart::subtotal()}} kr

tax 

{{Cart::tax()}} kr

totalt

{{$price}} kr

<a href="http://127.0.0.1:8000/checkout">go to Checkout</a>
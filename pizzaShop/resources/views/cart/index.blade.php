@foreach (Cart::content() as $item)

{{$item->name}}
{{$item->price}} kr

<form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
    {{ csrf_field() }}
    @method('DELETE')
<button>Remove from cart</button>
</form>
<div>
    update quantity
    <select id="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
        @for ($i = 1; $i < 5 +1  ; $i++)
            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
    </select>
</div>


@endforeach

subtotal

{{Cart::subtotal()}} kr

tax

{{Cart::tax()}} kr

totalt

{{$price}} kr

<a href="http://127.0.0.1:8000/checkout">go to Checkout</a>


    <script>
      var quantity = document.querySelector('#quantity');

      Array.from(quantity).forEach(function (el) {
            el.addEventListener('change', function () {
            const id = el.getAttribute('data-id');
            const productQuantity = el.getAttribute('data-productQuantity')

                axios.put()
            })
      })
    </script>



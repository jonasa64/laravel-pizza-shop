<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <h1>checkout</h1>

@foreach (Cart::content() as $item)


{{$item->name}}

{{$item->price}} kr
    
@endforeach


subtotal

{{Cart::subtotal()}} kr

tax 

{{Cart::tax()}} kr

totalt

{{$price}} kr

<form action="/checkout" method="POST" id="payment-form">
{{ csrf_field() }}
  <input name="name" placeholder="name on card" id="name_on_card"/>
  <input name="address" placeholder="address" id="address"/>
  <input name="email" placeholder="email"/>
  <input name="city" placeholder="city" id="city"/>
  <input name="province" placeholder="province" id="province"/>
  <input name="postalcode" placeholder="postalcode" id="postalcode"/>

<div>
<!-- Mount the instance within a <label> -->
    <label>Card
        <div id="card-element"></div>
      </label>
      
     
    
</div>

<button type="submit" id="complete-order">Complete Order</button>
</form>
    <script>
    

    var stripe = Stripe('pk_test_YsKg5zJTp5ETSzN5fOg67xJh002Zs89yv6');
var elements = stripe.elements();
var style = {
  base: {
    color: "#32325d",
  }
};
var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();
              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;
              var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }
              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                  // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });
            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
              // Submit the form
              form.submit();
            }

    </script>
</body>
</html>


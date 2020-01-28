<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\User;

class CheckoutController extends Controller
{
    
    public function index()
    {
       //cart::destroy();
        $price = Cart::total(0);

        return view('checkout.index', ['price' => $price]);
    
    }

    public function store(Request $request){
   try {
    

    $carge = Stripe::charges()->create([
        'amount' => Cart::total(),
        'currency' => 'dkk',
        'description' => 'order',
        'recipt_email' => $request->email,
        'source' => $request->stripeToken,
        'metadata' => [
           // 'contents' => $contents,
            'quantity' => Cart::instance('default')->count(),
        ],
    ]);
        Cart::destroy();
    return back()->with('success_message', 'You payment was sucessfully accepted');
   }catch(Exception $e){
    return back()->withErrors('Error! ' . $e->getMessage());
   }
    }

}

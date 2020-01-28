<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Pizza;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       cart::destroy();
        $price = Cart::total(0);

        return view('cart.index', ['price' => $price]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* 
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($pizza){
            return $cartItem->id === $pizza->id;
        } );

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }*/

        
    
        Cart::add($request->id, $request->name, 1,$request->price )
        ->associate('App\Pizza');

        $price = Cart::total(0);

        return view('cart.index', ['price' => $price]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        $price = Cart::total(0);

        return view('cart.index', ['price' => $price]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Cart;
use DateTime;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::instance('default')->count() == 0) {
            return redirect()->route('shop.index');
        }
        
        return view('checkout');
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
        //
        $data = $request->json()->all();
        $order = new Order();

        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;

        $subtotal = parse_money_to_numbers(Cart::subtotal());
        $newSubtotal = $subtotal - $discount;

        if ($newSubtotal < 0) $newSubtotal = 0;
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
        
        $order->amount = $newTotal;

        $order->payment_created_at = (new DateTime())->format('Y-m-d H:i:s');

        $products = [];
        $i = 0;

        foreach (Cart::content() as $product) {
            $products['product_' . $i] = $product->model->name;
            $products['product_' . $i] = $product->model->price;
            $products['product_' . $i] = $product->quantity;
            $i++;
        }

        $order->products = serialize($products);
        $order->user_id = 15;
        $order->save();

        

        if ($order->save()) {
            Cart::destroy();
            Session::flash('success', 'Votre commande a été traitée avec succès');
            return response()->json(['success'=>'Payment Intent succeeded']);
        } else {
            return response()->json(['error'=>'Payment Intent not succeeded']);
        }
    }
    
    public function thanks(){
        return Session::has('success') ? view('merci') : redirect()->route('shop.index');
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
        //
    }
}

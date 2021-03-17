<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $mightLike = Product::mightLike()->get();

        // check our price is calculated through view composer

        return view('cart', compact('mightLike'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exists = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if($exists->isNotEmpty()) {
            return redirect()
                ->route('cart.index')
                ->withWarning('Cet article existe déjà dans votre panier.');
        }

        Cart::add($request->id, $request->name, auth()->user()->id, $request->price)
            ->associate('App\Product');

        return redirect()
            ->route('cart.index')
            ->withSuccess('Article ajouté dans votre panier.')
            ->withInfo("{$request->name}");
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
        $v = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);
        
        if($v->fails()) {
            session()->flash('errors', collect(['La quantité ne doit pas excéder 5']));
            return response()->json(true, 422);
        }

        $cart = Cart::get($id);

        Cart::update($id, $request->quantity);

        session()->flash('success', 'La quantité de larticle a été mise à jour.');
        session()->flash('info', "La quantité de l'article ({$cart->model->name}) passe à {$request->quantity}.");

        return response()->json(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::get($id);

        Cart::remove($id);

        return back()
            ->withWarning('Article supprimé de votre panier.')
            ->withInfo("{$cart->model->name} dont la quantiqté est {$cart->qty}.");
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function search(){
        $q = request()->input('q');

        $products = Product::where('name', 'like', "%$q%")->orWhere('description', 'like', "%$q%")->paginate(9);

        return view('search', compact('products', 'q'));
    }
}

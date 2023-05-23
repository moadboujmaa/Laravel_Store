<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('store.products.products', compact('products'));
    }
    public function search(Request $request) {
        $var = $request->search;
        $products = Product::where('name', 'LIKE', '%' . $var . '%')->get();
        return view('store.products.products', compact('products'));
    }
}

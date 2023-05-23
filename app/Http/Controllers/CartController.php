<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\CartItem;

class CartController extends Controller
{
    public function index() {
        return view('store.cart.index');
    }
    public function store(Request $request, User $user, Product $product) {
        CartItem::create([
            'product_id' => $product->id,
            'user_id' => $user->id,
            'items' => 1
        ]);
        return response()->json(['message' => 'AJAX request received'], 200);
    }
    public function increment(CartItem $cart_item) {
        $cart_item->items->increment();
        $cart_item->save();
        return response()->json(['message', 'increment success']);
    }
    public function decrement(CartItem $cart_item) {
        $cart_item->items->decrement();
        $cart_item->save();
        return response()->json(['message', 'increment success']);
    }
}

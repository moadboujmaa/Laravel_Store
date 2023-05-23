<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return ;
    }
    public function store() {
        $cart_items = auth()->user()->cart_items;
        $total = 0;
        foreach ($cart_items as $item) {
            $total += $item->product->price;
        }
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'status' => 'pending',
            'total_price' => $total
        ]);
        foreach ($cart_items as $cart_item) {
            OrderItems::create([
                'product_id' => $cart_item->product->id,
                'order_id' => $order->id
            ]);

            $cart_item->delete();
        }
        return view('store.order.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }
}

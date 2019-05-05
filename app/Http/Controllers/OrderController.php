<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detail($id) {
        return view('order', ["order" => Order::find($id), "product" => Product::find(1)]);
    }
}

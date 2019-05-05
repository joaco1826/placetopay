<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request) {
        request()->validate([
            "customer_name" => "required|min:3|max:80",
            "customer_email" => "required|email|max:120",
            "customer_mobile" => "required|min:7|max:40",
        ]);

        $order = Order::create($request->all());

        return redirect()->route('orders.index', ['id' => $order->id]);
    }
}

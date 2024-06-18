<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }

    public function store(StoreOrderRequest $request): RedirectResponse
    {
        // Assuming you have proper validation in the StoreOrderRequest
        
        // Create the order
        Order::create($request->validated());

        return redirect()->route('orders.index')->with('success', 'Order created successfully!');
    }
}

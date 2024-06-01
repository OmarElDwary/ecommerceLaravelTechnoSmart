<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Cart;

class OrdersController extends Controller
{
    public function index()
    {
        $userOrders = UserOrder::where('user_id', Auth::id())->get();
        return view("orders.index", ["userOrders" => $userOrders]);
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to place an order');
        }
        $cartItems = Cart::instance('cart')->content();
        $user = Auth::user();
        
        // Create a new order for the user
        $order = Order::create([
            'user_id' => Auth::id(),
            'price' => Cart::instance('cart')->content()->sum('price'),
            'quantity' => Cart::instance('cart')->content()->sum('quantity'),
            'name' => Cart::instance('cart')->content()->first()->name,
            'username' => $user->name,
            'email'=> Auth::user()->email,
            'city' => Auth::user()->city,
            'phoneNumber' => Auth::user()->phoneNumber,
            'address' => Auth::user()->address,
        ]);

        // Save each product in the user's order
        foreach ($cartItems as $cartItem) {
            UserOrder::create([
                'user_id' => Auth::id(),
                'order_id' => $order->id,
                'product_id' => $cartItem->model->id,
                'product_name' => $cartItem->model->name,
                'price' => $cartItem->price,
                'quantity' => $cartItem->qty,
            ]);
        }

        Cart::instance('cart')->destroy();
        
        return redirect()->route('orders.index')->with('success', 'Order Confirmed');
    }
}

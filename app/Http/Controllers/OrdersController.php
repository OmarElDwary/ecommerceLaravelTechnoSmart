<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Cart;
use App\Models\OrderItems;

class OrdersController extends Controller
{
    public function index()
    {
        $userOrders = UserOrder::where('user_id', Auth::id())->get();
        return view("orders.index", ["userOrders" => $userOrders]);
    }

    public function store()
    {
        if(!Auth::check()){
            return redirect()->route('login')->with('error', 'Please log in to place an order');
        }
        $cartItems = Cart::instance('cart')->content();
        $user = Auth::user();

        // Create a new order for the user
        $order = Order::create([
            'user_id' => Auth::id(),
            'name' =>  $user->name,
            'email' => Auth::user()->email,
            'city' => Auth::user()->city,
            'address' => Auth::user()->address,
            'phoneNumber' => Auth::user()->phoneNumber,
        ]);

        foreach ($cartItems as $cartItem)
        {
            OrderItems::create([
                'order_id' => $cartItem->id,
                'product_id' => $cartItem->model->id,
                'quantity' => $cartItem->qty,
                'subtotal' => $cartItem->subtotal,
            ]);
        }
        Cart::instance('cart')->destroy();
        return redirect()->route('orders.index')->with('success', 'Order Confirmed');
    }

}

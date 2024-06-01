<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy("created_at","desc")->paginate(10);
        return view("admin.orders", compact("orders"));
    }
}

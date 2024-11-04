@extends('layouts.base')

@section('content')
    <div class="mx-5">
        <h1>Your Orders</h1>
        @if($orders->isEmpty())
            <p>No orders found.</p>
        @else
            @foreach($orders as $order)
                <h2>Order ID: {{ $order->id }}</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->orderItems as $item)
                            <tr>
                                <td>{{ $item->product_id }}</td>
                                <td>{{ $item->product->name ?? 'Unknown' }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->subtotal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        @endif
    </div>
@endsection

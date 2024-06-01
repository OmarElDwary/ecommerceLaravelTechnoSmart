@extends('layouts.base')

@section('content')
    <div class="mx-5">
        <h1>Your Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userOrders as $userOrder)
                    <tr>
                        <td>{{ $userOrder->order_id }}</td>
                        <td>{{ $userOrder->product_id }}</td>
                        <td>{{ $userOrder->product_name }}</td>
                        <td>{{ $userOrder->quantity }}</td>
                        <td>{{ $userOrder->price }}</td>
                        <td>
                            <form method="POST">
                                @csrf
                                <button type="submit">Cancel</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

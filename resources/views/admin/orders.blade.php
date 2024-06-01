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
                    <th>User Name</th>
                    <th>User Address</th>
                    <th>User Email</th>
                    <th>Phone Number</th>
                    <th>City</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->order_id }}</td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->username }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phoneNumber }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price }}</td>
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
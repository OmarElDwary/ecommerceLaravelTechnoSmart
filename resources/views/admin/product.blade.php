@extends('layouts.base')

@push('styles')
    <style>
        .btn-action {
            width: 100%;
            margin-bottom: 5px;
        }
        .productImage {
            width: 120px;
            height: 120px;
        }
    </style>
@endpush

@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Image</th>
                    <th scope="col">Regular Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td>
                        <img src="{{ asset('products/' . $product->image) }}"
                            class="productImage" alt="{{ $product->name }}">
                    </td>
                    <td>{{ $product->regular_price }}</td>
                    <td>{{ $product->sale_price }}</td>
                    <td>
                        <button class="btn btn-warning btn-action">Edit</button>
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
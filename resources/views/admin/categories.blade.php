@extends('layouts.base')
@push('styles')
    <style>
        .btn-action {
            width: 100%; /* Set the buttons to 100% width */
            margin-bottom: 5px; /* Optional: Add some spacing between buttons */
        }
    </style>

@endpush
@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <button class="btn btn-warning btn-action">Edit</button>
                        <button class="btn btn-danger btn-action">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

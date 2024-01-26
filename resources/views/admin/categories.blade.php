@extends('layouts.base')
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
                <!-- Example category rows, replace with dynamic content from your backend -->
                <tr>
                    @foreach($categories as $category)
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                        
                    @endforeach
                    {{-- <td>category-1</td> --}}
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Category 2</td>
                    <td>category-2</td>
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection

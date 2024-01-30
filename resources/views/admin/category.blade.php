@extends('layouts.base')
@push('styles')
    <style>
        .form-group {
            padding-top: 5px;
        }
    </style>
@endpush
@section('content')
    <div class="mx-4">
        <h2>Create a new Category</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old("name") }}">
            </div>

            <div class="form-group">
                <label for="slug">Category Slug:</label>
                <div class="input-group">
                    <input type="text" name="slug" id="slug" class="form-control" required value="{{ old("slug") }}">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary" id="generateSlugBtn">Generate</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Add an event listener to the "Generate" button
                $('#generateSlugBtn').on('click', function() {
                    // Call the function to generate the slug
                    generateSlug();
                });

                // Function to generate the slug
                function generateSlug() {
                    var nameValue = $('#name').val();
                    var slugValue = nameValue.toLowerCase().replace(/\s+/g, '-');
                    $('#slug').val(slugValue);
                }
            });
        </script>
    @endpush
@endsection

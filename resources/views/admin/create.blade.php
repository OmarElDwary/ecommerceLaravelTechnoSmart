@extends('layouts.base')
@section('content')
    @if ($message = session('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <form class="mx-4" action="{{ route('admin.store') }}" method="POST" id="productForm" enctype="multipart/form-data">
        @csrf
        @method('post')
        <!-- Product Name -->
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="productName">Product Name</label>
                    <input type="text" id="productName" class="form-control" name="name" required />
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Product Slug -->
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="productSlug">Product Slug (Unique)</label>
                    <input type="text" id="productSlug" class="form-control" name="slug" required />
                    @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Short Description -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="shortDescription">Short Description</label>
            <input type="text" id="shortDescription" class="form-control" name="short_description" required />
            @error('short_description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="productDescription">Description</label>
            <textarea class="form-control" id="productDescription" rows="4" name="description" required></textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Regular Price -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="regularPrice">Regular Price</label>
            <input type="number" id="regularPrice" class="form-control" name="regular_price" required />
            @error('regular_price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Sale Price -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="salePrice">Sale Price</label>
            <input type="number" id="salePrice" class="form-control" name="sale_price" required />
            @error('sale_price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- SKU -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="productSKU">SKU</label>
            <input type="text" id="productSKU" class="form-control" name="sku" required />
            @error('sku')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Stock Status -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="stockStatus">Stock Status</label>
            <select class="form-control" id="stockStatus" name="stock_status" required>
                <option value="instock">In Stock</option>
                <option value="outofstock">Out of Stock</option>
            </select>
            @error('stock_status')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Featured -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="featured">Featured</label>
            <select class="form-control" id="featured" name="featured" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
            @error('featured')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Quantity -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="number" id="quantity" class="form-control" name="quantity" required />
            @error('quantity')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Product Image -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="productImage">Product Image</label>
            <input class="form-control form-control-lg" id="productImage" type="file" name="image" />
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Category -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="category">Category</label>
            <select class="form-control" id="category" name="category_id" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Brand -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="brand">Brand</label>
            <select class="form-control" id="brand" name="brand_id" required>
                <option value="">Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #0163d2;"
            data-bs-toggle="modal" data-bs-target="#successModal">Create Product</button>
    </form>
@endsection
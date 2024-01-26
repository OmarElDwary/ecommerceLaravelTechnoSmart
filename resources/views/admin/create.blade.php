@extends('layouts.base')
@section('content')
    <form class="mx-4" action="{{ route('admin.store') }}" method="POST" id="productForm">
        <!-- Product Name -->
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="productName" class="form-control" name="name" required />
                    <label class="form-label" for="productName">Product Name</label>
                </div>
            </div>
        </div>

        <!-- Product Slug -->
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="productSlug" class="form-control" name="slug" required />
                    <label class="form-label" for="productSlug">Product Slug (Unique)</label>
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="generateSlug()">Generate Slug</button>
            </div>
        </div>

        <!-- Short Description -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="shortDescription" class="form-control" name="short_description" required />
            <label class="form-label" for="shortDescription">Short Description</label>
        </div>

        <!-- Description -->
        <div data-mdb-input-init class="form-outline mb-4">
            <textarea class="form-control" id="productDescription" rows="4" name="description" required></textarea>
            <label class="form-label" for="productDescription">Description</label>
        </div>

        <!-- Regular Price -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" id="regularPrice" class="form-control" name="regular_price" required />
            <label class="form-label" for="regularPrice">Regular Price</label>
        </div>

        <!-- SKU -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="productSKU" class="form-control" name="SKU" required />
            <label class="form-label" for="productSKU">SKU</label>
        </div>

        <!-- Stock Status -->
        <div data-mdb-input-init class="form-outline mb-4">
            <select class="form-control" id="stockStatus" name="stock_status" required>
                <option value="instock">In Stock</option>
                <option value="outofstock">Out of Stock</option>
            </select>
            <label class="form-label" for="stockStatus">Stock Status</label>
        </div>

        <!-- Featured -->
        <div data-mdb-input-init class="form-outline mb-4">
            <select class="form-control" id="featured" name="featured" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
            <label class="form-label" for="featured">Featured</label>
        </div>

        <!-- Quantity -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" id="quantity" class="form-control" name="quantity" required />
            <label class="form-label" for="quantity">Quantity</label>
        </div>

        <!-- Product Image -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="file" id="productImage" class="form-control-file" name="image" required />
            <label class="form-label" for="productImage">Product Image</label>
        </div>

        <!-- Category -->
        <div data-mdb-input-init class="form-outline mb-4">
            <select class="form-control" id="category" name="category_id" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="form-label" for="category">Category</label>
        </div>

        <!-- Brand -->
        {{-- <div data-mdb-input-init class="form-outline mb-4">
            <select class="form-control" id="brand" name="brand_id" required>
                <option value="">Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <label class="form-label" for="brand">Brand</label>
        </div> --}}



        <!-- Submit button -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4"
            style="background-color: #0163d2;" data-bs-toggle="modal" data-bs-target="#successModal">Create
            Product</button>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Product Added Successfully</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your product has been added successfully.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function generateSlug() {
            const productName = document.getElementById('productName').value;
            const slugInput = document.getElementById('productSlug');

            // Generate slug logic (you can replace this with your actual slug generation logic)
            const slug = productName.toLowerCase().replace(/\s+/g, '-');

            slugInput.value = slug;
        }
        document.getElementById('productForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Your form submission logic here (e.g., AJAX request to submit data to the server)

            // Show the success modal
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
@endpush

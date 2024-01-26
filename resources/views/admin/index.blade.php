@extends('layouts.base')
@section('content')
<div class="container mt-5">
    <div class="row">
      <!-- Products Box -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Products</h5>
            <p class="card-text">Manage your products here</p>
            <a href="{{ route('admin.create') }}" class="btn btn-primary">Create New Product</a>
            <a href="#" class="btn btn-secondary">Edit Products</a>
          </div>
        </div>
      </div>
  
      <!-- Orders Box -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Orders</h5>
            <p class="card-text">View and manage your orders</p>
            <a href="#" class="btn btn-primary">View Orders</a>
          </div>
        </div>
      </div>
  
      <!-- Users Box -->
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Users</h5>
            <p class="card-text">Manage user accounts</p>
            <a href="#" class="btn btn-primary">View Users</a>
          </div>
        </div>
      </div>
  
      <!-- Sales Box -->
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Sales</h5>
            <p class="card-text">Track and analyze sales data</p>
            <a href="#" class="btn btn-primary">View Sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
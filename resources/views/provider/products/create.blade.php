@extends('layouts.master')
@section('header')
    Create Product
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body px-3">
                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                            <a href="javascript:void(0);" class="nav-link active setting-bx d-flex" id="pills-product-tab"
                                data-bs-toggle="tab" data-bs-target="#pills-product" role="tab"
                                aria-controls="pills-product" aria-selected="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C10.8954 2 10 2.89543 10 4C10 5.10457 10.8954 6 12 6C13.1046 6 14 5.10457 14 4C14 2.89543 13.1046 2 12 2Z"
                                        fill="#3D4152"></path>
                                    <path
                                        d="M6 8H18C19.1046 8 20 8.89543 20 10V18C20 19.1046 19.1046 20 18 20H6C4.89543 20 4 19.1046 4 18V10C4 8.89543 4.89543 8 6 8Z"
                                        fill="#3D4152"></path>
                                </svg>
                                <div class="setting-info">
                                    <h6>Create Product</h6>
                                    <p class="mb-0">Fill in the details to add a new product.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel" tabindex="0"
                        aria-labelledby="pills-product-tab">
                        <div class="setting-right">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-4">New Product</h3>

                                    <form action="{{ route('products.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="setting-input mb-3">
                                            <label for="productName" class="form-label">Product Name</label>
                                            <input type="text" name="name" class="form-control" id="productName"
                                                placeholder="Enter product name" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="setting-input mb-3">
                                            <label for="productPrice" class="form-label">Price</label>
                                            <input type="number" name="price" class="form-control" id="productPrice"
                                                placeholder="Enter product price" step="0.01" required>
                                            @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="setting-input mb-3">
                                            <label for="productDescription" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" id="productDescription" rows="3"
                                                placeholder="Enter product description" required></textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="setting-input">
                                            <label class="form-label">Stock</label>
                                            <input type="number" class="form-control" name="stock"
                                                placeholder="Enter stock quantity" required min="0">
                                        </div>

                                        <div class="setting-input mb-3">
                                            <label for="productPrice" class="form-label">Image link</label>
                                            <input type="text" name="image" class="form-control" id="productPrice"
                                                placeholder="Enter image link" step="0.01" required>
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <button type="submit" class="btn btn-primary float-end w-50 btn-md">Create
                                            Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

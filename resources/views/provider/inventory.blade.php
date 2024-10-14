@extends('layouts.master')
@section('header')
    Inventory
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
                    <div class="input-group search-area2">
                        <form action="{{ route('inventory') }}" method="GET" class="d-flex">
                            <span class="input-group-text p-0"><a href="javascript:void(0)"><svg width="32" height="32"
                                        viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                            fill="#FC8019"></path>
                                    </svg>
                                </a></span>
                            <input type="text" name="search" class="form-control p-0" placeholder="Search here"
                                value="{{ request('search') }}">
                        </form>
                    </div>
                    <a href="{{ route('products.create') }}" class="btn btn-primary mt-3 mt-sm-0">
                        Add New Product
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <nav class="order-tab">
                            <div class=" nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-order" type="button" role="tab" aria-controls="nav-order"
                                    aria-selected="true">Products</button> 
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-order" role="tabpanel"
                                aria-labelledby="nav-order-tab">
                                @foreach ($inventory as $product)
                                <div class="orderin-bx d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4>{{ $product->name }}</h4>
                                        <span>{{ $product->created_at }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h4 class="text-primary mb-0">${{ number_format($product->price, 2) }}</h4>
                                        <a href="javascript:void(0);" class="icon-bx"><i
                                                class="fa-solid fa-angle-right"></i></a>

                                    </div>
                                </div>
                                @endforeach 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    </div>
    </div>
@endsection

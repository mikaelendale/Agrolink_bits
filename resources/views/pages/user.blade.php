<div class="sidebar-right">
    <span>
        <a class="sidebar-right-trigger wave-effect wave-effect-x" href="/dashboard">
            <span>
                <i class="fa fa-cart-shopping "></i>
            </span>
        </a>
</div>
<style>
    .product-bx {
        position: relative;
        /* For positioning the card elements */
        overflow: hidden;
        /* Prevents overflow of child elements */
    }

    .product-image {
        width: 100%;
        /* Makes the image fit the card width */
        height: auto;
        /* Maintains the aspect ratio */
        max-height: 150px;
        /* Set a max height to keep images consistent */
        object-fit: cover;
        /* Ensures the image covers the area without distortion */
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-xxl-7">
            <div class="row">

                <div class="col-xl-12">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h4 class="mb-0 cate-title">Products</h4>
                    </div>
                    <div class="swiper mySwiper-3">
                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <div class="card product-bx">
                                        <div class="card-header border-0 pb-0 pt-0 pe-3">
                                            <i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
                                        </div>
                                        <div class="card-body p-0 text-center">
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                                class="product-image">
                                        </div>
                                        <div class="card-footer border-0 px-3">
                                            <h5 class="mb-1 product-title">{{ $product->name }}</h5>
                                            <span class="price">$ {{ $product->price }}</span>

                                            <!-- Simple Form to Add Product to Order -->
                                            <form action="{{ route('orders.store') }}" method="POST" class="mt-2">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="number" name="quantity" value="1" min="1"
                                                    class="form-control" style="width: 60%; display: inline-block;">
                                                <button type="submit"
                                                    class="btn btn-sm float-end btn-primary btn-sm">+</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Add more products as needed -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-xl-4 col-xxl-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card dlab-bg dlab-position">
                        <div class="card-body pt-0 pb-2">
                            @foreach ($orders as $order)
                                <div class="order-check d-flex align-items-center my-3">
                                    <div class="dlab-media">
                                        <img src="{{ $order->product->image }}" alt="{{ $order->product->name }}">
                                    </div>
                                    <div class="dlab-info">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="dlab-title"><a
                                                    href="javascript:void(0);">{{ $order->product->name }}</a></h4>
                                            <h4 class="text-primary ms-2">+$
                                                {{ number_format($order->product->price, 2) }}</h4>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>x{{ $order->quantity }}</span>
                                            <div class="quntity">
                                                <input data-value type="text" value="{{ $order->quantity }}"
                                                    readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <hr class="my-2 text-primary" style="opacity:0.9" />
                        </div>
                        <!-- Check if the order exists and belongs to the logged-in user -->
                        @if (isset($order))
                            <div class="card-footer pt-0 border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Service</p>
                                    <h4 class="font-w500">+$1.00</h4>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h4 class="font-w500">Total</h4>
                                    <h3 class="font-w500 text-primary">$ {{ number_format($totalAmount, 2) }}</h3>
                                </div>

                                <!-- Link to generate and view QR code for the order -->
                                <a href="{{ route('order.qr', $order->id) }}"
                                    class="btn btn-primary btn-block">Generate QR</a>
                            </div>
                        @else
                        <div class="card-footer pt-0 border-0">
                            <p>No order found for the logged-in user.</p>
                        </div>
                        @endif



                        <script>
                            function showQrCode(orderId) {
                                const qrCodeImg = document.getElementById(`qr-code-${orderId}`);

                                // Set the src attribute to the QR code URL
                                qrCodeImg.src = `{{ url('/generate-qr-code') }}/${orderId}`;
                                qrCodeImg.style.display = 'block'; // Show the QR code
                            }
                        </script>


                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card bg-primary blance-card-1 border-primary h-100">
                        <div class="card-body pe-0 p-4 pb-3">
                            <div class="dlab-media d-flex justify-content-between">
                                <div class="dlab-content">
                                    <h4 class="cate-title">Get Discount VoucherUp To 20% </h4>
                                    <p class="mb-0">Share GoDelivery </p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">Modal body text goes here.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>

@extends('layouts.master')
@section('header')
    Orders
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class=" order-history d-flex algn-items-center justify-content-between mb-4">
                    <div class="input-group search-area2">
                        <span class="input-group-text p-0"><a href="javascript:void(0)"><svg width="32" height="32"
                                    viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                        fill="var(--primary)"></path>
                                </svg>
                            </a></span>
                        <input type="text" class="form-control p-0" placeholder="Search here">
                    </div>
                    <select class="form-control default-select border w-auto" style="display: none;">
                        <option>Recently</option>
                        <option>Oldest</option>
                        <option>Newest</option>
                    </select>
                    <div class="nice-select form-control default-select border w-auto" tabindex="0"><span
                            class="current">Recently</span>
                        <ul class="list">
                            <li data-value="Recently" class="option selected">Recently</li>
                            <li data-value="Oldest" class="option">Oldest</li>
                            <li data-value="Newest" class="option">Newest</li>
                        </ul>
                    </div>
                </div>
                <div class="card h-auto">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-list i-table style-1 mb-4 border-0" id="guestTable-all3">
                                <thead>
                                    <tr>
                                        <th>Menu</th>
                                        <th>Date</th>
                                        <th>Oreder Email</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th class="bg-none"></th>
                                        <th class="bg-none"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <div class="media-bx d-flex py-3 align-items-center">
                                                    <img class="me-3 rounded-circle" src="{{ $order->product->image }}"
                                                        alt="images">
                                                    <div>
                                                        <h5 class="mb-0">{{ $order->product->name }}</h5>
                                                        <p class="mb-0">{{ $order->quantity }}x </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <p class="mb-0">{{ $order->created_at->format('Y-m-d H:i') }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h5 class="mb-0">{{ $order->user->email }}</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h4 class="text-primary">
                                                        ${{ number_format($order->quantity * $order->product->price, 2) }}
                                                    </h4>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-xl light badge-success">{{ $order->status }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('order.qr', $order->id) }}"
                                                    class="btn btn-outline-primary">Show QR</a>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
                                                                stroke="#262626" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
                                                                stroke="#262626" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
                                                                stroke="#262626" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <!-- QR Code Modal -->
                                    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="qrModalLabel">QR Code</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="qrImage" src="" alt="QR Code" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- QR Code Modal -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="qrModalLabel">QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="qrImage" src="" alt="QR Code" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script>
        function showQrCode(orderId) {
            const qrCodeImg = document.getElementById(`qr-code-${orderId}`);

            // Set the src attribute to the QR code URL
            qrCodeImg.src = `/generate-qr-code/${orderId}`;
            qrCodeImg.style.display = 'block'; // Show the QR code
        }
    </script>
@endsection

@extends('layouts.master')
@section('header')
    Dashboard
@endsection
@section('content')
    <div class="container">
        {{-- Check for success messages --}}
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        {{-- Check for error messages --}}
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="input-group search-area2 style-1">
                <span class="input-group-text p-0"><a href="javascript:void(0)"><svg class="me-1" width="32"
                            height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                fill="#FC8019"></path>
                        </svg>
                    </a></span>
                <input type="text" class="form-control p-0" placeholder="Search">
            </div>
            <ul class="grid-tab nav nav-pills" id="list-tab" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link active" id="pills-grid-tab" type="button" onClick="openQrScanner() ">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 4H6.66667C5.95942 4 5.28115 4.28095 4.78105 4.78105C4.28095 5.28115 4 5.95942 4 6.66667V12C4 12.7072 4.28095 13.3855 4.78105 13.8856C5.28115 14.3857 5.95942 14.6667 6.66667 14.6667H12C12.7072 14.6667 13.3855 14.3857 13.8856 13.8856C14.3857 13.3855 14.6667 12.7072 14.6667 12V6.66667C14.6667 5.95942 14.3857 5.28115 13.8856 4.78105C13.3855 4.28095 12.7072 4 12 4ZM6.66667 12V6.66667H12V12H6.66667ZM25.3333 4H20C19.2928 4 18.6145 4.28095 18.1144 4.78105C17.6143 5.28115 17.3333 5.95942 17.3333 6.66667V12C17.3333 12.7072 17.6143 13.3855 18.1144 13.8856C18.6145 14.3857 19.2928 14.6667 20 14.6667H25.3333C26.0406 14.6667 26.7189 14.3857 27.219 13.8856C27.719 13.3855 28 12.7072 28 12V6.66667C28 5.95942 27.719 5.28115 27.219 4.78105C26.7189 4.28095 26.0406 4 25.3333 4ZM20 12V6.66667H25.3333V12H20ZM12 17.3333H6.66667C5.95942 17.3333 5.28115 17.6143 4.78105 18.1144C4.28095 18.6145 4 19.2928 4 20V25.3333C4 26.0406 4.28095 26.7189 4.78105 27.219C5.28115 27.719 5.95942 28 6.66667 28H12C12.7072 28 13.3855 27.719 13.8856 27.219C14.3857 26.7189 14.6667 26.0406 14.6667 25.3333V20C14.6667 19.2928 14.3857 18.6145 13.8856 18.1144C13.3855 17.6143 12.7072 17.3333 12 17.3333ZM6.66667 25.3333V20H12V25.3333H6.66667ZM25.3333 17.3333H20C19.2928 17.3333 18.6145 17.6143 18.1144 18.1144C17.6143 18.6145 17.3333 19.2928 17.3333 20V25.3333C17.3333 26.0406 17.6143 26.7189 18.1144 27.219C18.6145 27.719 19.2928 28 20 28H25.3333C26.0406 28 26.7189 27.719 27.219 27.219C27.719 26.7189 28 26.0406 28 25.3333V20C28 19.2928 27.719 18.6145 27.219 18.1144C26.7189 17.6143 26.0406 17.3333 25.3333 17.3333ZM20 25.3333V20H25.3333V25.3333H20Z"
                                fill="#FC8019"></path>
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <h4 class="cate-title">Order History</h4>
                </div>
                <div class="card h-auto">
                    <div class="card-body p-2">
                        <div id="accordion-one" class="accordion style-1">
                            @foreach ($receivedOrders as $order)
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#default_collapseOne1" aria-expanded="false">
                                        <div>
                                            <h4 class="font-w500 mb-0">Order {{ $order->id }}</h4>
                                            <span>{{ $order->created_at->format('Y-m-d H:i') }}</span>
                                        </div>
                                        <div class="dliver-order-bx d-flex align-items-center">
                                            <div>
                                                <h6 class="font-w500">{{ $order->user->name }}</h6>
                                                <span>{{ $order->user->created_at->format('Y-m-d H:i') }}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-0">Total</p>
                                            <h4 class="font-w600">
                                                ${{ number_format($order->quantity * $order->product->price, 2) }}</h4>
                                        </div>
                                        <div>
                                            <p class="mb-0"></p>
                                            <h5 class="font-w600">{{ $order->product->name }}</h5>
                                        </div>
                                        <div>
                                            <p class="mb-0">Address</p>
                                            <div class="d-flex align-tems-center">
                                                <svg class="me-2" width="24" height="25" viewBox="0 0 24 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z"
                                                        fill="#FC8019"></path>
                                                </svg>
                                                <h5 class="mb-0">{{ $order->user->adress }}</h5>
                                            </div>
                                        </div>
                                        <button
                                            class="btn btn-outline-success bgl-primary me-5">{{ $order->status }}</button>
                                        <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="default_collapseOne1" class="collapse accordion_body"
                                        data-bs-parent="#accordion-one">
                                        <div class="row">
                                            <div class="col-xl-3 col-xxl-6 col-sm-6 b-right style-1">
                                            </div>
                                            <div class="col-xl-3 col-xxl-6 col-sm-6 my-4 b-right">
                                                <div class="dlab-space">
                                                    <div>
                                                        <h4 class="mb-2">{{ $order->product->name }}</h4>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span>Distance</span>
                                                        <h6 class="mb-0">2.5 Km</h6>
                                                        <button class="btn nav-link active" id="pills-grid-tab" type="button" onClick="openQrScanner() "
                                                             ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12 4H6.66667C5.95942 4 5.28115 4.28095 4.78105 4.78105C4.28095 5.28115 4 5.95942 4 6.66667V12C4 12.7072 4.28095 13.3855 4.78105 13.8856C5.28115 14.3857 5.95942 14.6667 6.66667 14.6667H12C12.7072 14.6667 13.3855 14.3857 13.8856 13.8856C14.3857 13.3855 14.6667 12.7072 14.6667 12V6.66667C14.6667 5.95942 14.3857 5.28115 13.8856 4.78105C13.3855 4.28095 12.7072 4 12 4ZM6.66667 12V6.66667H12V12H6.66667ZM25.3333 4H20C19.2928 4 18.6145 4.28095 18.1144 4.78105C17.6143 5.28115 17.3333 5.95942 17.3333 6.66667V12C17.3333 12.7072 17.6143 13.3855 18.1144 13.8856C18.6145 14.3857 19.2928 14.6667 20 14.6667H25.3333C26.0406 14.6667 26.7189 14.3857 27.219 13.8856C27.719 13.3855 28 12.7072 28 12V6.66667C28 5.95942 27.719 5.28115 27.219 4.78105C26.7189 4.28095 26.0406 4 25.3333 4ZM20 12V6.66667H25.3333V12H20ZM12 17.3333H6.66667C5.95942 17.3333 5.28115 17.6143 4.78105 18.1144C4.28095 18.6145 4 19.2928 4 20V25.3333C4 26.0406 4.28095 26.7189 4.78105 27.219C5.28115 27.719 5.95942 28 6.66667 28H12C12.7072 28 13.3855 27.719 13.8856 27.219C14.3857 26.7189 14.6667 26.0406 14.6667 25.3333V20C14.6667 19.2928 14.3857 18.6145 13.8856 18.1144C13.3855 17.6143 12.7072 17.3333 12 17.3333ZM6.66667 25.3333V20H12V25.3333H6.66667ZM25.3333 17.3333H20C19.2928 17.3333 18.6145 17.6143 18.1144 18.1144C17.6143 18.6145 17.3333 19.2928 17.3333 20V25.3333C17.3333 26.0406 17.6143 26.7189 18.1144 27.219C18.6145 27.719 19.2928 28 20 28H25.3333C26.0406 28 26.7189 27.719 27.219 27.219C27.719 26.7189 28 26.0406 28 25.3333V20C28 19.2928 27.719 18.6145 27.219 18.1144C26.7189 17.6143 26.0406 17.3333 25.3333 17.3333ZM20 25.3333V20H25.3333V25.3333H20Z"
                                                                    fill="#FC8019"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-xxl-6 col-sm-6 my-4 b-right style-1">
                                            </div>
                                            <div class="col-xl-3 col-sm-6 mt-4 ms-sm-0 ms-3">
                                                <p class="fs-18 font-w500">Total</p>
                                                <h4 class="cate-title text-primary">
                                                    ${{ number_format($order->quantity * $order->product->price, 2) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="qr-scanner-modal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Scan QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="qr-reader" style="width: 100%;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="qr-scanner-modal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Scan QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="qr-reader-final" style="width: 100%;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let qrScanner;

        function openQrScanner() {
            const qrScannerModal = new bootstrap.Modal(document.getElementById('qr-scanner-modal'));
            qrScannerModal.show();

            if (!qrScanner) {
                qrScanner = new Html5Qrcode("qr-reader");
            }

            qrScanner.start({
                    facingMode: "user"
                }, // "user" is for front camera, "environment" is for rear camera on mobile
                {
                    fps: 10, // Frames per second for the QR code scanner
                    qrbox: {
                        width: 250,
                        height: 250
                    }, // Set scanning box size
                },
                qrCodeMessage => {
                    console.log(`QR Code detected: ${qrCodeMessage}`);

                    processQrCode(qrCodeMessage);

                    qrScanner.stop().then(() => {
                        qrScannerModal.hide();
                    }).catch(err => {
                        console.error("Error stopping scanner: ", err);
                    });
                },
                errorMessage => {
                    console.error(`QR Code scan error: ${errorMessage}`);
                }
            ).catch(err => {
                console.error("Error starting QR scanner: ", err);
            });
        }

        function processQrCode(qrCodeMessage) {
            console.log("Processing QR Code: " + qrCodeMessage);

            // Assuming the QR code contains a URL and you want to extract the order ID
            let extractedCode = qrCodeMessage.split("/").pop(); // Get the last part of the URL (order ID)

            // Check if the extracted code is a valid number (or any other validation logic as needed)
            if (isNaN(extractedCode) || extractedCode <= 0) {
                console.error("Invalid QR Code format: " + qrCodeMessage);
                return; // Exit the function if the code is invalid
            }

            // Create a form element dynamically
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/process-order/' + extractedCode; // Adjust this route as per your setup

            // Add CSRF token for security
            let csrfTokenInput = document.createElement('input');
            csrfTokenInput.type = 'hidden';
            csrfTokenInput.name = '_token';
            csrfTokenInput.value = '{{ csrf_token() }}'; // Laravel's CSRF token

            // Append inputs to form
            form.appendChild(csrfTokenInput);

            // Optionally, add a hidden input to capture the QR code message if needed
            let qrCodeInput = document.createElement('input');
            qrCodeInput.type = 'hidden';
            qrCodeInput.name = 'qr_code'; // Assuming you need to send the QR code value
            qrCodeInput.value = qrCodeMessage; // The original QR code message
            form.appendChild(qrCodeInput);

            // Submit the form automatically
            document.body.appendChild(form);
            form.submit();
        }



        // Call the function when the button is clicked to start scanning
        document.getElementById('start-scan-btn').addEventListener('click', openQrScanner);
    </script> 
@endsection

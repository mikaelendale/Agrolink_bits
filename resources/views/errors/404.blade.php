<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoDeliver | 400</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


</head>

<body class="vh-100">
    <div class="authincation">
        <div class="container">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-7">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text fw-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not
                            found!</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>
                        <div>
                            <a class="btn btn-primary" href="/dashboard">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Required vendors -->
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/dlabnav-init.js')}}"></script> 
</body>


</html>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoDeliver | Verify</title>

    <link rel="shortcut icon" type="image/png" href="images/logo.png" />
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body class="vh-100">
    <div class="authincation">
        <div class="container">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo.png" width="80"></a>
                                    </div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <p class="text-center mb-4 text-sm text-gray-600 dark:text-gray-400">
                                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                    </p>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control @error('email')
                                            is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="
                                            email" autofocus>
                                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary btn-block">{{ __('Email Password Reset Link') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/swiper/js/swiper-bundle.min.js"></script>
    <!-- Custom script -->
    <script src="js/dlabnav-init.js"></script>
</body>

</html>
{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

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
                                    <h4 class="text-center mb-4">Verify Account</h4>
                                    <p class="text-center mb-4 text-sm text-gray-600 dark:text-gray-400">
                                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                    </p>
                                    <form method="POST" action="{{ route('password.confirm') }}">
                                        @csrf
                                        <!-- Password -->
                                        <div class="mb-3">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                required autocomplete="current-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary btn-block">Confirm</button>
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
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en" class="h-100">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoDeliver | Login</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png" />
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body class="body">
    <div class="container mt-0">
        <div class="row align-items-center justify-contain-center">
            <div class="col-xl-12 mt-5">
                <div class="card border-0">
                    <div class="card-body login-bx">
                        <div class="row  mt-5">
                            <div class="col-xl-8 col-md-6 sign text-center">
                                <div>
                                    <img src="images/login-img/pic-5.jpg" class="food-img" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 pe-0">
                                <div class="sign-in-your">
                                    <div class="text-center mb-3">
                                        <img src="images/logo.png" class="mb-3" width="80">
                                        <h4 class="fs-20 font-w800 text-black">Login to Account</h4>
                                        <span class="dlab-sign-up">Log in</span>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email Address</strong></label>
                                            <input type="email" class="form-control" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required autocomplete="current-password">
                                         <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                         </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" name="remember" class="form-check-input"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                 @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block shadow">Log
                                                In</button>
                                        </div>
                                    </form>
                                    <div class="text-center my-3">
                                        <span class="dlab-sign-up style-1">Or also</span>
                                    </div> 
                                    <div class="text-center">
                                        <span>Dont Have An Account?<a href="{{route('register')}}"
                                                class="text-primary"> Register</a></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/swiper/js/swiper-bundle.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/dlabnav-init.js"></script>
</body>


</html>
{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

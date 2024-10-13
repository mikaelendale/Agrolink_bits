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
                                        <h4 class="fs-20 font-w800 text-black">Register to Account</h4>
                                        <span class="dlab-sign-up">register</span>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" name="name" value="{{ old('name') }}" required
                                                autofocus autocomplete="name" class="form-control"
                                                placeholder="username">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>User type</strong></label>
                                            <select name="usertype" class="form-control">
                                                <option value="user" selected>User</option>
                                                <option value="deliver">Deliverer</option>
                                                <option value="admin">Provider</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="hello@example.com">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Confirm password</strong></label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Register
                                                </button>
                                        </div>
                                    </form>
                                    <div class="text-center my-3">
                                        <span class="dlab-sign-up style-1">Or also</span>
                                    </div>
                                    <div class="text-center">
                                        <span>Already Have An Account?<a href="{{ route('login') }}"
                                                class="text-primary"> Login</a></span>
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- user type -->
        <div class="mt-4">
            <x-input-label for="user" :value="__('Email')" />
            <x-text-input id="user" class="block mt-1 w-full" type="email" name="user" :value="old('user')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('user')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

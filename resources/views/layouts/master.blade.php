<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GoDeliver | @yield('header')</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/logo.png" />

    <!-- Stylesheet -->
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- Global Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo text-center">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:30px; color:black; ">Go</span>&nbsp;&nbsp;&nbsp;<img src="{{asset('images/logo-mini.png')}}" width="50"> 
            </a>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="container d-block my-0">
                        <div class="d-flex align-items-center justify-content-sm-between justify-content-end">
                            <div class="header-left">
                                <div class="nav-item d-flex align-items-center">
                                    <div class="d-flex header-bx">
                                        <select class="selectpicker">
                                            <option data-icon="fa-solid fa-location-dot mx-2">
                                                Ethiopia
                                            </option>
                                        </select>
                                        <div class="input-group search-area2 ps-3" id="Serach-bar">
                                            <span class="input-group-text h-search"><a href="javascript:void(0)"><svg
                                                        width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M16.6751 19.4916C16.2195 19.036 16.2195 18.2973 16.6751 17.8417C17.1307 17.3861 17.8694 17.3861 18.325 17.8417L22.9917 22.5084C23.4473 22.964 23.4473 23.7027 22.9917 24.1583C22.5361 24.6139 21.7974 24.6139 21.3417 24.1583L16.6751 19.4916Z"
                                                            fill="var(--primary)" />
                                                        <path
                                                            d="M12.8333 18.6667C16.055 18.6667 18.6666 16.055 18.6666 12.8333C18.6666 9.61168 16.055 7 12.8333 7C9.61163 7 6.99996 9.61168 6.99996 12.8333C6.99996 16.055 9.61163 18.6667 12.8333 18.6667ZM12.8333 21C8.32297 21 4.66663 17.3437 4.66663 12.8333C4.66663 8.32301 8.32297 4.66667 12.8333 4.66667C17.3436 4.66667 21 8.32301 21 12.8333C21 17.3437 17.3436 21 12.8333 21Z"
                                                            fill="var(--primary)" />
                                                    </svg> </a></span>
                                            <input type="text" class="form-control"
                                                placeholder="What do you want eat today" />
                                        </div>
                                        <div class="search-drop">
                                            <div class="card tag-bx">
                                                <div class="card-header d-block border-0">
                                                    <h4>
                                                        Recently Searched
                                                    </h4>
                                                    <ul class="d-flex align-items-center flex-wrap">
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-light btn-rounded me-2">Bakery</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-light btn-rounded me-2">Burger</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-light btn-rounded me-2">Beverage</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-light btn-rounded me-2">Chicken</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-light btn-rounded mt-3 mt-xl-0">Pizza</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="close-searchbox"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item d-flex align-items-center"></li>
                                <li>
                                    <div class="dropdown header-profile2">
                                        <a class="nav-link" href=" " role="button"
                                            data-bs-toggle="dropdown">
                                            <div class="header-info2 d-flex align-items-center">
                                                <img src="https://cdn0.iconfinder.com/data/icons/seo-web-4-1/128/Vigor_User-Avatar-Profile-Photo-01-64.png"
                                                    alt="" />
                                                <div class="d-flex align-items-center sidebar-info">
                                                    <div>
                                                        <h6 class="font-w500 mb-0 ms-2">
                                                            {{ Auth::user()->name }}
                                                        </h6>
                                                    </div>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="/profile" class="dropdown-item ai-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <span class="ms-2">Profile</span>
                                            </a> 
                                            <a href="/notification" class="dropdown-item ai-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="svg-main-icon">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                            fill="var(--primary)" />
                                                        <circle fill="var(--primary)" opacity="0.3" cx="19.5"
                                                            cy="17.5" r="2.5" />
                                                    </g>
                                                </svg>
                                                <span class="ms-2">Notification</span>
                                            </a>

                                            <!-- Logout Form -->
                                            <a  class="dropdown-item ai-icon">
                                            <form method="POST" action="{{ route('logout') }}"
                                                class="dropdown-item ai-icon p-0 m-0">
                                                @csrf
                                                <button type="submit"
                                                    class="btn w-100 d-flex align-items-center p-0 m-0 text-start">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                                        width="18" height="18" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9"
                                                            y2="12"></line>
                                                    </svg>
                                                    <span class="ms-2">Logout</span>
                                                </button>
                                            </form>
                                            </a>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.navigation')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">


            @yield('content')


        </div>

        <!-- Button trigger modal -->

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright border-top">
                <p>
                    Copyright © Designed by
                    <a href="https://themeforest.net/user/dexignlabs" target="_blank">DexignLab</a>
                    2022
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    

</body>

</html>

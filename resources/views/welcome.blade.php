<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoDeliver | Wellcome</title>

    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap"
        as="fetch" crossorigin="anonymous">
    <link href="{{ asset('land/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('land/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('land/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <main>
        <div class="hero_single version_1">
            <div class="opacity-mask">
                <div class="container">
                    <div class="row justify-content-lg-start justify-content-md-center">
                        <div class="col-xl-7 col-lg-8">
                            <h1>Fast, reliable, at your door.
                                Whatever you need, whenever you need</h1>
                            <p>Anything You Need <span class="element" style="font-weight: 500"></span></p>
                            <div class="search_trends">
                                <h5>Trending:</h5>
                                <ul>
                                    <li><a href="#0">Foods</a></li>
                                    <li><a href="#0">Fashion</a></li>
                                    <li><a href="#0">Electronics</a></li>
                                    <li><a href="#0">Jewlery</a></li>
                                </ul><br>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="btn_1 gradient">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn_1 gradient">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn_1 gradient">register</a>
                                        @endif
                                    @endauth
                                @endif


                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="wave hero"></div>
        </div>
        <div class="container margin_30_60">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Popular Catagories</h2>
                <p>Check Out Our Most Popular Offers</p>
            </div>
            <!-- /main_title -->

            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item_version_2">
                    <a href="#">
                        <figure>
                            <span>98</span>
                            <img src=""
                                data-src="https://i.pinimg.com/enabled_hi/564x/1e/a7/fc/1ea7fca510708ed25f97b2ca63809d32.jpg"
                                alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Food</h3>
                                <small>Avg price birr 400</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="#">
                        <figure>
                            <span>87</span>
                            <img src="https://i.pinimg.com/enabled_hi/564x/68/12/33/681233d4d211f320af88c307da19d823.jpg"
                                data-src="https://i.pinimg.com/enabled_hi/564x/8c/db/e1/8cdbe123010c380e20f264a8fdd57938.jpg"
                                alt="" class="owl-lazy" width="200" height="400">
                            <div class="info">
                                <h3>Electronics</h3>
                                <small>Avg Price Birr 10000</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="">
                        <figure>
                            <span>55</span>
                            <img src="https://i.pinimg.com/enabled_hi/564x/e0/e3/5a/e0e35ae093448bfd4abd9debc3b99e9f.jpg"
                                data-src="https://i.pinimg.com/enabled_hi/564x/4e/ae/f3/4eaef38b3922756ad75c0e9269133030.jpg"
                                alt="" class="owl-lazy" width="350" height="400">
                            <div class="info">
                                <h3>Jewelery</h3>
                                <small>Avg price Birr 2000</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="">
                        <figure>
                            <span>55</span>
                            <img src="img/home_cat_placeholder.jpg"
                                data-src="https://i.pinimg.com/enabled_hi/564x/76/3a/2b/763a2b175af6e6ed57bc8f22a7f2eebc.jpg"
                                alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Fashion</h3>
                                <small>Avg price Birr 900</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="">
                        <figure>
                            <span>65</span>
                            <img src="https://i.pinimg.com/enabled_hi/564x/5b/02/7f/5b027ffa465e504d6e4097a448fec973.jpg"
                                data-src="" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Groceries</h3>
                                <small>Avg price Birr 300</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="">
                        <figure>
                            <span>25</span>
                            <img src="img/home_cat_placeholder.jpg"
                                data-src="https://i.pinimg.com/enabled_hi/564x/77/d0/73/77d073cc8b62930e2ec0d4adc73cb2c9.jpg"
                                alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Beverages</h3>
                                <small>Avg price birr 120</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="">
                        <figure>
                            <span>35</span>
                            <img src="img/home_cat_placeholder.jpg"
                                data-src="https://i.pinimg.com/enabled_hi/736x/e7/00/ec/e700ece19f8e6e7c5c21b8edd4aecca8.jpg"
                                alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>pharmaceuticals</h3>
                                <small>Avg price Birr 200</small>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Top Rated Restaurants</h2>
                    <p>This are Our main Top Returants That You Can Order From</p>
                    <a href="#0">View All &rarr;</a>
                </div>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="https://i.pinimg.com/enabled_hi/236x/6b/32/40/6b32407513b5d31ab6c1ab6f5008a5f7.jpg"
                                                alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Burger and Beyond 22</em>
                                        <h3>Beyond Special Burger</h3>
                                        <small>8 Patriot Square E2 9NF</small>
                                        <ul>
                                            <li><span class="ribbon off">-30%</span></li>
                                            <li>Average price 350 birr</li>
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="https://i.pinimg.com/564x/50/63/cb/5063cb35146559f9655261628a41435f.jpg"
                                                alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Alemnesh Kitfo</em>
                                        <h3>Kitfo</h3>
                                        <small>27 Old Gloucester St, 4563</small>
                                        <ul>
                                            <li><span class="ribbon off">-30%</span></li>
                                            <li>Average price 500 birr</li>
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="banner lazy" data-bg="url(img/banner_bg_desktop.jpg)">
                    <div class="wrapper d-flex align-items-center opacity-mask"
                        data-opacity-mask="rgba(0, 0, 0, 0.3)">
                        <div>
                            <small> Go Delivery</small>
                            <h3>We Move so you don’t have to</h3>
                            <p>We Bring Tasty Food At Your Door in Minutes!!!</p>
                            <a href="#" class="btn_1 gradient">Register</a>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner -->
            </div>
        </div>
        <div class="shape_element_2">
            <div class="container margin_60_0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_how">
                                    <figure><img src="img/lazy-placeholder-100-100-white.png"
                                            data-src="https://www.ansonika.com/fooyes/img/how_1.svg" alt=""
                                            width="150" height="167" class="lazy"></figure>
                                    <h3>Easly Order</h3>
                                    <p>Ordering has never been easier! With just a few taps, our app lets you browse,
                                        select, and get your favorite items
                                        delivered straight to your door</p>
                                </div>
                                <div class="box_how">
                                    <figure><img src="img/lazy-placeholder-100-100-white.png"
                                            data-src="https://www.ansonika.com/fooyes/img/how_2.svg" alt=""
                                            width="130" height="145" class="lazy"></figure>
                                    <h3>Quick Delivery</h3>
                                    <p>Need something in a hurry? Our app offers lightning-fast delivery for everything
                                        from meals to essentials. With quick,
                                        reliable service</p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="box_how">
                                    <figure><img src="img/lazy-placeholder-100-100-white.png"
                                            data-src="https://www.ansonika.com/fooyes/img/how_3.svg" alt=""
                                            width="150" height="132" class="lazy"></figure>
                                    <h3>Enjoy Food</h3>
                                    <p>Craving something delicious? Our app delivers your favorite meals from local
                                        restaurants right to your doorstep</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-3 d-block d-lg-none"><a href="#0"
                                class="btn_1 medium gradient pulse_bt mt-2">Register Now!</a></p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Start Ordering Now</h2>
                            </div>
                            <p class="lead">Get what you need, when you need it! Our delivery app connects you to
                                your favorite restaurants, grocery stores, and
                                local shops for fast, reliable deliveries straight to your door</p>
                            <p>From meals to essentials, we make life easier with just a few taps. Convenience has never
                                been this simple!</p>
                            <p><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="wave footer"></div>
        <div class="container margin_60_40 fix_mobile">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Add your restaurant</a></li>
                            <li><a href="">Help</a></li>
                            <li><a href="">My account</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="">Top Categories</a></li>
                            <li><a href="">Best Rated</a></li>
                            <li><a href="">Best Price</a></li>
                            <li><a href="">Latest Submissions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>Megnagna Shola st. 567<br>ADDIS ABABA - ETHIOPIA</li>
                            <li><i class="icon_mobile"></i>+251966074050</li>
                            <li><i class="icon_mail_alt"></i><a href="#0">GoDeliver@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
                                <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="#0"><i class="bi bi-tiktok"></i></a></li>
                                <li><a href="#0"><i class="bi bi-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="https://www.ansonika.com/fooyes/img/cards_all.svg" data-src=""
                                alt="" width="230" height="35" class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© GoDeliver</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> 
    <script src="{{asset('land/js/common_scripts.min.js')}}"></script>
    <script src="{{asset('land/js/common_func.js')}}"></script>
    <script src="{{asset('land/assets/validate.js')}}"></script>

    <!-- TYPE EFFECT -->
    <script src="{{asset('land/js/typed.min.js')}}"></script>
    <script>
      var typed = new Typed(".element", {
        strings: [
          "at the best price",
          "with unique food",
          "with nice location",
        ],
        startDelay: 10,
        loop: true,
        backDelay: 2000,
        typeSpeed: 50,
      });
    </script>
</body>

</html>

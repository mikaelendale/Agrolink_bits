@if (Auth::user()->usertype == 'driver')
    <div class="dlabnav border-right">
        <div class="dlabnav-scroll">
            <p class="menu-title style-1">Main Menu</p>
            <ul class="metismenu" id="menu">
                <li>
                    <a class=" " href="/dashboard" aria-expanded="false">
                        <i class="bi bi-grid"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-cart"></i>

                        <span class="nav-text">Order</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="/order/dashbord">Dashboard</a>
                        </li>
                        <li><a href="/order/track">Track</a></li>
                        <li><a href="/order/history">History</a></li>
                    </ul>
                </li>
                <li class="menu-title">Support</li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-info-circle"></i>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">MIssion and vision</a></li>
                        <li>
                            <a href="post-details.html">Faq</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" aria-expanded="false">Contacts</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="plus-box">
                <div class="d-flex align-items-center">
                    <h5>Upgrade your Account to pro</h5>
                </div>
                <a href="/account/upgrade" class="btn bg-white btn-sm">Upgrade</a>
            </div>
            <div class="copyright mt-0">
                <p>
                    <strong>GoDeliver
                        User</strong>
                    © 2022 All Rights Reserved Lalodev
                </p>
            </div>
        </div>
    </div>
@elseif (Auth::user()->usertype == 'admin')
    <div class="dlabnav border-right">
        <div class="dlabnav-scroll">
            <p class="menu-title style-1">Main Menu</p>
            <ul class="metismenu" id="menu">
                <li>
                    <a class=" " href="/dashboard" aria-expanded="false">
                        <i class="bi bi-grid"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-cart"></i>

                        <span class="nav-text">Order</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="/order/dashbord">Dashboard</a>
                        </li>
                        <li><a href="/order/track">Track</a></li>
                        <li><a href="/order/history">History</a></li>
                    </ul>
                </li>
                <li class="menu-title">Support</li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-info-circle"></i>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">MIssion and vision</a></li>
                        <li>
                            <a href="post-details.html">Faq</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" aria-expanded="false">Contacts</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="plus-box">
                <div class="d-flex align-items-center">
                    <h5>Upgrade your Account to pro</h5>
                </div>
                <a href="/account/upgrade" class="btn bg-white btn-sm">Upgrade</a>
            </div>
            <div class="copyright mt-0">
                <p>
                    <strong>GoDeliver
                        User</strong>
                    © 2022 All Rights Reserved Lalodev
                </p>
            </div>
        </div>
    </div>
@elseif(Auth::user()->usertype = 'user')
    <div class="dlabnav border-right">
        <div class="dlabnav-scroll">
            <p class="menu-title style-1">Main Menu</p>
            <ul class="metismenu" id="menu">
                <li>
                    <a class=" " href="/dashboard" aria-expanded="false">
                        <i class="bi bi-grid"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-cart"></i>

                        <span class="nav-text">Order</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="/order/dashbord">Dashboard</a>
                        </li>
                        <li><a href="/order/track">Track</a></li>
                        <li><a href="/order/history">History</a></li>
                    </ul>
                </li>
                <li class="menu-title">Support</li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-info-circle"></i>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">MIssion and vision</a></li>
                        <li>
                            <a href="post-details.html">Faq</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" aria-expanded="false">Contacts</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="plus-box">
                <div class="d-flex align-items-center">
                    <h5>Upgrade your Account to pro</h5>
                </div>
                <a href="/account/upgrade" class="btn bg-white btn-sm">Upgrade</a>
            </div>
            <div class="copyright mt-0">
                <p>
                    <strong>GoDeliver
                        User</strong>
                    © 2022 All Rights Reserved Lalodev
                </p>
            </div>
        </div>
    </div>
@endif

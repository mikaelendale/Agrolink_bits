@if (Auth::user()->usertype == 'deliver')
    <div class="dlabnav border-right">
        <div class="dlabnav-scroll">
            <p class="menu-title style-1">Main Menu</p>
            <ul class="metismenu" id="menu">
                <!-- Dashboard -->
                <li>
                    <a class=" " href="/dashboard" aria-expanded="false">
                        <i class="bi bi-grid"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <!-- Assigned Deliveries -->
                <li>
                    <a class="" href="/deliveries" aria-expanded="false">
                        <i class="bi bi-box-seam"></i>
                        <span class="nav-text">Deliveries</span>
                    </a> 
                </li>   

                <!-- Profile Management -->
                <li>
                    <a class="" href="/profile" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        <span class="nav-text">Profile</span>
                    </a> 
                </li>

                <!-- Support Section -->
                <li class="menu-title">Support</li>
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-info-circle"></i>
                        <span class="nav-text">Support</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/support/faq">FAQ</a></li>
                        <li><a href="/support/contact">Contact Support</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Copyright -->
            
        </div>
    </div>
@elseif (Auth::user()->usertype == 'admin')
<div class="dlabnav border-right">
    <div class="dlabnav-scroll">
        <p class="menu-title style-1">Main Menu</p>
        <ul class="metismenu" id="menu">
            <!-- Dashboard -->
            <li>
                <a href="/dashboard" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li> 

            <!-- User Management -->
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">User Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/users/all">All Users</a></li> 
                </ul>
            </li> 
 
 

            <!-- Support Section -->
            <li class="menu-title">Support</li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-info-circle"></i>
                    <span class="nav-text">Support</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/support/faq">FAQ</a></li>
                    <li><a href="/support/contact">Contact Support</a></li>
                    <li><a href="/about/mission">Mission and Vision</a></li>
                </ul>
            </li>
        </ul>
  
    </div>
</div>

@elseif(Auth::user()->usertype == 'user')
<div class="dlabnav border-right">
    <div class="dlabnav-scroll">
        <!-- Main Menu Title -->
        <p class="menu-title style-1">Main Menu</p>

        <!-- Dashboard -->
        <ul class="metismenu" id="menu">
            <li>
                <a href="/dashboard" aria-expanded="false">
                    <i class="bi bi-house"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <!-- Orders Dropdown -->
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-bag-check"></i>
                    <span class="nav-text">My Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/order/dashboard">Order Dashboard</a></li>
                    <li><a href="/order/track">Track Orders</a></li>
                    <li><a href="/order/history">Order History</a></li>
                    <li><a href="/order/cancelled">Cancelled Orders</a></li>
                </ul>
            </li>

            <!-- Profile Management -->
            <li>
                <a href="/profile" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>

            <!-- Support Dropdown -->
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-question-circle"></i>
                    <span class="nav-text">Help & Support</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/support/faq">FAQs</a></li>
                    <li><a href="/support/contact">Contact Us</a></li>
                    <li><a href="/about/mission">Mission & Vision</a></li>
                </ul>
            </li>

            <!-- Feedback -->
            <li>
                <a href="/feedback" aria-expanded="false">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="nav-text">Give Feedback</span>
                </a>
            </li>  
        </ul>
    </div>
</div>
@elseif(Auth::user()->usertype == 'provider')
<div class="dlabnav border-right">
    <div class="dlabnav-scroll">
        <!-- Main Menu Title -->
        <p class="menu-title style-1">Main Menu</p>

        <!-- Dashboard -->
        <ul class="metismenu" id="menu">
            <li>
                <a href="/dashboard" aria-expanded="false">
                    <i class="bi bi-house"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <!-- Manage Orders (For Providers) -->
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-box-seam"></i>
                    <span class="nav-text">Manage Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/provider/orders">Order Dashboard</a></li>
                </ul>
            </li>

            <!-- Inventory Management (New Section for Providers) -->
            <li>
                <a href="/provider/inventory" aria-expanded="false">
                    <i class="bi bi-box"></i>
                    <span class="nav-text">Inventory</span>
                </a>
            </li>

            <!-- Profile Management -->
            <li>
                <a href="/profile" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>

            <!-- Support & Help -->
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-question-circle"></i>
                    <span class="nav-text">Help & Support</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/support/faq">FAQs</a></li>
                    <li><a href="/support/contact">Contact Us</a></li>
                    <li><a href="/about/mission">Mission & Vision</a></li>
                </ul>
            </li>

            <!-- Feedback -->
            <li>
                <a href="/feedback" aria-expanded="false">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="nav-text">Give Feedback</span>
                </a>
            </li> 
        </ul>
    </div>
</div>
@endif



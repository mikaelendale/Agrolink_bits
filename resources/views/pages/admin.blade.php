<div class="container"> 
    <!-- row -->
    <div class="row"> 

        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
                        <span class="me-3 bgl-primary text-primary">
                            <!-- <i class="ti-user"></i> -->
                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">User</p>
                            <h4 class="mb-0">{{$userCount}}</h4>
                            <span class="badge badge-primary">+3.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
                        <span class="me-3 bgl-warning text-warning">
                            <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-file-text">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">Providers</p>
                            <h4 class="mb-0">{{$providerCount}}</h4>
                            <span class="badge badge-warning">+3.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body  p-4">
                    <div class="media ai-icon">
                        <span class="me-3 bgl-danger text-danger">
                            <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">Deliver</p>
                            <h4 class="mb-0">{{$deliverCount}}</h4>
                            <span class="badge badge-danger">-3.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
                        <span class="me-3 bgl-success text-success">
                            <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-database">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">Admin</p>
                            <h4 class="mb-0">{{$adminCount}}</h4>
                            <span class="badge badge-success">-3.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 


    </div>
</div>

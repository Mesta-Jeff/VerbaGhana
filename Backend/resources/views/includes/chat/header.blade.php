<header class="rbt-dashboard-header rainbow-header header-default header-left-align rbt-fluid-header">
    <div class="container-fluid position-relative">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-6 col-7">
                <div class="header-left d-flex">
                    <div class="expand-btn-grp" style="display: none">
                        <button id="sideButton" class="bg-solid-primary popup-dashboardleft-btn collapsed"><i class="feather-sidebar left"></i></button>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <img class="logo-light" src="{{ asset('root/assets/images/logo/logo-1.png') }}" alt="ChatBot Logo">
                            <strong class="logo-text">VerbaGhana</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-6 col-5">
                <div class="header-right">
                   
                    <div class="header-btn d-none d-md-block" style="margin-right: 15px !important">
                        <a class="btn-default btn-small round" target="_blank" href="#">Upgrade <i class="feather-zap"></i></a>
                    </div>
                   

                    <!-- Start admin Area  -->
                    <div class="account-access rbt-user-wrapper right-align-dropdown">
                        <div class="rbt-user ml--0">
                            <a class="admin-img" href="#"><img src="{{ asset('root/assets/images/banner/banner-3.png') }}" alt="Admin"></a>
                        </div>
                        <div class="rbt-user-menu-list-wrapper">
                            <div class="inner">
                                <div class="rbt-admin-profile">
                                    <div class="admin-thumbnail">
                                        <img src="{{ asset('root/assets/images/banner/banner-3.png') }}" alt="User Images">
                                    </div>
                                    <div class="admin-info">
                                        <span class="name">Username</span>
                                        <a class="rbt-btn-link color-primary" href="profile-details.html">View Profile</a>
                                    </div>
                                </div>
                                <ul class="user-list-wrapper user-nav">
                                    <li>
                                        <a href="profile-details.html">
                                            <i class="feather-user"></i>
                                            <span>Profile Details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notification.html">
                                            <i class="feather-shopping-bag"></i>
                                            <span>Notification</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-export.html">
                                            <i class="feather-users"></i>
                                            <span>Chat Export</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appearance.html">
                                            <i class="feather-home"></i>
                                            <span>Apperance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plans-billing.html">
                                            <i class="feather-briefcase"></i>
                                            <span>Plans and Billing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sessions.html">
                                            <i class="feather-users"></i>
                                            <span>Sessions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="application.html">
                                            <i class="feather-list"></i>
                                            <span>Application</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr class="mt--10 mb--10">
                                <ul class="user-list-wrapper user-nav">
                                    <li>
                                        <a href="#">
                                            <i class="feather-help-circle"></i>
                                            <span>Help Center</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile-details.html">
                                            <i class="feather-settings"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr class="mt--10 mb--10">
                                <ul class="user-list-wrapper">
                                    <li>
                                        <a href="signin.html">
                                            <i class="feather-log-out"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Start admin Area  -->

                    <div class="expand-btn-grp @@display-class">
                        <button class="bg-solid-primary popup-dashboardright-btn"><i class="feather-sidebar right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
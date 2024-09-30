<header class="rainbow-header header-default header-not-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center row--0">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="logo">
                    <a href="/">
                        <img class="logo-light" src="{{ asset('root/assets/images/logo/logo-1.png') }}" alt="ChatBot Logo">
                        <strong class="logo-text">VerbaGhana</strong>
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-6 position-static">
                <div class="header-right">

                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-relative"><a href="#">Pages</a>
                                <div class="rainbow-megamenu right-align with-mega-item-2">
                                    <div class="wrapper p-0">
                                        <div class="row row--0">
                                            <div class="col-lg-6 single-mega-item">
                                                <h3 class="rbt-short-title">SPECIAL PAGES</h3>
                                                <ul class="mega-menu-item">
                                                    <li>
                                                        <a href="profile-details.html">
                                                            <span>Profile</span>
                                                        </a>
                                                    </li>
                                                   
                                                    <li>
                                                        <a href="chat-export.html">
                                                            <span>Pricing</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="appearance.html">
                                                            <span>Apperance</span>
                                                        </a>
                                                    </li>                                                                                 
                                                    <li>
                                                        <a href="help.html">
                                                            <span>Help & FAQs</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 single-mega-item">
                                                <div class="header-menu-img">
                                                    <img src="{{ asset('root/assets/images/banner/banner-3.png') }}" alt="Menu Split Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="signin.html">Sign In</a></li>
                        </ul>
                    </nav>

                    <!-- Start Header Btn  -->
                    <div class="header-btn">
                        <a class="btn-default btn-small round" target="_blank" href="{{ route('chat')}}">Get Started Free</a>
                    </div>
                    <!-- End Header Btn  -->

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->
                </div>
            </div>
        </div>
    </div>
</header>
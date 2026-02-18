<div class="container">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            {{--<a id="mobile_btn" href="javascript:void(0);">
								<span class="bar-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
            </a>--}}
            <a href="{{ route('accueil') }}" class="navbar-brand logo">
                <img src="{{ asset('assets/img/logo_oreka_3.png')}}" class="img-fluid" width="140"  alt="Logo">
            </a>
            <a href="{{ route('accueil') }}" class="navbar-brand logo-small">
                <img src="{{ asset('assets/img/logo_oreka_3.png')}}" class="img-fluid" width="100"   alt="Logo" >
            </a>
        </div>
       {{-- <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index-2.html" class="menu-logo">
                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
            </div>
            <ul class="main-nav">
                <li class="has-submenu megamenu active">
                    <a href="index-2.html">Home <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu mega-submenu">
                        <li>
                            <div class="megamenu-wrapper">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="single-demo">
                                            <div class="demo-img">
                                                <a href="index-2.html">
                                                    <img src="assets/img/menu/home-01.svg" class="img-fluid " alt="img">
                                                </a>
                                            </div>
                                            <div class="demo-info">
                                                <a href="index-2.html">Car Rental<span class="new">New</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single-demo">
                                            <div class="demo-img">
                                                <a href="index-3.html">
                                                    <img src="assets/img/menu/home-02.svg" class="img-fluid " alt="img">
                                                </a>
                                            </div>
                                            <div class="demo-info">
                                                <a href="index-3.html">Car Rental 1<span class="hot">Hot</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single-demo">
                                            <div class="demo-img">
                                                <a href="index-4.html">
                                                    <img src="assets/img/menu/home-03.svg" class="img-fluid " alt="img">
                                                </a>
                                            </div>
                                            <div class="demo-info">
                                                <a href="index-4.html">Bike Rental<span class="new">New</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single-demo">
                                            <div class="demo-img">
                                                <a href="index-5.html">
                                                    <img src="assets/img/menu/home-04.svg" class="img-fluid " alt="img">
                                                </a>
                                            </div>
                                            <div class="demo-info">
                                                <a href="index-5.html">Yacht Rental<span class="new">New</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Listings <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="listing-grid.html">Listing Grid</a></li>
                        <li><a href="listing-list.html">Listing List</a></li>
                        <li><a href="listing-map.html">Listing With Map</a></li>
                        <li><a href="listing-details.html">Listing Details</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li ><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Authentication</a>
                            <ul class="submenu">
                                <li><a href="register.html">Sign Up</a></li>
                                <li><a href="login.html">Sign In</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Booking</a>
                            <ul class="submenu">
                                <li><a href="booking-checkout.html">Booking Checkout</a></li>
                                <li><a href="booking.html">Booking</a></li>
                                <li><a href="invoice-details.html">Invoice Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Error Page</a>
                            <ul class="submenu">
                                <li><a href="error-404.html">404 Error</a></li>
                                <li><a href="error-500.html">500 Error</a></li>
                            </ul>
                        </li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="our-team.html">Our Team</a></li>
                        <li><a href="testimonial.html">Testimonials</a></li>
                        <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="maintenance.html">Maintenance</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="javascript:void(0);">User Dashboard</a>
                            <ul class="submenu">
                                <li><a href="user-dashboard.html">Dashboard</a></li>
                                <li><a href="user-bookings.html">My Bookings</a></li>
                                <li><a href="user-reviews.html">Reviews</a></li>
                                <li><a href="user-wishlist.html">Wishlist</a></li>
                                <li><a href="user-messages.html">Messages</a></li>
                                <li><a href="user-wallet.html">My Wallet</a></li>
                                <li><a href="user-payment.html">Payments</a></li>
                                <li><a href="user-settings.html">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Admin Dashboard</a>
                            <ul class="submenu">
                                <li><a href="admin/index.html">Dashboard</a></li>
                                <li><a href="admin/reservations.html">Bookings</a></li>
                                <li><a href="admin/customers.html">Manage</a></li>
                                <li><a href="admin/cars.html">Rentals</a></li>
                                <li><a href="admin/invoices.html">Finance & Accounts</a></li>
                                <li><a href="admin/coupons.html">Others</a></li>
                                <li><a href="admin/pages.html">CMS</a></li>
                                <li><a href="admin/contact-messages.html">Support</a></li>
                                <li><a href="admin/users.html">User Management</a></li>
                                <li><a href="admin/earnings-report.html">Reports</a></li>
                                <li><a href="admin/profile-setting.html">Settings & Configuration</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="login-link">
                    <a href="register.html">Sign Up</a>
                </li>
                <li class="login-link">
                    <a href="login.html">Sign In</a>
                </li>
            </ul>
        </div>--}}
        <ul class="nav header-navbar-rht">
            {{--<li class="nav-item">
                <a class="nav-link login-link" href="login.html"><span><i class="bx bx-user me-2"></i></span>Sign In / </a>
                <a class="nav-link login-link ms-1" href="register.html">Register </a>
            </li>--}}
            <li class="nav-item">
                <a class="nav-link header-reg" href="{{ route('reservation_step_1') }}">S’inscrire à une activité</a>
            </li>
        </ul>
    </nav>
</div>

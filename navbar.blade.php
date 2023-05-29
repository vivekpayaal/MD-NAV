<!---  new html page --->
<!-- Desktop Header  -->

<div class="Layout-header d-none d-lg-block">
    <div class="topbar">
        <div class="container">
            <div class="row ">
                <div class="Top-header ">
                    <div class="logo-wrapper col-md-1">
                        <a href="./index.html"><img src="{{asset('./assets/img/logo/Original on Transparent.png')}}" alt="logo"></a>
                    </div>
                    <div class="search-bar col-md-7">
                        <div class="search">
                            <input type="text" name="" id="">
                        </div>
                        <div class="search-icon">
                            <button><i class="fa-solid fa-magnifying-glass white"></i></button>
                        </div>
                    </div>
                    <ul class="top-menu col-md-4">

                        @php
                        $pages = Helper::Page();
                        @endphp

                        {{-- <li><a href ="{{route('website.page',['slug'=>$pages->pages_slug])}}">Homeeee </a></li> --}}
                        <li><a href="{{route('website.index')}}">HOME</a></li>
                        <li><a href="{{route('website.contact')}}">CONTACT</a></li>
                        <li><a href="{{route('website.about')}}">ABOUT US</a></li>
                        @if(Auth::user())
                        <li><a href="{{route('logout')}}">Log Out</a></li>
                        <li><a href="{{route('user.home')}}">Dashboard</a></li>
                        @else
                        <div class="dropdown">
                            <li><a href="#">MY ACCOUNT</a>
                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="{{route('admin.login')}}">Admin login </a>
                                    <a class="dropdown-item" href="{{route('login')}}">User login</a>
                                </div>
                            </li>
                        </div>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-header">
        <div class="header-inner">
            <div class="container list-container">
                <ul class="list">
                    <div class="dropdown">
                        <li class="dropbtn"><a href="#">INCOME TAX</a></li>
                        <div class="dropdown-content">
                            <ul class="Crop-list">
                                <li> <a href="./gstreg.html" class="corp-tax">Personal Income Tax</a>
                                    <div class="Corp-drop">
                                        <ul>
                                            <li><a href="{{route('website.service',['slug' => 'ITR-1'])}}">ITR-1</a></li>
                                            <li><a href="{{route('website.service',['slug' => 'ITR-2'])}}">ITR-2</a></li>
                                            <li><a href="{{route('website.service',['slug' => 'ITR-3'])}}">ITR-3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <ul class="Crop-list">
                                <li> <a href="./gstreturn.html" class="corp-tax">Corporate Tax</a>
                                    <div class="Corp-drop">
                                        <ul>
                                            <li><a href="{{route('website.service',['slug' => 'ITR-4'])}}">ITR-4</a></li>
                                            <li><a href="{{route('website.service',['slug' => 'ITR-5'])}}">ITR-5</a></li>
                                            <li><a href="{{route('website.service',['slug' => 'ITR-6'])}}">ITR-6</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="dropbtn"><a href="#">GST</a></li>
                        <div class="dropdown-content">
                            <a href="{{route('website.service',['slug' => 'GST Registration'])}}">GST Registration</a>
                            <a href="{{route('website.service',['slug' => 'GST Return'])}}">GST Return</a>
                            <a href="{{route('website.service',['slug' => 'GST Cancellation'])}}">GST Cancellation</a>
                        </div>
                    </div>


                    <div class="dropdown">
                        <li class="dropbtn"><a href="#">STARTUP</a></li>
                        <div class="dropdown-content">
                            <a href="{{route('website.service',['slug' => 'Public LTD'])}}">Public LTD</a>
                            <a href="{{route('website.service',['slug' => 'Private LTD'])}}">Private LTD</a>
                            <a href="{{route('website.service',['slug' => 'OPC Company'])}}">OPC Company</a>
                            <a href="{{route('website.service',['slug' => 'Partnership Firm'])}}">Partnership Firm</a>
                        </div>
                    </div>


                    <li><a href="{{route('website.service',['slug' => 'TDS'])}}">TDS</a></li>
                    <li><a href="{{route('website.service',['slug' => 'Tredmark'])}}">TREDMARK</a></li>
                    <li><a href="{{route('website.service',['slug' => 'DSC'])}}">DSC</a></li>
                    <li><a href="{{route('website.service',['slug' => 'Accounting'])}}">ACCOUNTING</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-4 d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="index.html"><img src="{{asset('assets/img/logo/site-logo-6.svg')}}" alt=""></a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-sidebar">
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

        <ul class="mobile-nav-list">
            <li><a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="#">Multipage</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Tax Consulting</a></li>
                            <li><a href="index-2.html">Financial Advisor</a></li>
                            <li><a href="index-3.html">Law Consulting</a></li>
                            <li><a href="index-4.html">Business Consulting</a></li>
                            <li><a href="index-rtl-1.html">RTL</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Landing Page</a>
                        <ul class="sub-menu">
                            <li><a href="single-index-1.html">Tax Consulting</a></li>
                            <li><a href="single-index-2.html">Financial Advisor</a></li>
                            <li><a href="single-index-3.html">Law Consulting</a></li>
                            <li><a href="single-index-4.html">Business Consulting</a></li>
                            <li><a href="single-index-rtl-1.html">RTL</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li><a href="#">Service</a>
                <ul class="sub-menu">
                    <li><a href="service-1.html">Service Default</a></li>
                    <li><a href="service-2.html">Service 2</a></li>
                    <li><a href="service-3.html">Service Right</a></li>
                    <li><a href="service-4.html">Service Left</a></li>
                    <li><a href="single-service-1.html">Service Details </a></li>
                    <li><a href="single-service-2.html">Details Right</a></li>
                </ul>
            </li>

            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="about-1.html">About 1</a></li>
                    <li><a href="about-2.html">About 2</a></li>
                    <li><a href="blog-1.html">Classic Blog</a></li>
                    <li><a href="blog-mesonry-1.html">Mesonry 1</a></li>
                    <li><a href="blog-mesonry-2.html">Mesonry 2</a></li>
                    <li><a href="blog-mesonry-3.html">Mesonry 3</a></li>
                    <li><a href="single-1.html">Single Right</a></li>
                    <li><a href="single-2.html">Single Default</a></li>
                    <li><a href="single-3.html">Single Left</a></li>
                    <li><a href="single-4.html">Single Fuild</a></li>
                    <li><a href="service-1.html">Service Default</a></li>
                    <li><a href="service-2.html">Service 2</a></li>
                    <li><a href="service-3.html">Service Right</a></li>
                    <li><a href="service-4.html">Service Left</a></li>
                    <li><a href="single-service-1.html">Service Details </a></li>
                    <li><a href="single-service-2.html">Details Right</a></li>
                    <li><a href="price-1.html">Pricing 1</a></li>
                    <li><a href="price-2.html">Pricing 2</a></li>
                    <li><a href="contact-1.html">Contact 1</a></li>
                    <li><a href="contact-2.html">Contact 2</a></li>
                    <li><a href="case-study-1.html">Case Study 1</a></li>
                    <li><a href="case-study-2.html">Case Study 2</a></li>
                    <li><a href="single-case-study-1.html">Single Case</a></li>
                    <li><a href="case-study-3.html">Case Study Right</a></li>
                    <li><a href="case-study-4.html">Case Study Left</a></li>
                    <li><a href="testimonial-1.html">Testimonial</a></li>
                    <li><a href="faq-1.html">FAQ</a></li>
                    <li><a href="team-1.html">Team</a></li>
                    <li><a href="career-1.html">Carrer 1</a></li>
                    <li><a href="shop-1.html">Shop 1</a></li>
                    <li><a href="shop-2.html">Shop 2</a></li>
                    <li><a href="shop-3.html">Shop 3</a></li>
                    <li><a href="single-shop-1.html">Shop Single</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="cart-empty.html">Cart Empty</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="singup.html">Sign Up</a></li>
                    <li><a href="signin.html">Sign In</a></li>
                    <li><a href="forgot.html">Forgot</a></li>
                    <li><a href="404.html">404 Error</a></li>
                </ul>
            </li>

            <li><a href="#">Case Study</a>
                <ul class="sub-menu">
                    <li><a href="case-study-1.html">Case Study 1</a></li>
                    <li><a href="case-study-2.html">Case Study 2</a></li>
                    <li><a href="case-study-3.html">Case Study 3</a></li>
                    <li><a href="case-study-4.html">Case Study 4</a></li>
                    <li><a href="single-case-study-1.html">Single Case</a></li>
                </ul>
            </li>

            <li><a href="#">Shop</a>
                <ul class="sub-menu">
                    <li><a href="forgot.html">Forgot</a></li>
                    <li><a href="shop-1.html">Shop 1</a></li>
                    <li><a href="shop-2.html">Shop 2</a></li>
                    <li><a href="shop-3.html">Shop 3</a></li>
                    <li><a href="single-shop-1.html">Shop Single</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="cart-empty.html">Cart Empty</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="singup.html">Sign Up</a></li>
                </ul>
            </li>

            <li><a href="#">Contact</a>
                <ul class="sub-menu">
                    <li><a href="contact-1.html">Contact 1</a></li>
                    <li><a href="contact-2.html">Contact 2</a></li>
                </ul>
            </li>
        </ul>

        <div class="mobile-contact">
            <div class="single-footer">
                <h3>Get in touch</h3>

                <div class="footer-contact">
                    <div class="single-contact">
                        <div class="contact-icon">
                            <img src="{{asset('assets/img/icons/contact-phone4.svg')}}" alt="">
                        </div>
                        <a href="#">USA: +91 02 2585 0556</a>
                        <a href="#">UK: +61 02 2585 0556</a>
                    </div>
                </div>
                <div class="footer-contact">
                    <div class="single-contact">
                        <div class="contact-icon">
                            <img src="{{asset('assets/img/icons/contact-email4.svg')}}" alt="">
                        </div>
                        <a href="#">Contacthelp@Demoui.co</a>
                        <a href="#">Info@consultia.co</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend') }}/img/favicon.ico">
        <!-- Google Fonts
        ============================================ -->        
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/bootstrap.min.css">
        <!-- Font awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/font-awesome.min.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/owl.theme.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/owl.transitions.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/lib/css/nivo-slider.css" type="text/css" />
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/meanmenu.min.css">
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/jquery-ui.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/animate.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/main.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/responsive.css">
        <style type="text/css" media="screen">
        .top-cart .cart-total {
            color: #929292;
            display: inline-block;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 18px;
            margin: 0;
            min-width: 100px;
            position: relative;
            text-align: left;
            text-transform: uppercase;
        }
        </style>
    </head>
    <body>
        <div id="app">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <!-- Add your site or application content here -->
            <!-- HEADER-AREA START -->
            <header class="header-area">
                <!-- HEADER-TOP START -->
                <div class="header-top hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="top-menu">
                                    <!-- Start Language -->
                                    <ul class="language">
                                        <li><a href="#"><img class="right-5" src="{{ asset('/frontend') }}/img/flags/gb.png" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
                                            <ul>
                                                <li><a href="#"><img class="right-5" src="{{ asset('/frontend') }}/img/flags/fr.png" alt="#">French</a></li>
                                                <li><a href="#"><img class="right-5" src="{{ asset('/frontend') }}/img/flags/gb.png" alt="#">English</a></li>
                                                <li><a href="#"><img class="right-5" src="{{ asset('/frontend') }}/img/flags/gb.png" alt="#">English</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End Language -->
                                    <!-- Start Currency -->
                                    <ul class="currency">
                                        <li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
                                            <ul>
                                                <li><a href="#">$ EUR</a></li>
                                                <li><a href="#">$ GBP</a></li>
                                                <li><a href="#">$ USD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End Currency -->
                                    <p class="welcome-msg">Default welcome msg!</p>
                                </div>
                                <!-- Start Top-Link -->
                                <div class="top-link">
                                    <ul class="link">
                                        <li><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>
                                        <li><a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a></li>
                                        <li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
                                        <li><a href="account.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                    </ul>
                                </div>
                                <!-- End Top-Link -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HEADER-TOP END -->
                <!-- HEADER-MIDDLE START -->
                <div class="header-middle">
                    <div class="container">
                        <!-- Start Support-Client -->
                        <div class="support-client hidden-xs">
                            <div class="row">
                                <!-- Start Single-Support -->
                                <div class="col-md-3 hidden-sm">
                                    <div class="single-support">
                                        <div class="support-content">
                                            <i class="fa fa-clock-o"></i>
                                            <div class="support-text">
                                                <h1 class="zero gfont-1">working time</h1>
                                                <p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single-Support -->
                                <!-- Start Single-Support -->
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-support">
                                        <i class="fa fa-truck"></i>
                                        <div class="support-text">
                                            <h1 class="zero gfont-1">Free shipping</h1>
                                            <p>On order over $199</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single-Support -->
                                <!-- Start Single-Support -->
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-support">
                                        <i class="fa fa-money"></i>
                                        <div class="support-text">
                                            <h1 class="zero gfont-1">Money back 100%</h1>
                                            <p>Within 30 Days after delivery</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single-Support -->
                                <!-- Start Single-Support -->
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-support">
                                        <i class="fa fa-phone-square"></i>
                                        <div class="support-text">
                                            <h1 class="zero gfont-1">Phone: 0123456789</h1>
                                            <p>Order Online Now !</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single-Support -->
                            </div>
                        </div>
                        <!-- End Support-Client -->
                        <!-- Start logo & Search Box -->
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="logo">
                                    <a href="index.html" title="Malias"><img src="{{ asset('/frontend') }}/img/logo.png" alt="Malias"></a>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <div class="quick-access">
                                    <div class="search-by-category">
                                        <div class="search-container">
                                            <select>
                                                <option class="all-cate">All Categories</option>
                                                <optgroup  class="cate-item-head" label="Cameras & Photography">
                                                    <option class="cate-item-title">Handbags</option>
                                                    <option class="c-item">Blouses And Shirts</option>
                                                    <option class="c-item">Clouthes</option>
                                                </optgroup>
                                                <optgroup  class="cate-item-head" label="Laptop & Computer">
                                                    <option class="cate-item-title">Apple</option>
                                                    <option class="c-item">Dell</option>
                                                    <option class="c-item">Hp</option>
                                                    <option class="c-item">Sony</option>
                                                </optgroup>
                                                <optgroup  class="cate-item-head" label="Electronic">
                                                    <option class="c-item">Mobile</option>
                                                    <option class="c-item">Speaker</option>
                                                    <option class="c-item">Headphone</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="header-search">
                                            <form action="#">
                                                <input type="text" placeholder="Search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="top-cart">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                                    <span class="cart-total">
                                                        <span class="cart-title">shopping cart</span>
                                                        <span class="cart-item">2 item(s)- </span>
                                                        <span class="top-cart-price">$365.00</span>
                                                    </span>
                                                </a>
                                                <div class="mini-cart-content">
                                                    <div class="cart-img-details">
                                                        <div class="cart-img-photo">
                                                            <a href="#"><img src="{{ asset('/frontend') }}/img/product/total-cart.jpg" alt="#"></a>
                                                        </div>
                                                        <div class="cart-img-content">
                                                            <a href="#"><h4>Prod Aldults</h4></a>
                                                            <span>
                                                                <strong class="text-right">1 x</strong>
                                                                <strong class="cart-price text-right">$180.00</strong>
                                                            </span>
                                                        </div>
                                                        <div class="pro-del">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="cart-img-details">
                                                        <div class="cart-img-photo">
                                                            <a href="#"><img src="{{ asset('/frontend') }}/img/product/total-cart2.jpg" alt="#"></a>
                                                        </div>
                                                        <div class="cart-img-content">
                                                            <a href="#"><h4>Fact Prone</h4></a>
                                                            <span>
                                                                <strong class="text-right">1 x</strong>
                                                                <strong class="cart-price text-right">$185.00</strong>
                                                            </span>
                                                        </div>
                                                        <div class="pro-del">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-inner-bottom">
                                                        <span class="total">
                                                            Total:
                                                            <span class="amount">$550.00</span>
                                                        </span>
                                                        <span class="cart-button-top">
                                                            <a href="cart.html">View Cart</a>
                                                            <a href="checkout.html">Checkout</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End logo & Search Box -->
                    </div> 
                </div>
                <!-- HEADER-MIDDLE END -->

                <!-- START MAINMENU-AREA -->
                <div class="mainmenu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mainmenu hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
{{--                                            <li><router-link to="/">Home</router-link></li>--}}
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="account.html">Create Account</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="product-details.html">Product details</a></li>
                                                    <li><a href="shop.html">Shop Grid View</a></li>
                                                    <li><a href="shop-list.html">Shop List View</a></li>
                                                    <li><a href="wishlist.html">Wish List</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN-MENU-AREA -->
                <!-- Start Mobile-menu -->
                <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="account.html">Create Account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="product-details.html">Product details</a></li>
                                                <li><a href="shop.html">Shop Grid View</a></li>
                                                <li><a href="shop-list.html">Shop List View</a></li>
                                                <li><a href="wishlist.html">Wish List</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Mobile-menu -->
            </header>
            <!-- HEADER AREA END -->

            <!-- START PAGE-CONTENT -->
           <main-component></main-component>
            <!-- END HOME-PAGE-CONTENT -->

            <!-- START SUBSCRIBE-AREA -->
            <div class="subscribe-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                            <div class="subscribe">
                                <form action="#">
                                    <input type="text" placeholder="Enter Your E-mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook fb"></i></a>
                                <a href="#"><i class="fa fa-google-plus gp"></i></a>
                                <a href="#"><i class="fa fa-twitter tt"></i></a>
                                <a href="#"><i class="fa fa-youtube yt"></i></a>
                                <a href="#"><i class="fa fa-linkedin li"></i></a>
                                <a href="#"><i class="fa fa-rss rs"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SUBSCRIBE-AREA -->

            <!-- FOOTER-AREA START -->
            <footer class="footer-area">
                <!-- Footer Start -->
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="footer-title">
                                    <h5>My Account</h5>
                                </div>
                                <nav>
                                    <ul class="footer-content">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="wishlist">Wish List</a></li>
                                        <li><a href="#">Search Terms</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="footer-title">
                                    <h5>Customer Service</h5>
                                </div>
                                <nav>
                                    <ul class="footer-content">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xs-12 hidden-sm col-md-3">
                                <div class="footer-title">
                                    <h5>Payment & Shipping</h5>
                                </div>
                                <nav>
                                    <ul class="footer-content">
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="shop-list.html">Specials</a></li>
                                        <li><a href="#">Search Terms</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="footer-title">
                                    <h5>Payment & Shipping</h5>
                                </div>
                                <nav>
                                    <ul class="footer-content box-information">
                                        <li>
                                            <i class="fa fa-home"></i><span>Towerthemes, 1234 Stret Lorem, LPA States, Libero</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@bootexperts.com</a></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span>01234-56789</span> <br> <span> 01234-56789</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>              
                </div>
                <!-- Footer End -->
                <!-- Copyright-area Start -->
                <div class="copyright-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright &copy; <a href="http://bootexperts.com/" target="_blank"> BootExpert</a> All rights reserved.</p>
                                    <div class="payment">
                                        <a href="#"><img src="{{ asset('/frontend') }}/img/payment.png" alt="Payment"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright-area End -->
            </footer>
            <!-- FOOTER-AREA END -->    
            <!-- QUICKVIEW PRODUCT -->
            <div id="quickview-wrapper">
               <!-- Modal -->
               <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-product">
                                    <div class="product-images">
                                        <div class="main-image images">
                                            <img alt="#" src="{{ asset('/frontend') }}/img/product/quickview-photo.jpg"/>
                                        </div>
                                    </div><!-- .product-images -->

                                    <div class="product-info">
                                        <h1>Aenean eu tristique</h1>
                                        <div class="price-box-3">
                                            <hr />
                                            <div class="s-price-box">
                                                <span class="new-price">$160.00</span>
                                                <span class="old-price">$190.00</span>
                                            </div>
                                            <hr />
                                        </div>
                                        <a href="shop.html" class="see-all">See all features</a>
                                        <div class="quick-add-to-cart">
                                            <form method="post" class="cart">
                                                <div class="numbers-row">
                                                    <input type="number" id="french-hens" value="3">
                                                </div>
                                                <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                            </form>
                                        </div>
                                        <div class="quick-desc">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                        </div>
                                        <div class="social-sharing">
                                            <div class="widget widget_socialsharing_widget">
                                                <h3 class="widget-title-modal">Share this product</h3>
                                                <ul class="social-icons">
                                                    <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .product-info -->
                                </div><!-- .modal-product -->
                            </div><!-- .modal-body -->
                        </div><!-- .modal-content -->
                    </div><!-- .modal-dialog -->
               </div>
               <!-- END Modal -->
            </div>
            <!-- END QUICKVIEW PRODUCT -->
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <!-- jquery
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/bootstrap.min.js"></script>
        <!-- wow JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/wow.min.js"></script>
        <!-- meanmenu JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/owl.carousel.min.js"></script>
        <!-- scrollUp JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/countdon.min.js"></script>
        <!-- jquery-price-slider js
        ============================================ --> 
        <script src="{{ asset('/frontend') }}/js/jquery-price-slider.js"></script>
        <!-- Nivo slider js
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <!-- plugins JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/plugins.js"></script>
        <!-- main JS
        ============================================ -->        
        <script src="{{ asset('/frontend') }}/js/main.js"></script>
    </body>

</html>

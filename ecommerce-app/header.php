<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content=" " />
        <!-- Title -->
        <title>E-Shopper-Goodies</title>
        <!-- Favicon  -->
        <link rel="shortcut icon" href="assets/images/fevicon.png" />

        <!-- *********** CSS Files *********** -->
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <!-- Styles CSS -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" />       
    </head>

    <body class="template-index home-version-2">
        <!-- Start Page Loader -->
        <div class="page-loading"></div>
        <!-- End Page Loader -->

        <!--  Start Main Wrapper -->
        <div class="main-wrapper cart-drawer-push">
            <!-- Start Promotional Bar Section -->
            <div class="promotional-bar border-0 rounded-0 d-flex align-items-center alert alert-warning fade show" role="alert">
                <div class="container-fluid full-promotional-bar">
                    <span>Shop with discount 50%. Hurry Up! <a href="#">Shop Now</a></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>
                </div>
            </div>
            <!-- End Promotional Bar Section -->

            <!-- Start Header Section -->
            <header class="header bg-white">
                <!-- Start Top Header -->
                <div class="container-fluid full-header top-header">
                    <div class="topbar-Header justify-content-between align-items-center">
                        <div class="row">
                            <div class="col-2 col-sm-3 col-md-4">
                                <div class="top-links">
                                    <div class="link-icon toplink-toggle d-lg-none mb-0"> <i class="icon ti-list" aria-hidden="true"></i></div>
                                    <ul class="link-items">
                                    <?php if(!isset($_SESSION['email'])) { ?>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="register.php">Create Account</a></li>
                                        <li><a href="product-details.php">Hot Items in town </a></li>
                                        <li><a href="seller/home.php">Are you a seller ?</a></li>
                                        <?php }else {?>
                                        <li><a href="seller/home.php">Are you a seller ?</a></li>
                                        <li><a href="my-account.php">Hello <?php echo $name ; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-md-4 text-center d-none d-md-block">
                                <p class="m-0">Free shipping on All Orders. No Minimum Purchase.</p>
                            </div>
                            <div class="col-10 col-sm-9 col-md-4 pl-0 text-right">
                                <?php
                                    if (isset($_SESSION['email'])){
                                        # code...
                                ?>
                                <div class="phone-number">
                                    <a href="./backend/auth/logout.php">                                        
                                        <span class="call"><?php echo $_SESSION['email'] ?></span>
                                    </a>
                                </div>
                                <?php   }
                                else {
                                    ?>
                                <div class="phone-number">
                                    <a href="./login.php">                                        
                                        <span class="call">LOGIN</span>
                                    </a>
                                </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Header -->

                <!-- Start Main Header -->
                <div class="container-fluid full-header main-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Start Logo -->
                        <?php 
                        // check if session is  not set
                        if(isset($_SESSION['email'])) { ?>

                        
                        <div class="col-6 col-md-6 col-lg-2 navbar-brand logo p-0 m-0">
                            <a href="#" class="logo-img"><img class="img-fluid" src="assets/images/logo/logo.png" alt="logo" title="E-Shopper-" /></a>
                        </div>
                        <?php }else{ ?>
                            <div class="col-6 col-md-6 col-lg-2 navbar-brand logo p-0 m-0">
                            <a href="login.php" class="logo-img">You are not logged in?</a>
                        </div>
                        <?php } ?>
                        <!-- End Logo -->
                        <!-- Start Navigation -->
                        <nav class="navigation navbar position-static navbar-expand-lg p-0 col-lg-8">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon ti-menu"></span></button>        
                            <div id="navbar-collapse" class="navbar-collapse collapse dual-nav">
                                <a href="#" class="closeNav-btn d-lg-none clearfix" id="closeNav" title="Close"><span class="menu-close mr-2">Close</span><i class="ti-close" aria-hidden="true"></i></a>
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#">Home<span class="arw plush" title="Click to show/hide"></span></a>  
                                        <!-- Start Megamenu Dropdown -->
                                        <div class="megamenu submenu dropdown">
                                            <ul>
                                                <li><a class="item" href="index.php">Home</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Megamenu Dropdown -->
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Products
                                            <span class="arw plush" title="Click to show/hide"></span>
                                            <span class="lbl new">New</span>
                                        </a>  
                                        <!-- Start Megamenu Style 3 -->
                                        <div class="megamenu submenu style3">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                                <h3>New Arrival</h3>
                                                                <ul>
                                                                    <li class="item-img"><a href="collections.php" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                                    <li><a class="item" href="collections.php">Collections Pages</a></li>
                                                                    <li><a class="item" href="shop-grid-fullwidth.php">Shop pages</a></li>
                                                                    <li><a class="item" href="product-details.php">Product pages</a></li>
                                                                    <li><a class="item" href="blog.php">Blog Pages</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                                <h3>In Demand</h3>
                                                                <ul>
                                                                    <li class="item-img"><a href="collections.php" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                                    <li><a class="item" href="collections.php">Collections Pages</a></li>
                                                                    <li><a class="item" href="shop-grid-fullwidth.php">Shop pages</a></li>
                                                                    <li><a class="item" href="product-details.php">Product pages</a></li>
                                                                    <li><a class="item" href="blog.php">Blog Pages</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                                <h3>Trending</h3>
                                                                <ul>
                                                                    <li class="item-img"><a href="collections.php" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                                    <li><a class="item" href="#">Our Store</a></li>
                                                                    <li><a class="item" href="about-us.php">Company Info</a></li>
                                                                    <li><a class="item" href="#">Favorites</a></li>
                                                                    <li><a class="item" href="#">Private Policy</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                                <h3>Flash Sale</h3>
                                                                <ul>
                                                                    <li class="item-img"><a href="collections.php" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                                    <li><a class="item" href="#">Order Status</a></li>
                                                                    <li><a class="item" href="#">Shipping & Returns</a></li>
                                                                    <li><a class="item" href="#">Shipping & Deliveries</a></li>
                                                                    <li><a class="item" href="terms-and-conditions.php">Terms & Conditions</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Megamenu Style 3 -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#">Pages
                                            <span class="arw plush" title="Click to show/hide"></span>
                                        </a>  
                                        <!-- Start Megamenu Dropdown -->
                                        <div class="megamenu submenu dropdown">
                                            <ul>
                                                <li><a class="item" href="about-us.php">About Us</a></li>
                                                <li><a class="item" href="faqs.php">FAQ's</a></li>
                                                <li><a class="item" href="contact-us.php">Contact Us</a></li>
                                                <li><a class="item" href="coming-soon.php">Coming Soon</a></li>
                                                <li><a class="item" href="order-tracking.php">Order Tracking</a></li>
                                                <li><a class="item" href="compare.php">Compare</a></li>
                                                <li class="dropmenu">
                                                    <a class="item" href="#">My Account <span class="arw plush" title="Click to show/hide"></span></a>
                                                    <ul class="droplink submenu1">
                                                        <li><a class="item" href="my-account.php">My Account</a></li>
                                                         <?php // check if session is not set 
                                                        if(!isset($_SESSION['email'])) { ?>                                                                       
                                                        <li><a class="item" href="login.php">Login</a></li>
                                                        <li><a class="item" href="register.php">Register</a></li>
                                                        <?php } else { ?>
                                                        <li><a class="item" href="forgot-password.php">Forgot Password</a></li>
                                                        <li><a class="item" href="change-password.php">Change Password</a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                <li class="dropmenu">
                                                    <a class="item" href="#">Wishlist <span class="arw plush" title="Click to show/hide"></span></a>
                                                    <ul class="droplink submenu1">
                                                        <li><a class="item" href="wishlist-login.php">Wishlist Login</a></li>
                                                        <li><a class="item" href="wishlist.php">Wishlist</a></li>
                                                        <li><a class="item" href="empty-wishlist.php">Empty Wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropmenu">
                                                    <a class="item" href="#">Cart <span class="arw plush" title="Click to show/hide"></span></a>
                                                    <ul class="droplink submenu1">
                                                        <li><a class="item" href="cart.php">Cart Version 1</a></li>
                                                        <li><a class="item" href="cart-v2.php">Cart Version 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropmenu">
                                                    <a class="item" href="#">Checkout <span class="arw plush" title="Click to show/hide"></span></a>
                                                    <ul class="droplink submenu1">
                                                        <li><a class="item" href="checkout.php">Checkout Version 1</a></li>
                                                        <li><a class="item" href="checkout-v2.php">Checkout Version 2</a></li>
                                                        <li><a class="item" href="checkout-success.php">Checkout Success</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropmenu">
                                                    <a class="item" href="#">Empty Pages <span class="arw plush" title="Click to show/hide"></span></a>
                                                    <ul class="droplink submenu1">
                                                        <li><a class="item" href="empty-cart.php">Empty Cart</a></li>
                                                        <li><a class="item" href="empty-category.php">Empty Category</a></li>
                                                        <li><a class="item" href="empty-compare.php">Empty Compare</a></li>
                                                        <li><a class="item" href="empty-search.php">Empty Search</a></li>
                                                        <li><a class="item" href="empty-wishlist.php">Empty Wishlist</a></li>
                                                        <li><a class="item" href="404.php">404 Page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Megamenu Dropdown -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#">Blog
                                            <span class="arw plush" title="Click to show/hide"></span>
                                        </a>  
                                        <!-- Start Megamenu Dropdown -->
                                        <div class="megamenu submenu dropdown">
                                            <ul>
                                                <li><a class="item" href="blog.php">Blog Grid</a></li>
                                                <li><a class="item" href="blog-list-sidebar.php">Blog List</a></li>
                                                <li><a class="item" href="blog-grid-sidebar.php">Blog Sidebar</a></li>
                                                <li><a class="item" href="blog-masonry.php">Blog Masonry</a></li>
                                                <li class="dropmenu">
                                                    <a class="item" href="#">Blog Details <span class="arw plush" title="Click to show/hide"></span></a>
                                                    <ul class="droplink submenu1">
                                                        <li><a class="item" href="single-post-image.php">Standard Post</a></li>
                                                        <li><a class="item" href="single-post-gallery.php">Gallery Post</a></li>
                                                        <li><a class="item" href="single-post-video.php">Video Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Megamenu Dropdown -->
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Start Navigation -->
                        <!-- Start Right Menu -->
                        <div class="col-6 col-md-6 col-lg-2 p-0 right-side">
                            <!-- Start Minicart -->
                            <div class="minicart float-right">
                                <a href="#" class="cart-btn" title="Cart" data-toggle="modal" data-target="#mycartdrawer">
                                    <i class="icon ti-shopping-cart"></i>
                                    <div class="cart-count">
                                        <span id="count">4</span>
                                    </div>
                                </a>
                            </div>
                            <!-- End Minicart -->
                            <!-- Start Search Box -->
                            <div class="search-box float-right">
                                <a href="#" title="Search" class="search-open search-toggle" data-toggle="modal" data-target="#searchform">
                                    <i class="icon ti-search"></i> 
                                </a>
                            </div>
                            <div class="minicart float-left">
                                <?php 
                                // check if session is set
                                if(isset($_SESSION['email'])){
                                    
                                ?>
                                <a href="./my-account.php" class="cart-btn" title="<?php echo  $name; ?>">
                                <i class="icon">
                                <img src="<?php //echo image
                                echo $image; ?>" class="img-fluid rounded-circle     "                           
                                 alt="Profile Picture not found" width="32" height="32">
                                </i>
                                    <div class="cart-count" 
                                    Style="background-color:green ;display: block;position: absolute;top: 24px;left: 21px;color: #fff;width: 13px;height: 14px;line-height: 19px;border-radius: 50%;text-align: center;font-size: 11px;">
                                     <span id="count"></span>
                                    </div>
                                </a>

                                <?php }else{ ?>
                                <a href="./login.php" class="cart-btn" title="You are not logged in ?">
                                    <?php } ?>
                                    
                            
                            </div>
                            <!-- End Search Show -->
                        </div>
                        <!-- End Right Menu -->
                    </div>
                </div>
                <!-- End Main Header -->
            </header>
            <!-- End Header Section -->

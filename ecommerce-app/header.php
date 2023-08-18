<?php
require "./backend/connector/conn.php";

$sql = "SELECT * FROM product_information";
$result = $conn->query($sql);

$productDetailsArray = array(); // Initialize an empty array to store the details

if ($result->num_rows > 0) {
    // Loop through the result and store each row's data in the array
    while ($row = $result->fetch_assoc()) {
        $productDetailsArray[] = $row;
    }
} else {
    echo "No products found.";
}
if (isset($_SESSION['email'])){
    $session_var = $_SESSION['email'];
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$session_var );
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        // User with the given email exists
        $row = $result->fetch_assoc();
        $name = $row['firstname'] . " " . $row['lastname'];
        $image = $row['image'];
        $user_cart_id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
    }
    
    
  }

// Close the connection
// $conn->close();
?>



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
                    <span>Shop with discount 50%. Hurry Up! <a href="product-details.php">Shop Now</a></span>
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
                                        <span class="call"><?php echo $_SESSION['email'] ?></span>
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
                                    <span class="call">LOGOUT</span>    
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
                                        <a class="nav-link" href="./collections.php">Products
                                            <span class="arw plush" title="Click to show/hide"></span>
                                            <span class="lbl new">New</span>
                                        </a>  
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
                            <?php if (isset($_SESSION['email'])) {
                                $sqlcart = "SELECT * FROM cart WHERE user_id = ?";
                                $stmtcart = $conn->prepare($sqlcart);
                                $stmtcart->bind_param("s", $user_cart_id);
                                $stmtcart->execute();
        
                                // Get the result
                                $resultcart = $stmtcart->get_result();

                                
                            
                             ?>
                            <div class="minicart float-right">
                                <a href="#" class="cart-btn" title="Cart" data-toggle="modal" data-target="#mycartdrawer">
                                    <i class="icon ti-shopping-cart"></i>
                                    <div class="cart-count">
                                        <span id="count"><?php echo $resultcart->num_rows; ?> </span>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
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
                                 alt="You are not logged in" width="32" height="32">
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

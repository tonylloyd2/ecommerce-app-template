<?php
session_start();
require "./backend/connector/conn.php";


$query_products = "SELECT * FROM product_information order by rand()";
$result_products = mysqli_query($conn, $query_products);

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
  }
  
  
}



 include "./header.php";
 
 

 ?>
            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Create An Account</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Create an Account</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Register Account -->
                <div class="create-account">
                    <div class="container">
                        <div class="row row-sp">
                            <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="page-title text-center">
                                    <p class="subtitle mb-0">Creating an account will save you time at checkout and allow you to access <br/>
                                        your order status and history.
                                    </p>
                                </div>
                                <form action="./backend/auth/register.php" class="register-form needs-validation" enctype="multipart/form-data" method="post" >
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" placeholder="" required name="first-name" />
                                            <div class="invalid-feedback">Please enter your first name.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" placeholder="" required name="last-name" />
                                            <div class="invalid-feedback">Please enter your last name.</div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Email Address *</label>
                                            <input type="email" class="form-control" placeholder="" required  name="email"  />
                                            <div class="invalid-feedback">Please enter your email.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone number *</label>
                                            <input type="number" class="form-control" placeholder="" required  name="phone" />
                                            <div class="invalid-feedback">Please enter your phone number.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group col-md-6">
                                            <label>Password *</label>
                                            <input type="password" class="form-control" placeholder="" required  name="password" />
                                            <div class="invalid-feedback">Please enter your password.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Cornfirm password *</label>
                                            <input type="password" class="form-control" placeholder="" required   name="confirm-password" />
                                            <div class="invalid-feedback">Please confirm your password.</div>
                                        </div>                                       
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label >Profile Picture *</label>
                                            <input  type="file" name="filetoupload"  required/>
                                            <div class="invalid-feedback">Please enter your Profile Picture</div>
                                        </div> 
                                    </div>
                                    <div class="form-group button-action mt-1 mt-sm-5 clearfix text-center">
                                        <button type="submit" class="account-create btn btn-secondary" name="submit">Create An Acoount</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Register Account -->
            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
            <footer class="footer">
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 logo-wellcome">
                                <div class="ftr-logo">
                                    <a href="index.php"><img class="img-fluid" src="assets/images/logo/gray-logo.png" alt="E-Shopper-Goodies " title="E-Shopper-Goodies " /></a>
                                </div>
                                <div class="welcome-text">
                                    <p class="m-0">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                                </div>
                                <div class="social-icons">
                                    <ul class="d-flex flex-row align-items-center text-center">
                                        <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                        <li><a href="#" title="Google Plus"><i class="icon ti-google"></i></a></li>
                                        <li><a href="#" title="Youtube"><i class="icon ti-youtube"></i></a></li>
                                        <li><a href="#" title="Vimeo"><i class="icon ti-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 newsletter-menulinks">
                                <div class="row no-gutters footer-newsletter">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <h3>Sign up to our Newsletter and receive 10% off your first order!</h3>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <form action="#" class="needs-validation" method="post">
                                            <div class="form-group m-0 position-relative">
                                                <input type="text" class="form-control" placeholder="Enter your email address..." required>
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-paper-plane-o"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row no-gutters footer-links">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                        <h4>Quick Link</h4>
                                        <ul class="linklist">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="about-us.php">About us</a></li>
                                            <li><a href="faqs.php">FAQs</a></li>
                                            <li><a href="contact-us.php">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                        <h4>Help Link</h4>
                                        <ul class="linklist">
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="wishlist.php">My Wishlist</a></li>
                                            <li><a href="order-tracking.php">Order Traking</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                        <h4>Custom Link</h4>
                                        <ul class="linklist">
                                            <li><a href="#">Parts Shop</a></li>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Refunds</a></li>
                                            <li><a href="#">Help & support</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact">
                                        <h4>Contact Information</h4>
                                        <ul class="linklist contact-info d-flex flex-column">
                                            <li><i class="icon ti-location-pin"></i><span>No 40 Baria Street 133/2, <br/>NewYork, USA</span></li>
                                            <li><i class="icon fa fa-phone"></i><a href="tel:+011234567890">(+01) 123 456 7890</a></li>
                                            <li><i class="icon ti-email"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="payment-icons pull-right">
                            <i class="fa fa-cc-visa" aria-hidden="true"></i> 
                            <i class="fa fa-cc-amex" aria-hidden="true"></i> 
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i> 
                            <i class="fa fa-cc-discover" aria-hidden="true"></i> 
                            <i class="fa fa-cc-paypal" aria-hidden="true"></i> 
                        </div>
                        <div class="copyright-content pt-md-1 pull-left"> 
                            <span class="content"> Copyright &copy; 2022 E-Shopper-Goodies . All Rights Reserved.</span> 
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer Section -->

            <!-- Start Scroll Top -->
            <div id="scrollTop"><i class="ti-arrow-up"></i></div>
            <!-- End Scroll Top -->

            <!-- Start Search Drawer -->
            <div class="search-area modal fade top" id="searchform" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">
                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                    <div class="container">
                        <div class="modal-content search-inline align-content-center">
                            <div class="search-head position-relative">
                                <h3>What are you looking for?</h3>
                                <a class="search-close" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close" aria-hidden="true"></i>
                                </a>
                            </div>
                            <form action="#" class="position-relative">
                                <input type="text" class="form-control" placeholder="Search Products...">
                                <button class="search-btn" type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Drawer -->

            <!-- Start Cart Drawer -->
            <div class="minicart-wrapper">
                <div class="cart-drawer model fade right show cart-drawer-right">
                    <div class="minicart-head">
                        <h3>Shopping Cart</h3>
                        <a class="close-btn active">
                            <i class="ti-close"></i>
                        </a>
                    </div>
                    <div class="minicart-details">
                        <div class="empty-cart">
                            <p>You have no items in your shopping cart.</p>
                        </div>
                        <ul class="cart-lists clearfix">
                            <li class="cart-item d-table">
                                <div class="pro-img d-table-cell align-middle">
                                    <a href="product-details.php">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Donec pede justo fringilla" />
                                    </a>
                                </div>
                                <div class="item-info pl-4 text-left d-table-cell align-top">
                                    <a href="product-details.php">Donec pede justo fringilla</a>
                                    <p class="size-color">Sliver Black/XXL</p>
                                    <p class="price">1 x $699.00</p>
                                </div>
                                <div class="item-right cart-remove d-table-cell align-middle">
                                    <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                                    <a class="remove" href="#"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li class="cart-item d-table">
                                <div class="pro-img d-table-cell align-middle">
                                    <a href="product-details.php">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Sociosqu facilisi senectus nisi etiam" />
                                    </a>
                                </div>
                                <div class="item-info pl-4 text-left float-left d-table-cell align-top">
                                    <a href="#">Sociosqu facilisi senectus nisi</a>
                                    <p class="size-color">Red/XL</p>
                                    <p class="price">1 x $299.00</p>
                                </div>
                                <div class="item-right cart-remove d-table-cell align-middle">
                                    <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                                    <a class="remove" href="#"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li class="cart-item d-table">
                                <div class="pro-img d-table-cell align-middle">
                                    <a href="product-details.php">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Nullam scelerisque suscipit sociis" />
                                    </a>
                                </div>
                                <div class="item-info pl-4 text-left d-table-cell align-top">
                                    <a href="product-details.php">Nullam scelerisque suscipit</a>
                                    <p class="size-color">Silver/L</p>
                                    <p class="price">1 x $239.00</p>
                                </div>
                                <div class="item-right cart-remove d-table-cell align-middle">
                                    <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                                    <a class="remove" href="#"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li class="cart-item d-table">
                                <div class="pro-img d-table-cell align-middle">
                                    <a href="product-details.php">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Pellentesque habitant morbi" />
                                    </a>
                                </div>
                                <div class="item-info pl-4 text-left d-table-cell align-top">
                                    <a href="product-details.php">Pellentesque habitant morbi</a>
                                    <p class="size-color">Black/M</p>
                                    <p class="price">1 x $119.00</p>
                                </div>
                                <div class="item-right cart-remove d-table-cell align-middle">
                                    <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                                    <a class="remove" href="#"><i class="ti-close"></i></a>
                                </div>
                            </li>
                        </ul>                    
                    </div>

                    <div class="minicart-bottom-actions">
                        <div class="pro-totals d-inline-block w-100">
                            <div class="items mb-1 clearfix">
                                <span class="item subtotal float-left">Subtotal:</span>
                                <span class="price-total float-right"><span class="price">$1356.00</span></span>
                            </div>
                            <div class="items mb-1 clearfix">
                                <span class="item shipping float-left">Shipping:</span>
                                <span class="price-total float-right"><span class="price">$10.00</span></span>
                            </div>
                            <div class="items mb-1 clearfix">
                                <span class="item tax float-left">Tax:</span>
                                <span class="price-total float-right"><span class="price">$0.00</span></span>
                            </div>
                            <div class="items clearfix">
                                <span class="item total float-left">Total:</span>
                                <span class="price-total float-right"><span class="price">$1366.00</span></span>
                            </div>
                        </div>
                        <div class="actions d-inline-block w-100 text-center">
                            <a class="btn btn-primary d-block mb-4 font-sm-14" href="cart.php">View Cart</a>
                            <a class="btn btn-secondary d-block font-sm-14" href="checkout.php">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart Drawer -->

            <!-- Overlay -->
            <div class="overlay"></div>

        </div>
        <!--  End Main Wrapper -->

        <!-- ******** JS Files ******** -->        
        <!-- Plugin JS -->	        
        <script src="assets/js/plugins.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

    </body>
</html>


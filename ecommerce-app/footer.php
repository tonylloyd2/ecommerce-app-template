<style>
    .bg-white{
        background-color: aqua;
    }
</style>
<footer class=" bg-white footer-v2" style="background-color: aqua; ">
                <!-- Start Footer Topbar -->
                <div class="footer-top p-0 clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 newsletter-form">
                                <div class="footer-newsletter">
                                    <h3>Sign up<br> and receive 10% off your first order!</h3>
                                    <form action="./register.php"  method="post">
                                        <div class="form-group m-0 position-relative">
                                            
                                           <a href="./register.php"> <button class="btn btn-primary" type="submit">Register<i class="icon fa fa-chevron-right"></i></button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 site-footer-links">
                                <div class="row footer-links">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 menu-items">
                                        <h4>Useful Links</h4>
                                        <ul class="linklist">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="about-us.php">About us</a></li>
                                            <li><a href="faqs.php">FAQs</a></li>
                                            <li><a href="#">Parts Shop</a></li>
                                            <li><a href="contact-us.php">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 menu-items">
                                        <h4>Help Links</h4>
                                        <ul class="linklist">
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="wishlist.php">My Wishlist</a></li>
                                            <li><a href="order-tracking.php">Order Traking</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                                            <li><a href="#">Delivery</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer Topbar -->
                <!-- Start Footer Middle -->
                <div class="footer-middle clearfix">
                    <div class="container">
                        <div class="row d-flex flex-row align-items-center">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 ftr-social-icons">
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
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center site-ftr-logo">
                                <div class="ftr-logo">
                                    <a href="index.php"><img class="img-fluid" src="assets/images/logo/logo.png" alt="Posh Auto Parts" title="Posh Auto Parts" /></a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 ftr-payment-icon">
                                <div class="payment-icons pull-right">
                                    <i class="fa fa-cc-visa" aria-hidden="true"></i> 
                                    <i class="fa fa-cc-amex" aria-hidden="true"></i> 
                                    <i class="fa fa-cc-mastercard" aria-hidden="true"></i> 
                                    <i class="fa fa-cc-discover" aria-hidden="true"></i> 
                                    <i class="fa fa-cc-paypal" aria-hidden="true"></i> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer Middle -->
                <!-- Start Footer Bottom -->
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="copyright-content p-0"> 
                            <span class="content"> Copyright &copy; 2022 Posh Auto Parts. All Rights Reserved.</span> 
                        </div>
                    </div>
                </div>
                <!-- End Footer Bottom -->
            </footer>
            <!-- End Footer Section -->

            <!-- Start Scroll Top -->
            <div id="scrollTop"><i class="ti-arrow-up"></i></div>
            <!-- End Scroll Top -->

            <!-- Start Search Drawer -->
            <div class="search-area modal fade top" id="searchform" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">
                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                    <div class="container-fluid full-header">
                        <div class="modal-content search-inline align-content-center">
                            <div class="search-head position-relative">
                                <h3>What are you looking for?</h3>
                                <a class="search-close" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close" aria-hidden="true"></i>
                                </a>
                            </div>
                            <form action="#" class="position-relative">
                                <input type="text" class="form-control" placeholder="Search Products..." required />
                                <button class="search-btn" type="submit"><i class="ti-search"></i></button>
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
                        <?php

                        $sqlcart = "SELECT * FROM cart WHERE user_id = ?";
                        $stmtcart = $conn->prepare($sqlcart);
                        $stmtcart->bind_param("s", $user_cart_id);
                        $stmtcart->execute();

                        // Get the result
                        $resultcart = $stmtcart->get_result();
                        if ($resultcart->num_rows === 0) {
                            

                            ?>
                        <div class="empty-cart">
                            <p>You have no items in your shopping cart.</p>
                        </div>
                        <?php }
                        else {
                            
                            

                        ?>
                        <ul class="cart-lists clearfix">
                        <?php 
                        $totalprice = 0.0;
                        while ($cart_data = $resultcart->fetch_assoc()) { 
                            $product_price = (float) $cart_data['product_price']; // Convert product price to float
                            $totalprice += $product_price; // Add product price to the total price
                                ?>
                            <li class="cart-item d-table">
                                <div class="pro-img d-table-cell align-middle">
                                    <a href="product-details.php">
                                        <img class="img-fluid blur-up lazyload" style="width: 74px;height: 99px;" 
                                        src="<?php echo './image/products/'.$cart_data['product_image']  ;?>" 
                                        data-src="<?php echo './image/products/'.$cart_data['product_image']  ;?>"
                                        alt="not found" title="<?php echo $cart_data['product_name'] ; ?>" />
                                    </a>
                                </div>
                                <div class="item-info pl-4 text-left d-table-cell align-top">
                                    <a href='product-details.php?product_id=<?php echo $cart_data["product_id"]; ?>' >
                                    <?php echo $cart_data['product_name'] ; ?>  </a>
                                    <p class="price"><?php echo "Price Ksh $".$cart_data['product_price'];  ?> </p>
                                </div>
                                <div class="item-right cart-remove d-table-cell align-middle">
                                    <a class="remove" href="./backend/logics/deletecart.php?product_id=<?php echo $cart_data['product_id'] ;?>"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <?php }?>
                        </ul> 
                        <?php } ?>                   
                    </div>

                    <div class="minicart-bottom-actions">
                        <form action="./checkout.php" method="post">
                        <div class="pro-totals d-inline-block w-100">
                            <div class="items mb-1 clearfix">
                                <span class="item subtotal float-left">Subtotal:</span>
                                <span class="price-total float-right"><span class="price"><?php echo $totalprice; ?></span></span>
                            </div>
                            <div class="items mb-1 clearfix">
                                <span class="item shipping float-left">Tax:</span>
                                <span class="price-total float-right"><span class="price">$
                                    <?php $shipping =  $totalprice * .001; echo $shipping; $tax= $totalprice *.0015; ?></span></span>
                            </div>
                            <div class="items mb-1 clearfix">
                                <span class="item shipping float-left">Shipping:</span>
                                <span class="price-total float-right"><span class="price">$
                                    <?php echo $tax ;?></span></span>
                            </div>
                            <div class="items clearfix">
                                <span class="item total float-left">Total:</span>
                                <span class="price-total float-right"><span class="price">$<?php echo $totalprice - $tax - $shipping; ?></span></span>
                            </div>



                        </div>
                        <div class="actions d-inline-block w-100 text-center">
                            
                        <button class="btn btn-secondary d-block font-sm-14" type="submit">Proceed to checkout</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Cart Drawer -->

            <!-- Start Product Cart Added Popup -->
            <div id="open-addtocart-popup" class="addtocart-popup magnific-popup mfp-hide">
                <?php if(isset($_SESSION['email'])){?>
                <div class="addtocart-inner-content text-center">
                    <h4>Added to Cart Successfully</h4>
                    <p class="pro-img"><img class="img-fluid blur-up lazyload" src="assets/images/products/addtocart-popup.jpg" data-src="assets/images/products/addtocart-popup.jpg" alt="image" title="image" /></p>
                    <p class="modal-prod-name mb-1 font-15">Carb Fits Cigarette tiyer</p>
                    <p class="mb-1 font-13">Color: Black</p>
                    <p class="font-13" id="productID"></p>
                    <div class="addcart-total">
                        There are <b>1</b> items in your cart
                        <div class="cart-total mt-2">
                            Total: <b class="price">$113.88</b>
                        </div>
                    </div>
                    <div class="button-action">
                        <button class="btn btn-secondary btn-block mb-3 continue-shopping close-popup">Continue Shopping</button>
                        <a href="cart.php" class="btn btn-primary btn-block view-cart">View Cart</a>
                    </div>
                </div>
                <?php } 
                else {
                ?>
                <div class="addtocart-inner-content text-center">
                    <h4>Adding to Cart Not Possible while logged out</h4>
                    <div class="button-action">
                        <a href="login.php" class="btn btn-primary btn-block view-cart">login</a>
                    </div>
                </div>
                <?php
                }
                ?>
                
            </div>
            <!-- script to add to cart -->
            <script>
                function openDiv(productID) {
                    document.getElementById("").textContent = "product id = "+ productID;

                }
            </script>
            <!-- end cart script -->
            <!-- End Product Cart Added Popup -->

            
            <!-- End Product Quick View Popup -->

            <!-- Start Product Wishlist Added Popup -->
            <div id="open-wishlist-popup" class="wishlist-popup magnific-popup mfp-hide">
                <div class="wishlist-inner-content text-center">
                    <h4>Successfully added in wishlist</h4>
                    <p class="pro-img"><img class="img-fluid blur-up lazyload" src="assets/images/products/addwishlist-popup.jpg" data-src="assets/images/products/addwishlist-popup.jpg" alt="image" title="image" /></p>
                    <p class="modal-prod-name mb-4 font-15">Carb Fits Cigarette tiyer</p>
                    <div class="button-action">
                        <button class="btn btn-secondary btn-block mb-3 continue-shopping close-popup">Continue Shopping</button>
                        <a href="wishlist.php" class="btn btn-primary btn-block view-wishlist">View Wishlist</a>
                    </div>
                </div>
            </div>
            <!-- End Product Wishlist Added Popup -->

            <!-- Start Newsletter Popup -->
            <?php if (!isset($_SESSION['email'])) {
                # code...
             ?>
            <div class="modal fade" id="newsletter-popup" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                            <div class="row no-gutters">
                                <!-- Start Newsletter Content -->
                                <div class="col-12 col-sm-12 col-md-7 d-flex flex-column justify-content-center text-center">
                                    <div class="newsletter-details">
                                        <h2 class="title">Signup</h2>
                                        <p class="sub-title">Receive our latest updates about our latest product  and promotions.</p>
                                        <form action="./register.php" class="needs-validation" >
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="click the arrow to proceed"  />                                   
                                                <a href="./register.php"><button class="btn news-btn" type="submit"><i class="fa fa-long-arrow-right"></i></button></a>
                                            </div>
                                        </form>
                                        <p class="message">We Promise to Only Send you Good Things!</p>
                                        <div class="social-media border-0 p-0 m-0">
                                            <ul class="d-flex flex-row align-items-center justify-content-center text-center">
                                                <li><a href="#"> <i class="ti-facebook"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                                <li><a href="#"><i class="ti-youtube"></i></a></li>
                                                <li><a href="#"><i class="ti-google"></i></a></li>
                                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Newsletter Content -->
                                <!-- Start Newsletter Image -->
                                <div class="col-12 col-sm-12 col-md-5 text-right d-none d-md-block">
                                    <img class="img-fluid blur-up lazyload" src="assets/images/logo/logo.png" data-src="assets/images/logo/logo.png" alt="image" title="Newsletter" />
                                </div>
                                <!-- End Newsletter Image -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            }
            ?>
            <!-- End Newsletter Popup -->

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

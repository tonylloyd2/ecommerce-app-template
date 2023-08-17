<?php
session_start();
require "./backend/connector/conn.php";

$sql_products = "SELECT * FROM product_information ORDER BY RAND()";
$result_products = $conn->query($sql_products); 

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
  }
  
  
}



 include "./header.php";
 
 

 ?>
            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Banner Slidershow Section -->
                <div class="Ymm-slideshow position-relative sections-spacing">

                    <!-- Start Slidershow Banner -->
                    <div class="slideshow slideshow-banner">
                        <?php while ($row = mysqli_fetch_assoc($result_products)) {
                            $image_url = './image/products/'.$row['image_primary']
                         ?>
                        <div class="single-slide slider-height bg-style blur-up lazyload d-flex align-items-center" style="background-image:url('<?php echo $image_url ;?>');">
                            <div class="container slideshow-details">
                                <h3><?php echo $row['item_name'] ?></h3>
                                <p>High Performance & Outstanding Technology Combined</p>
                                <a href="product-details.php?product_id=<?php echo $row['id']; ?>" class="btn btn-primary">Buy now!</a>
                            </div>
                        </div>

                        <?php }?>
                    </div>    
                    <!-- End Slidershow Banner -->
                </div>
                <!-- End Banner Slidershow Section -->

                <!-- Start Collection Tabs Section -->
                <div class="bestseller-section bestseller-style-2 sections-spacing">
                    <div class="container">
                        <div class="tabs-header clearfix">
                            <div class="section-header">
                                <h2>Recommended Products</h2>
                                <p>Browse the collection of our best selling and top interresting products.<br>You’ll definitely find what you are looking for.</p>
                            </div>
                            <ul class="drawer-tabs tabs">
                                <li class="item active" data-tab="tab1"><a>New</a></li>
                                <li class="item" data-tab="tab2"><a>Featured</a></li>
                                <li class="item" data-tab="tab3"><a>Bestseller</a></li>
                            </ul>
                        </div>
                        <!-- Start Tab Container -->
                        <div class="tab-content responsiveTabs">
                            <!-- Start Tab1 -->
                            <h3 class="d_active tab-drawer-heading" data-tab="tab1"><a>Electronics , Clothing , Home and Living , Books , Beauty and Personal Care </a></h3>
                            <div id="tab1" class="drawertab-content">
                                <div class="row row-sp row-eq-height">
                                    <?php   
                                    $categories = array("Electronics", "Clothing", "Home and Living", "Books", "Beauty and Personal Care");
                                    $categories_list = "'" . implode("','", $categories) . "'";
                                    
                                    $query = "SELECT * FROM product_information WHERE category IN ($categories_list)";
                                    $result_products = mysqli_query($conn, $query);

                                        while ($randomProduct = mysqli_fetch_assoc($result_products)) { 
                                            ?>
                                            
                                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" style="
                                            width:290px;height: 500px;
                                            ">
                                                <div class="product-item">
                                                    <div class="product-image-action">
                                                        <div class="product-label">
                                                        
                                                    <span class="label new">New</span>                                                
                                                        <span class="label soldout">
                                                            <script>
                                                                // Generate a random discount percentage between 5% to 40%
                                                                var randomDiscount = Math.floor(Math.random() * 8) * 5 + 5;
                                                                document.write("-" + randomDiscount + "%");
                                                            </script>
                                                        </span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="product-details.php">
                                                                <img class="img-fluid blur-up lazyload"  
                                                                 data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="image" style="width:260px;height:260px" />
                                                                <img class="img-fluid blur-up lazyload product-imghover" src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>"
                                                                 data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="image" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <ul>
                                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.php" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="product-title"><a href="product-details.php"><?php echo $randomProduct["item_name"]; ?></a></h3>
                                                        <h4 class="product-vendor"><?php echo $randomProduct["seller_organization"]; ?></h4>
                                                        <div class="product-starrating">
                                                            <?php
                                                            // Assuming the product rating is stored as a numerical value in the database
                                                            $rating = 5;
                                                            for ($i = 1; $i <= 5; $i++) {
                                                                if ($i <= $rating) {
                                                                    echo '<i class="spr-icon fa fa-star"></i>';
                                                                } else {
                                                                    echo '<i class="spr-icon fa fa-star-o"></i>';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="compare-price">$<?php echo $randomProduct["price"]; ?></span>
                                                            <span class="sale-price">$<?php echo $randomProduct["price"] * .9; ?></span>
                                                            <a href="product-details.php?product_id=<?php echo $randomProduct['id']; ?>">
                                                                <button class="btn btn-primary">View product</button>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       <?php } ?>
                                    
                                </div>
                                <!-- Start Load More Button -->
                                <div class="product-readmore text-center">
                                    <a href="collections.php" class="btn btn-secondary">Load More</a>
                                </div>
                                <!-- End Load More Button -->
                            </div>
                            <!-- End Tab1 -->
                            <!-- Tab2 -->
                            <h3 class="tab-drawer-heading" data-tab="tab3"><a>Phones and Accessories,
                                Shoes,Home and Kitchen,Beauty  Health and hair ,bags</a></h3>
                            <div id="tab3" class="drawertab-content">
                            <div class="row row-sp row-eq-height">
                                    <?php
                                    $categories = array("Phones and Accessories", 
                                    "Shoes", "Home and Kitchen", "Beauty , Health and hair", "bags");
                                    $categories_list = "'" . implode("','", $categories) . "'";
                                    
                                    $query = "SELECT * FROM product_information WHERE category IN ($categories_list)";
                                    $result_products = mysqli_query($conn, $query);
                                        while ($randomProduct = mysqli_fetch_assoc($result_products)) { 
                                            ?>
                                            
                                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" style="
                                            width:290px;height: 500px;
                                            ">
                                                <div class="product-item">
                                                    <div class="product-image-action">
                                                        <div class="product-label">
                                                        
                                                    <span class="label new">New</span>                                                
                                                        <span class="label soldout">
                                                            <script>
                                                                // Generate a random discount percentage between 5% to 40%
                                                                var randomDiscount = Math.floor(Math.random() * 8) * 5 + 5;
                                                                document.write("-" + randomDiscount + "%");
                                                            </script>
                                                        </span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="product-details.php">
                                                                <img class="img-fluid blur-up lazyload"  
                                                                 data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="image" style="width:260px;height:260px" />
                                                                <img class="img-fluid blur-up lazyload product-imghover" src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>"
                                                                 data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="image" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <ul>
                                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.php" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="product-title"><a href="product-details.php"><?php echo $randomProduct["item_name"]; ?></a></h3>
                                                        <h4 class="product-vendor"><?php echo $randomProduct["seller_organization"]; ?></h4>
                                                        <div class="product-starrating">
                                                            <?php
                                                            // Assuming the product rating is stored as a numerical value in the database
                                                            $rating = 5;
                                                            for ($i = 1; $i <= 5; $i++) {
                                                                if ($i <= $rating) {
                                                                    echo '<i class="spr-icon fa fa-star"></i>';
                                                                } else {
                                                                    echo '<i class="spr-icon fa fa-star-o"></i>';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="compare-price">$<?php echo $randomProduct["price"]; ?></span>
                                                            <span class="sale-price">$<?php echo $randomProduct["price"] * .9; ?></span>
                                                            <a href="product-details.php?product_id=<?php echo $randomProduct['id']; ?>">
                                                                <button class="btn btn-primary">View product</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       <?php } ?>
                                    
                                </div><!-- Start Load More Button -->
                                <div class="product-readmore text-center">
                                    <a href="collections.php" class="btn btn-secondary">Load More</a>
                                </div>
                                <!-- End Load More Button -->
                            </div>
                            <!-- End Tab2 -->
                            <!-- Start Tab3 -->
                            <h3 class="tab-drawer-heading" data-tab="tab2"><a>Everything else</a></h3>
                            <div id="tab2" class="drawertab-content">
                            <div class="row row-sp row-eq-height">
                                    <?php
                                    $categories = array("office products", 
                                    "Sports ,fitness and outdoor", "automotive", "Drinks", "Baby , kids and maternity","Computers and accessories","Watches and jewellery");
                                    $categories_list = "'" . implode("','", $categories) . "'";
                                    
                                    $query = "SELECT * FROM product_information WHERE category IN ($categories_list)";
                                    $result_products = mysqli_query($conn, $query);
                                        while ($randomProduct = mysqli_fetch_assoc($result_products)) { 
                                            ?>
                                            
                                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" style="
                                            width:290px;height: 500px;
                                            ">
                                                <div class="product-item">
                                                    <div class="product-image-action">
                                                        <div class="product-label">
                                                        
                                                    <span class="label new">New</span>                                                
                                                        <span class="label soldout">
                                                            <script>
                                                                // Generate a random discount percentage between 5% to 40%
                                                                var randomDiscount = Math.floor(Math.random() * 8) * 5 + 5;
                                                                document.write("-" + randomDiscount + "%");
                                                            </script>
                                                        </span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="product-details.php">
                                                                <img class="img-fluid blur-up lazyload"  
                                                                 data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="image" style="width:260px;height:260px" />
                                                                <img class="img-fluid blur-up lazyload product-imghover" src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>"
                                                                 data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="image" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <ul>
                                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.php" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="product-title"><a href="product-details.php"><?php echo $randomProduct["item_name"]; ?></a></h3>
                                                        <h4 class="product-vendor"><?php echo $randomProduct["seller_organization"]; ?></h4>
                                                        <div class="product-starrating">
                                                            <?php
                                                            // Assuming the product rating is stored as a numerical value in the database
                                                            $rating = 5;
                                                            for ($i = 1; $i <= 5; $i++) {
                                                                if ($i <= $rating) {
                                                                    echo '<i class="spr-icon fa fa-star"></i>';
                                                                } else {
                                                                    echo '<i class="spr-icon fa fa-star-o"></i>';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="compare-price">$<?php echo $randomProduct["price"]; ?></span>
                                                            <span class="sale-price">$<?php echo $randomProduct["price"] * .9; ?></span>
                                                            <a href="product-details.php?product_id=<?php echo $randomProduct['id']; ?>">
                                                                <button class="btn btn-primary">View product</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       <?php } ?>
                                    
                                </div><!-- Start Load More Button -->
                                <div class="product-readmore text-center">
                                    <a href="collections.php" class="btn btn-secondary">Load More</a>
                                </div>
                                <!-- End Load More Button -->
                            </div>
                            <!-- End Tab3 -->
                        </div>
                        <!-- End Tab Container -->
                    </div>
                </div>
                <!-- End Collection Tabs Section -->

                <!-- Start Parallax Banner Section -->
                <div class="parallax-image-section sections-spacing">
                    <div class="parallax-image-banner" style="background-image:url('assets/images/logo/logo.png');">
                        <div class="parallax-details">
                        <div class="message-container">
                            <h3>Discover the Finest Selection of Home & Kitchen Electronics</h3>
                            <h5>Unleash the Power of Modern Technology</h5>
                            <p>Explore our collection of high-quality electronics for your home, kitchen, and beauty needs.</p>
                            <a href="collections.php" class="btn btn-primary">Shop Now</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- End Parallax Banner Section -->

                <!-- Start Testimonial With Blog Section -->
                <div class="testimonial-blog-section sections-spacing">
                    <div class="container">
                        <div class="row">
                            <!-- Start Testimonial Section -->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 testimonial-section">
                                <div class="section-header">
                                    <h2>What Our Customers Say</h2>
                                    <p>Real Customer Experiences</p>
                                </div>
                                <div class="quotes-wrapper text-center">
                                    <!-- Start Quotes Slider -->
                                    <div class="quotes-slider">
                                        <div class="quotes-inner">
                                            <div class="quote-details text-left">
                                                <p class="m-0">"I absolutely love the products from this store. The quality is unmatched and the prices are reasonable."</p>
                                            </div>
                                            <div class="quote-author d-flex flex-row align-items-center text-left clearfix">
                                                <div class="author-img">
                                                    <img class="img-fluid blur-up w-100 lazyload" src="assets/images/testmonial/quote-1.jpg" data-src="assets/images/testmonial/quote-1.jpg" alt="image" title="ALEX LEEMAN" />
                                                </div>
                                                <div class="author-name">
                                                    <p class="m-0 text-uppercase">Alex Leeman</p>
                                                    <p class="cname m-0">Satisfied Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add more testimonial entries here -->
                                    </div>
                                    <!-- End Quotes Slider -->
                                    <a href="#" class="quote-more btn btn-secondary">Read More Testimonials</a>
                                </div>
                            </div>
                            <!-- End Testimonial Section -->

                            <!-- Start Blog Section -->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 blogs-section">
                                <div class="section-header">
                                    <h2>Latest Blog Posts</h2>
                                    <p>Stay Updated with Our Blog</p>
                                </div>
                                <div class="blog-post text-center">
                                    <!-- Start Blogs Slider -->
                                    <div class="blog-post-slider text-left">
                                        <div class="blog-post-inner">
                                            <div class="row no-gutters blog-items clearfix">
                                                <div class="col-12 col-sm-6 blog-img"> 
                                                    <a href="#" class="animate-scale">
                                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/blog/blog-1.jpg" data-src="assets/images/blog/blog-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="col-12 col-sm-6 blog-details">
                                                    <div class="month-day">
                                                        <span class="article-date day">06</span><span class="article-date month">May /</span><span class="article-date year">2019</span> 
                                                    </div>
                                                    <h2 class="article-title">
                                                        <a href="single-post-image.php">Discover the Top 10 Kitchen Gadgets You Must Have</a> 
                                                    </h2>
                                                    <div class="article-author-comments">
                                                        <span class="article-author"><i class="icon font-14 fa fa-user mr-2"></i>by Admin</span>
                                                        <span class="article-comments">12 Comments</span>
                                                    </div>
                                                    <div class="article-content"> 
                                                        If you're looking to upgrade your kitchen tools, check out these essential gadgets that will make cooking a breeze.
                                                    </div>
                                                    <a href="#" class="article-btn btn btn--secondary btn-link">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add more blog post entries here -->
                                    </div>
                                    <!-- End Blogs Slider -->
                                    <a href="#" class="blog-more btn btn-secondary">Explore More Blog Posts</a>
                                </div>
                            </div>
                            <!-- End Blog Section -->
                        </div>
                    </div>
                </div>

                <!-- Start Popular Brand Section -->
                <div class="home-brands home-brands-v2 sections-spacing">
                    <div class="container">
                        <div class="row row-sp brand-slider">
                        <?php 
                        // select all images from product_information table
                        $query_images = "SELECT id,image_primary FROM product_information";
                        $result_images = mysqli_query($conn, $query_images);

                        while ($row_image = mysqli_fetch_assoc($result_images)) {
                            ?>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6" s>
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" style="width: 170px; height: 100px;"
                                  src="<?php echo "./image/products/".$row_image['image_primary'] ?>" data-src="<?php echo "./image/products/".$row_image['image_primary'] ?>" alt="image" title="image" /></a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- End Popular Brand Section -->
                
                <!-- Start Information Section -->
                <div class="information-v2">
                    <div class="container">
                        <div class="row">
                            <div class="info-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="info-area d-flex flex-column align-items-center text-center">
                                    <div class="info-icon">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/icons/free-shipping-v2.png" data-src="assets/images/icons/free-shipping-v2.png" alt="image" title="image" />
                                    </div>
                                    <div class="info-details">
                                        <h5>Free Worldwide Shipping</h5>
                                        <span>On all orders over $99.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="info-area d-flex flex-column align-items-center text-center">
                                    <div class="info-icon">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/icons/money-back-v2.png" data-src="assets/images/icons/money-back-v2.png" alt="image" title="image" />
                                    </div>
                                    <div class="info-details">
                                        <h5>Money Back Gurantee</h5>
                                        <span>7 days money back gutarantee</span>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="info-area d-flex flex-column align-items-center text-center">
                                    <div class="info-icon">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/icons/support-24-v2.png" data-src="assets/images/icons/support-24-v2.png" alt="image" title="image" />
                                    </div>
                                    <div class="info-details">
                                        <h5>Support 24/7</h5>
                                        <span>We support 24/24h on day</span>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="info-area d-flex flex-column align-items-center text-center">
                                    <div class="info-icon">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/icons/secure-payment-v2.png" data-src="assets/images/icons/secure-payment-v2.png" alt="image" title="image" />
                                    </div>
                                    <div class="info-details">
                                        <h5>Secure Payment</h5>
                                        <span>Safe shopping guarantee</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Information Section -->

            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
            <?php 
            include './footer.php';
            ?>

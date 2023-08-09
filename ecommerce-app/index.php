<?php
session_start();
require "./backend/connector/conn.php";

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
  }
  
  
}



 include "./header.php" ?>
            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Banner Slidershow Section -->
                <div class="Ymm-slideshow position-relative sections-spacing">
                    <!-- Start YMM Box -->
                    <div class="ymm-search-box horizontal">
                        <div class="container">
                            <form action="#" class="row ymm-search d-flex align-items-center">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 ymm-title">
                                    <h1 class="mb-0">Shop By Parts</h1>
                                    <p class="d-none">Quick & Easy Shop by Parts</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-10 ymm-formFields">
                                    <div class="row">
                                        <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                            <select class="select2 form-control" id="sel1" name="sellist1">
                                                <option value="" disabled selected>Select Year</option>
                                                <option value="1">2019</option>
                                                <option value="2">2018</option>
                                                <option value="3">2017</option>
                                                <option value="3">2016</option>
                                                <option value="3">2015</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                            <select class="select2 form-control" id="sel2" name="sellist2">
                                                <option value="" disabled selected>Select Make</option>
                                                <option value="1">Audi</option>
                                                <option value="2">Ford</option>
                                                <option value="3">Hyundai</option>
                                                <option value="3">TATA</option>
                                                <option value="3">Volvo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                            <select class="select2 form-control" id="sel3" name="sellist3">
                                                <option value="" disabled selected>Select Model</option>
                                                <option value="1">Ford Pinto</option>
                                                <option value="2">Honda Fitta</option>
                                                <option value="3">Hyundai Santa Fe</option>
                                                <option value="3">Mazda Moco</option>
                                                <option value="3">Skoda Laura</option>
                                            </select>
                                        </div>
                                        <div class="actions-btn col-12 col-sm-12 col-md-2 col-lg-1">
                                            <button class="btn btn-primary w-100">Find</button>
                                            <button class="btn btn-secondary w-50 d-none">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Start YMM Box -->

                    <!-- Start Slidershow Banner -->
                    <div class="slideshow slideshow-banner">
                        <div class="single-slide slider-height bg-style blur-up lazyload d-flex align-items-center" style="background-image:url(assets/images/slider/banner-v2-1.jpg);">
                            <div class="container slideshow-details">
                                <h3>Buy With Confidence Autoparts</h3>
                                <p>High Performance & Outstanding Technology Combined</p>
                                <a href="shop-grid-fullwidth.php" class="btn btn-primary">Buy now!</a>
                            </div>
                        </div>
                        <div class="single-slide slider-height bg-style blur-up lazyload d-flex align-items-center" style="background-image:url(assets/images/slider/banner-v2-1.jpg);">
                            <div class="container slideshow-details">
                                <h3>Perfect choice for tyres & wheels</h3>
                                <p>High Performance & Outstanding Technology Combined</p>
                                <a href="shop-grid-fullwidth.php" class="btn btn-primary">Buy now!</a>
                            </div>
                        </div>
                        <div class="single-slide slider-height bg-style blur-up lazyload d-flex align-items-center" style="background-image:url(assets/images/slider/banner-v2-1.jpg);">
                            <div class="container slideshow-details">
                                <h3>Faster & Secure Find Your Auto Parts</h3>
                                <p>High Performance & Outstanding Technology Combined</p>
                                <a href="shop-grid-fullwidth.php" class="btn btn-primary">Buy now!</a>
                            </div>
                        </div>
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
                            <h3 class="d_active tab-drawer-heading" data-tab="tab1"><a>Interior</a></h3>
                            <div id="tab1" class="drawertab-content">
                                <div class="row row-sp row-eq-height">
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label new">New</span>
                                                    <span class="label sale">Sale</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload primary-img" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover secondary-img" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="product-counter clearfix" data-countdown="2024/10/01"></div>
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
                                                <h3 class="product-title"><a href="product-details.php">Donec pede justo fringilla</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$125.22</span>
                                                    <span class="sale-price">$113.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label soldout">-20%</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Aenean commodo ligula</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$75.20</span>
                                                    <span class="sale-price">$70.15</span>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label soldout">Sold Out</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Sociosqu facilisi senectus</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$133.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label hot">Hot</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Nullam sceleri sociis</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$145.05</span>
                                                    <span class="sale-price">$135.33</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Load More Button -->
                                <div class="product-readmore text-center">
                                    <a href="shop-grid-fullwidth.php" class="btn btn-secondary">Load More</a>
                                </div>
                                <!-- End Load More Button -->
                            </div>
                            <!-- End Tab1 -->
                            <!-- Tab2 -->
                            <h3 class="tab-drawer-heading" data-tab="tab2"><a>Engine</a></h3>
                            <div id="tab2" class="drawertab-content">
                                <div class="row row-sp row-eq-height">
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Pellentesque habitant morbi</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$113.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label soldout">-20%</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Neque porro dolorem</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-half-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$75.20</span>
                                                    <span class="sale-price">$70.15</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Praesent convallis scelerisque</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$133.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Aliquam faucibus sem nec</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-half-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$135.33</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Load More Button -->
                                <div class="product-readmore text-center">
                                    <a href="shop-grid-fullwidth.php" class="btn btn-secondary">Load More</a>
                                </div>
                                <!-- End Load More Button -->
                            </div>
                            <!-- End Tab2 -->
                            <!-- Start Tab3 -->
                            <h3 class="tab-drawer-heading" data-tab="tab3"><a>Suspension</a></h3>
                            <div id="tab3" class="drawertab-content">
                                <div class="row row-sp row-eq-height">
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label new">New</span>
                                                    <span class="label sale">Sale</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Stockvault oil plastic</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$125.22</span>
                                                    <span class="sale-price">$113.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Aliquam tincidunt mauris</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$70.15</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label soldout">Sold Out</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Lorem ipsum dolor sit amet</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$133.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-image">
                                                    <a href="product-details.php">
                                                        <img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="assets/images/products/product-1-1.jpg" data-src="assets/images/products/product-1-1.jpg" alt="image" title="image" />
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
                                                <h3 class="product-title"><a href="product-details.php">Ut imperdiet enim feugiat</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$135.33</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Load More Button -->
                                <div class="product-readmore text-center">
                                    <a href="shop-grid-fullwidth.php" class="btn btn-secondary">Load More</a>
                                </div>
                                <!-- End Load More Button -->
                            </div>
                            <!-- End Tab3 -->
                        </div>
                        <!-- End Tab Container -->
                    </div>
                </div>
                <!-- End Collection Tabs Section -->

                <!-- Start Classic Collection Section -->
                <div class="classic-collection-section sections-spacing">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="classic-item collection1">
                                    <div class="item-img">
                                        <a href="shop-grid-fullwidth.php" class="animate-scale zoom-hover-effect"><img class="img-fluid blur-up lazyload w-100" src="assets/images/collection/classic-image-1.jpg" data-src="assets/images/collection/classic-image-1.jpg" alt="image" title="image" /></a>
                                    </div>
                                    <div class="item-content text-center">
                                        <h3>Replacement Parts</h3>
                                        <p>Get information on our latest products, exclusive offers and latest fashion.</p>
                                        <a href="shop-grid-fullwidth.php" class="btn btn-link"> Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="classic-item collection2">
                                    <div class="item-content text-center">
                                        <h3>Performance Wheels</h3>
                                        <p>Great Shopify Theme for Online Auto Parts Stores.</p>
                                        <a href="shop-grid-fullwidth.php" class="btn btn-link"> Explore Now</a>
                                    </div>
                                    <div class="item-img">
                                        <a href="shop-grid-fullwidth.php" class="animate-scale zoom-hover-effect"><img class="img-fluid blur-up lazyload w-100" src="assets/images/collection/classic-image-1.jpg" data-src="assets/images/collection/classic-image-1.jpg" alt="image" title="image" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex flex-row align-items-center">
                                <div class="classic-item collection3 text-center">
                                    <div class="item-content">
                                        <h3>Guides &amp; Articles</h3>
                                        <p>Useful articles fast to read and guides easy to understand written by mechanics and car enthusiasts to turn your shopping experience with POSH into a pleasure.</p>
                                        <a href="shop-grid-fullwidth.php" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Classic Collection Section -->

                <!-- Start About Us Video Section -->
                <div class="aboutus-section sections-spacing">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-7 d-flex flex-row align-items-center">
                                <div class="aboutus-details">
                                    <h3>About Autoparts</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull laboris aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                                    <p>Non proident sunt ind culpa qudesa officia deserunt mollit anim est laborum. Sed per unde omnis iste natus error sit voluptatem accusantium doloremque laudantium tom eaque ipsa quae ab illo inventore veritatis architecto.</p>
                                    <a href="about-us.php" class="btn btn-secondary btn-small"> Read More</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-5 d-flex flex-row align-items-center">
                                <div class="aboutus-video">
                                    <div id="play-youtube-video" class="position-relative d-block zoom-hover-effect">
                                        <img class="img-fluid blur-up lazyload w-100" src="assets/images/others/video-img.jpg" data-src="assets/images/others/video-img.jpg" alt="image" title="image" />
                                        <a href="#open-video-popup" class="vid-icon open-video-popup"><img class="img-fluid opacity1" src="assets/images/icons/video-icon.png" alt="image" title="Click Me" /></a>
                                    </div>
                                    <div id="open-video-popup" class="youtube-video-popup magnific-popup mfp-hide">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="about:blank" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About Us Section -->

                <!-- Start Collection List Section -->
                <div class="collection-list-section sections-spacing">
                    <div class="container">
                        <div class="section-header">
                            <h2>Top Selling Collections</h2>
                            <p>Find your perfect replacement auto parts</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="collection-item">
                                    <a class="collection-img animate-scale zoom-hover-effect mb-3">
                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/collection/collection-small1.jpg" data-src="assets/images/collection/collection-small1.jpg" alt="image" title="image" />
                                    </a>
                                    <div class="collection-details">
                                        <h3>Interior Accessories</h3>
                                        <ul>
                                            <li class="mb-1"><a href="#">Safety</a></li>
                                            <li class="mb-1"><a href="#">Seat Covers And Seats</a></li>
                                            <li class="mb-1"><a href="#">Knobs</a>, <a href="#">Levers And Door</a></li>
                                            <li class="mb-1"><a href="#">Stereo</a>, <a href="#">Speakers And Audio</a></li>
                                        </ul>
                                        <a href="collections.php" class="btn btn-secondary" title="Interior Accessories">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="collection-item">
                                    <a class="collection-img animate-scale zoom-hover-effect mb-3">
                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/collection/collection-small1.jpg" data-src="assets/images/collection/collection-small1.jpg" alt="image" title="image" />
                                    </a>
                                    <div class="collection-details">
                                        <h3>Exterior Accessories</h3>
                                        <ul>
                                            <li class="mb-1"><a href="#">Front End Covers And Hood</a></li>
                                            <li class="mb-1"><a href="#">Snow Chains</a></li>
                                            <li class="mb-1"><a href="#">Safety And Security</a></li>
                                            <li class="mb-1"><a href="#">Sun / Heat Protection</a></li>
                                        </ul>
                                        <a href="collections.php" class="btn btn-secondary" title="Interior Accessories">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="collection-item">
                                    <a class="collection-img animate-scale zoom-hover-effect mb-3">
                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/collection/collection-small1.jpg" data-src="assets/images/collection/collection-small1.jpg" alt="image" title="image">
                                    </a>
                                    <div class="collection-details">
                                        <h3>Tools & Equipment</h3>
                                        <ul>
                                            <li class="mb-1"><a href="#">Front End Covers And Hood</a></li>
                                            <li class="mb-1"><a href="#">Snow Chains</a></li>
                                            <li class="mb-1"><a href="#">Safety And Security</a></li>
                                            <li class="mb-1"><a href="#">Sun / Heat Protection</a></li>
                                        </ul>
                                        <a href="collections.php" class="btn btn-secondary" title="Interior Accessories">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="collection-item">
                                    <a class="collection-img animate-scale zoom-hover-effect mb-3">
                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/collection/collection-small1.jpg" data-src="assets/images/collection/collection-small1.jpg" alt="image" title="image">
                                    </a>
                                    <div class="collection-details">
                                        <h3>Performance Products</h3>
                                        <ul>
                                            <li class="mb-1"><a href="#">Exhaust/Emission Control</a></li>
                                            <li class="mb-1"><a href="#">Fuel Systems</a></li>
                                            <li class="mb-1"><a href="#">Heating And Cooling</a></li>
                                            <li class="mb-1"><a href="#">Plumbing / Hosing</a></li>
                                        </ul>
                                        <a href="collections.php" class="btn btn-secondary" title="Interior Accessories">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="collection-item">
                                    <a class="collection-img animate-scale zoom-hover-effect mb-3">
                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/collection/collection-small1.jpg" data-src="assets/images/collection/collection-small1.jpg" alt="image" title="image">
                                    </a>
                                    <div class="collection-details">
                                        <h3>Lighting</h3>
                                        <ul>
                                            <li class="mb-1"><a href="#">Exterior Lights</a></li>
                                            <li class="mb-1"><a href="#">Fog Lights</a></li>
                                            <li class="mb-1"><a href="#">Headlights</a></li>
                                            <li class="mb-1"><a href="#">Tail Lights</a></li>
                                        </ul>
                                        <a href="collections.php" class="btn btn-secondary" title="Interior Accessories">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="collection-item">
                                    <a class="collection-img animate-scale zoom-hover-effect mb-3">
                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/collection/collection-small1.jpg" data-src="assets/images/collection/collection-small1.jpg" alt="image" title="image">
                                    </a>
                                    <div class="collection-details">
                                        <h3>Brakes, Suspension & Steering</h3>
                                        <ul>
                                            <li class="mb-1"><a href="#">Front End Covers And Hood</a></li>
                                            <li class="mb-1"><a href="#">Snow Chains</a></li>
                                            <li class="mb-1"><a href="#">Safety And Security</a></li>
                                            <li class="mb-1"><a href="#">Sun / Heat Protection</a></li>
                                        </ul>
                                        <a href="collections.php" class="btn btn-secondary" title="Interior Accessories">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Collection List Section -->

                <!-- Start Parallax Banner Section -->
                <div class="parallax-image-section sections-spacing">
                    <div class="parallax-image-banner" style="background-image:url('./assets/images/others/parrallax-bg.jpg');">
                        <div class="parallax-details">
                            <div class="container">
                                <h3>BUILT FOR THE <b>Auto parts</b> theme BEST,</h3>
                                <h5>BY THE Your Business BEST.</h5>
                                <p>Our Responsive themes &amp; templates</p>
                                <a href="shop-grid-fullwidth.php" class="btn btn-primary">Shop Now</a>
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
                                    <h2>Testimonials</h2>
                                    <p>Happy Customers</p>
                                </div>
                                <div class="quotes-wrapper text-center">
                                    <!-- Start Quotes Slider -->
                                    <div class="quotes-slider">
                                        <div class="quotes-inner">
                                            <div class="quote-details text-left">
                                                <p class="m-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                                            </div>
                                            <div class="quote-author d-flex flex-row align-items-center text-left clearfix">
                                                <div class="author-img">
                                                    <img class="img-fluid blur-up w-100 lazyload" src="assets/images/testmonial/quote-1.jpg" data-src="assets/images/testmonial/quote-1.jpg" alt="image" title="ALEX LEEMAN" />
                                                </div>
                                                <div class="author-name">
                                                    <p class="m-0 text-uppercase">Alex Leeman</p>
                                                    <p class="cname m-0">Happy Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quotes-inner">
                                            <div class="quote-details text-left">
                                                <p class="m-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            </div>
                                            <div class="quote-author d-flex flex-row align-items-center text-left clearfix">
                                                <div class="author-img">
                                                    <img class="img-fluid blur-up w-100 lazyload" src="assets/images/testmonial/quote-1.jpg" data-src="assets/images/testmonial/quote-1.jpg" alt="image" title="ALEX LEEMAN" />
                                                </div>
                                                <div class="author-name">
                                                    <p class="m-0 text-uppercase">Lorem Ipsum</p>
                                                    <p class="cname m-0">World Best Store</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quotes-inner">
                                            <div class="quote-details text-left">
                                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                            </div>
                                            <div class="quote-author d-flex flex-row align-items-center text-left clearfix">
                                                <div class="author-img">
                                                    <img class="img-fluid blur-up w-100 lazyload" src="assets/images/testmonial/quote-1.jpg" data-src="assets/images/testmonial/quote-1.jpg" alt="image" title="ALEX LEEMAN" />
                                                </div>
                                                <div class="author-name">
                                                    <p class="m-0 text-uppercase">Paige Turner</p>
                                                    <p class="cname m-0">Speed wagon</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quotes Slider -->
                                    <a href="#" class="quote-more btn btn-secondary">View More</a>
                                </div>
                            </div>
                            <!-- End Testimonial Section -->

                            <!-- Start Blog Section -->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 blogs-section">
                                <div class="section-header">
                                    <h2>Latest blog posts</h2>
                                    <p>The new blog today</p>
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
                                                        <a href="single-post-image.php">Volut Nec Ullam Eget risus Aliquam tincidunt mauris eu</a> 
                                                    </h2>
                                                    <div class="article-author-comments">
                                                        <span class="article-author"><i class="icon font-14 fa fa-user mr-2"></i>by User</span>
                                                        <span class="article-comments">2 Comments</span>
                                                    </div>
                                                    <div class="article-content"> 
                                                        Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. vitae quam. Vivamus et nunc. Nunc...
                                                    </div>
                                                    <a href="#" class="article-btn btn btn--secondary btn-link">Read more </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post-inner">
                                            <div class="row no-gutters blog-items clearfix">
                                                <div class="col-12 col-sm-6 blog-img"> 
                                                    <a href="#" class="animate-scale">
                                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/blog/blog-1.jpg" data-src="assets/images/blog/blog-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="col-12 col-sm-6 blog-details">
                                                    <div class="month-day">
                                                        <span class="article-date day">17</span><span class="article-date month">May /</span><span class="article-date year">2019</span> 
                                                    </div>
                                                    <h2 class="article-title">
                                                        <a href="single-post-image.php">Aliquam tincidunt mauris the leap into electronic</a> 
                                                    </h2>
                                                    <div class="article-author-comments">
                                                        <span class="article-author"><i class="icon font-14 fa fa-user mr-2"></i>by User</span>
                                                        <span class="article-comments">1 Comments</span>
                                                    </div>
                                                    <div class="article-content">
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...
                                                    </div>
                                                    <a href="#" class="article-btn btn btn--secondary btn-link">Read more </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post-inner">
                                            <div class="row no-gutters blog-items clearfix">
                                                <div class="col-12 col-sm-6 blog-img"> 
                                                    <a href="#" class="animate-scale">
                                                        <img class="img-fluid blur-up w-100 lazyload" src="assets/images/blog/blog-1.jpg" data-src="assets/images/blog/blog-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="col-12 col-sm-6 blog-details">
                                                    <div class="month-day">
                                                        <span class="article-date day">21</span><span class="article-date month">May /</span><span class="article-date year">2019</span> 
                                                    </div>
                                                    <h2 class="article-title">
                                                        <a href="single-post-image.php">Loremous Comodous slightly believable - Trending</a> 
                                                    </h2>
                                                    <div class="article-author-comments">
                                                        <span class="article-author"><i class="icon font-14 fa fa-user mr-2"></i>by User</span>
                                                        <span class="article-comments">4 Comments</span>
                                                    </div>
                                                    <div class="article-content"> 
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have alteration...
                                                    </div>
                                                    <a href="#" class="article-btn btn btn--secondary btn-link">Read more </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Blogs Slider -->
                                    <a href="#" class="blog-more btn btn-secondary">View More</a>
                                </div>
                            </div>
                            <!-- End Blog Section -->
                        </div>
                    </div>
                </div>
                <!-- End Testimonial With Blog Section -->

                <!-- Start Popular Brand Section -->
                <div class="home-brands home-brands-v2 sections-spacing">
                    <div class="container">
                        <div class="row row-sp brand-slider">
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="assets/images/brand/brand1.jpg" data-src="assets/images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Popular Brand Section -->

                <!-- Start Instagram Section -->
                <div class="instagram-section sections-spacing">
                    <div class="container">
                        <div class="section-header">
                            <h2>#follow us on Instagram</h2>
                            <p>Instagram Photo Gallery</p>
                        </div>
                        <div class="row no-gutters instagram-grid">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <a class="instagram-item" href="#">
                                    <img class="img-fluid blur-up lazyload" src="assets/images/instagram/instagram1.jpg" data-src="assets/images/instagram/instagram1.jpg" alt="image" title="image" />
                                    <!-- Start Instagram Overlay -->
                                    <div class="insta-overlay"> 
                                        <div class="insta-wishs">
                                            <i class="icon wish-icon mr-2 ti-heart"></i><span class="wish-text">0</span>
                                        </div> 
                                        <div class="insta-comments"> 
                                            <i class="icon comment-icon mr-2 ti-comment-alt"></i><span class="comment-text">0</span>
                                        </div> 
                                    </div>
                                    <!-- End Instagram Overlay -->
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <a class="instagram-item" href="#">
                                    <img class="img-fluid blur-up lazyload" src="assets/images/instagram/instagram1.jpg" data-src="assets/images/instagram/instagram1.jpg" alt="image" title="image" />
                                    <!-- Start Instagram Overlay -->
                                    <div class="insta-overlay"> 
                                        <div class="insta-wishs">
                                            <i class="icon wish-icon mr-2 ti-heart"></i><span class="wish-text">0</span>
                                        </div> 
                                        <div class="insta-comments"> 
                                            <i class="icon comment-icon mr-2 ti-comment-alt"></i><span class="comment-text">0</span>
                                        </div> 
                                    </div>
                                    <!-- End Instagram Overlay -->
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <a class="instagram-item" href="#">
                                    <img class="img-fluid blur-up lazyload" src="assets/images/instagram/instagram1.jpg" data-src="assets/images/instagram/instagram1.jpg" alt="image" title="image" />
                                    <!-- Start Instagram Overlay -->
                                    <div class="insta-overlay"> 
                                        <div class="insta-wishs">
                                            <i class="icon wish-icon mr-2 ti-heart"></i><span class="wish-text">0</span>
                                        </div> 
                                        <div class="insta-comments"> 
                                            <i class="icon comment-icon mr-2 ti-comment-alt"></i><span class="comment-text">0</span>
                                        </div> 
                                    </div>
                                    <!-- End Instagram Overlay -->
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <a class="instagram-item" href="#">
                                    <img class="img-fluid blur-up lazyload" src="assets/images/instagram/instagram1.jpg" data-src="assets/images/instagram/instagram1.jpg" alt="image" title="image" />
                                    <!-- Start Instagram Overlay -->
                                    <div class="insta-overlay"> 
                                        <div class="insta-wishs">
                                            <i class="icon wish-icon mr-2 ti-heart"></i><span class="wish-text">0</span>
                                        </div> 
                                        <div class="insta-comments"> 
                                            <i class="icon comment-icon mr-2 ti-comment-alt"></i><span class="comment-text">0</span>
                                        </div> 
                                    </div>
                                    <!-- End Instagram Overlay -->
                                </a>
                            </div>
                            <a href="#" class="btn btn-secondary view-gallery">View Gallery</a>
                        </div>
                    </div>
                </div>
                <!-- End Instagram Section -->

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
            <footer class="footer bg-white footer-v2">
                <!-- Start Footer Topbar -->
                <div class="footer-top p-0 clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 newsletter-form">
                                <div class="footer-newsletter">
                                    <h3>Sign up to our Newsletter<br> and receive 10% off your first order!</h3>
                                    <form action="#" class="needs-validation" method="post">
                                        <div class="form-group m-0 position-relative">
                                            <input type="text" class="form-control" placeholder="Enter your email address..." required />
                                            <button class="btn btn-primary" type="submit">Subscribe<i class="icon fa fa-chevron-right"></i></button>
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

            <!-- Start Product Cart Added Popup -->
            <div id="open-addtocart-popup" class="addtocart-popup magnific-popup mfp-hide">
                <div class="addtocart-inner-content text-center">
                    <h4>Added to Cart Successfully</h4>
                    <p class="pro-img"><img class="img-fluid blur-up lazyload" src="assets/images/products/addtocart-popup.jpg" data-src="assets/images/products/addtocart-popup.jpg" alt="image" title="image" /></p>
                    <p class="modal-prod-name mb-1 font-15">Carb Fits Cigarette tiyer</p>
                    <p class="mb-1 font-13">Color: Black</p>
                    <p class="font-13">Quantity: 1</p>
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
            </div>
            <!-- End Product Cart Added Popup -->

            <!-- Start Product Quick View Popup -->
            <div id="open-quickview-popup" class="quickview-popup magnific-popup mfp-hide">
                <div class="quickview-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="product-single-photo slider thumbnails-single">
                                <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                                <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                                <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                                <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                                <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                            </div>
                            <div class="product-thumb slider thumbnail-items">
                                <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                                <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                                <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                                <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                                <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="profuct-info">
                                <h3 class="product-title">Quick View Popup Product</h3>
                                <div class="pro-revi-arrow clearfix">
                                    <div class="product-starrating pull-left">
                                        <i class="spr-icon fa fa-star"></i>
                                        <i class="spr-icon fa fa-star"></i>
                                        <i class="spr-icon fa fa-star"></i>
                                        <i class="spr-icon fa fa-star-o"></i>
                                        <i class="spr-icon fa fa-star-o"></i>
                                        <span>5 Reviews</span>
                                    </div>
                                    <div class="pro-arrow pull-right">
                                        <a class="pro-next" href="product-details.php"><i class="ti-angle-left"></i></a>
                                        <a class="pro-prev" href="product-details-classic.php"><i class="ti-angle-right"></i></a>
                                    </div>
                                </div>
                                <ul class="row pro-info-list">
                                    <li class="col-12 col-md-4 col-sm-4 instock text-sm-left">In Stock</li>
                                    <li class="col-12 col-md-4 col-sm-4 vendor text-sm-center"><b>Vendor:</b> Autoparts</li>
                                    <li class="col-12 col-md-4 col-sm-4 sku text-sm-right"><b>SKU:</b> 19115-rdxs</li>
                                </ul>
                            </div>
                            <ul class="d-sm-flex flex-sm-row align-items-sm-center product-price-info">
                                <li class="product-price m-0"><span class="compare-price">$499.00</span><span class="sale-price">$399.00</span></li>
                                <li class="save-price">You Save <span class="save-count">$100.00 (10%)</span></li>
                            </ul>
                            <p class="sold-in-last"><span class="align-middle">10 sold in last 20 hours</span></p>
                            <ul class="d-flex flex-column pro-details">
                                <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                                <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Maecenas vehicula lorem et facilisis eleifend.</li>
                                <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Quisque mattis augue quis risus euismod pharetra.</li>
                                <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Curabitur bibendum massa vitae risus lacinia rutrum.</li>
                            </ul>
                            <div class="product-color">
                                <p>Color: <b>RED</b></p>
                                <ul class="d-flex flex-row align-items-center color-item" data-toggle="buttons">
                                    <li class="btn red active" data-toggle="tooltip" data-placement="top" title="red"><span></span></li>
                                    <li class="btn navy" data-toggle="tooltip" data-placement="top" title="navy"><span></span></li>
                                    <li class="btn light-blue" data-toggle="tooltip" data-placement="top" title="light-blue"><span></span></li>
                                    <li class="btn green" data-toggle="tooltip" data-placement="top" title="green"><span></span></li>
                                    <li class="btn yellow" data-toggle="tooltip" data-placement="top" title="yellow"><span></span></li>
                                </ul>
                            </div>
                            <div class="product-size">
                                <p>Color: <b>XL</b></p>
                                <ul class="d-flex flex-row align-items-center color-item" data-toggle="buttons">
                                    <li class="btn x active" data-toggle="tooltip" data-placement="top" title="x"><span>X</span></li>
                                    <li class="btn xl" data-toggle="tooltip" data-placement="top" title="xl"><span>XL</span></li>
                                    <li class="btn m" data-toggle="tooltip" data-placement="top" title="m"><span>M</span></li>
                                    <li class="btn s" data-toggle="tooltip" data-placement="top" title="s"><span>S</span></li>
                                    <li class="btn xxl" data-toggle="tooltip" data-placement="top" title="xxl"><span>XXL</span></li>
                                </ul>
                            </div>
                            <div class="addToBox d-sm-flex flex-sm-row">
                                <div class="product-form-item product-quantity">
                                    <div class="qty-box">
                                        <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                        <input type="text" name='quantity' value='1' class="qty-input" />                             
                                        <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="product-form-item product-submit btn-block">
                                    <a href="#open-addtocart-popup" class="btn btn-primary btn-block product-btn-cart open-addtocart-popup">Add to Cart</a>
                                </div>
                            </div>
                            <div class="wishlistOuter">
                                <a href="#open-wishlist-popup" class="open-wishlist-popup"><i class="ti-heart mr-2"></i> Add To Wishlist</a>
                            </div>
                            <div class="social-media">
                                <ul class="d-flex flex-row">
                                    <li><span>Share:</span></li>
                                    <li><a href="#" title="Facebook"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#" title="Google Plus"><i class="ti-google"></i></a></li>
                                    <li><a href="#" title="Pinterest"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#" title="Email"><i class="ti-email"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="modal fade" id="newsletter-popup" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                            <div class="row no-gutters">
                                <!-- Start Newsletter Content -->
                                <div class="col-12 col-sm-12 col-md-7 d-flex flex-column justify-content-center text-center">
                                    <div class="newsletter-details">
                                        <h2 class="title">Newsletter Signup</h2>
                                        <p class="sub-title">Receive our latest updates about our latest product  and promotions.</p>
                                        <form action="#" class="needs-validation" novalidate>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter your email address..." required />                                   
                                                <button class="btn news-btn" type="submit"><i class="fa fa-long-arrow-right"></i></button>
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
                                    <img class="img-fluid blur-up lazyload" src="assets/images/others/newsletter.jpg" data-src="assets/images/others/newsletter.jpg" alt="image" title="Newsletter" />
                                </div>
                                <!-- End Newsletter Image -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


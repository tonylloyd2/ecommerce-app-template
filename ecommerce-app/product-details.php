<?php
session_start();
require "./backend/connector/conn.php";

$sql_products = "SELECT * FROM product_information ORDER BY RAND()";
$result_products = $conn->query($sql_products); 
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql_product_single = "SELECT * FROM product_information where id = '$product_id'";
    $result_product_single = $conn->query($sql_product_single); 
    if ($result_product_single->num_rows === 1) {
        // User with the given email exists
        $product_single = $result_product_single->fetch_assoc();

    }

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
  }
  
  
}



 include "./header.php";
 
 

 ?>
            <!-- Start Main Content -->
            <main class="main-content">
                
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs classic-breadcrumbs text-left">
                    <div class="container">
                        <h1 class="d-none"><?php echo $product_single['item_name'] ?> </h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $product_single['item_name'] ?></li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Single Product Detail -->
                <div class="product-single product-detail-classic">
                    <div class="container">
                        <div class="row">
                            <!-- Start Product Store Features -->
                            <div class="col-12 col-sm-12 col-md-6 product-store-features">
                                <!-- Start Product Thumb Slider -->
                                <div class="verticle-thumb-product d-flex pro-verticle-items clearfix">
                                    <!-- Start Product Thumb Images -->
                                    <div class="product-thumb slider thumbnail-vertical-items">
                                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="<?php echo "./image/products/".$product_single['image2'] ?>" data-src="<?php echo "./image/products/".$product_single['image2'] ?>" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="<?php echo "./image/products/".$product_single['image3'] ?>" data-src="<?php echo "./image/products/".$product_single['image3'] ?>" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="<?php echo "./image/products/".$product_single['image4'] ?>" data-src="<?php echo "./image/products/".$product_single['image4'] ?>" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="<?php echo "./image/products/".$product_single['image5'] ?>" data-src="<?php echo "./image/products/".$product_single['image5'] ?>" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="<?php echo "./image/products/".$product_single['image6'] ?>" data-src="<?php echo "./image/products/".$product_single['image6'] ?>" alt="image" title="image" /></div>
                                    </div>
                                    <!-- End Product Thumb Images -->

                                    <div class="product-img-thumb pro-verticle-thumbnails">
                                        <!-- Start Product Label -->
                                        <div class="product-label">
                                            <span class="label new">New</span>
                                            <span class="label sale">Sale</span>
                                        </div>
                                        <!-- End Product Label -->

                                        <!-- Start Product Single Images -->
                                        <div class="product-single-photo slider thumbnails-vertical-single">
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" style="width: 430px;height:500px "  src="<?php echo "./image/products/".$product_single['image2'] ?>" data-src="<?php echo "./image/products/".$product_single['image2'] ?>" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" style="width: 430px;height:500px " src="<?php echo "./image/products/".$product_single['image3'] ?>" data-src="<?php echo "./image/products/".$product_single['image3'] ?>" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" style="width: 430px;height:500px " src="<?php echo "./image/products/".$product_single['image4'] ?>" data-src="<?php echo "./image/products/".$product_single['image4'] ?>" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" style="width: 430px;height:500px " src="<?php echo "./image/products/".$product_single['image5'] ?>" data-src="<?php echo "./image/products/".$product_single['image5'] ?>" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" style="width: 430px;height:500px " src="<?php echo "./image/products/".$product_single['image6'] ?>" data-src="<?php echo "./image/products/".$product_single['image6'] ?>" alt="image" title="image" />
                                            </div>
                                        </div>
                                        <!-- End Product Single Images -->

                                        <!-- Start Product Action -->
                                        <div class="product-gallery-actions">
                                            <a href="#open-video-popup" class="action-btn video-popup open-video-popup"><i class="ti-control-play"></i></a>
                                            <a id="lightgallery-btn" class="action-btn gallery-popup lightgallery-btn"><i class="ti-zoom-in"></i></a>
                                        </div>
                                        <!-- End Product Action -->

                                        <!-- Start Product Details Video Popup -->
                                        <div id="open-video-popup" class="youtube-video-popup magnific-popup mfp-hide">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="about:blank" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                        <!-- End Product Details Video Popup -->
                                    </div>
                                </div>
                                <!-- End Product Thumb Slider -->

                                <!-- Start Store Features -->
                                <div class="store-features clearfix">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="info-area d-table clearfix">
                                                <div class="info-icon d-table-cell align-middle">
                                                    <img class="img-fluid blur-up lazyload" src="assets/images/icons/free-shipping.png" data-src="assets/images/icons/free-shipping.png" alt="image" title="image" />
                                                </div>
                                                <div class="info-details d-table-cell align-middle">
                                                    <h5>Free &amp; Fast Shipping</h5>
                                                    <span>Free &amp; Fast Shipping over 100+ countries &amp; regions.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="info-area d-table">
                                                <div class="info-icon d-table-cell align-middle">
                                                    <img class="img-fluid blur-up lazyload" src="assets/images/icons/safe-payment.png" data-src="assets/images/icons/safe-payment.png" alt="image" title="image" />
                                                </div>
                                                <div class="info-details d-table-cell align-middle">
                                                    <h5>Safe Payment</h5>
                                                    <span>Pay with the world's most payment methods</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="info-area d-table">
                                                <div class="info-icon d-table-cell align-middle">
                                                    <img class="img-fluid blur-up lazyload" src="assets/images/icons/return-exchange.png" data-src="assets/images/icons/return-exchange.png" alt="image" title="image" />
                                                </div>
                                                <div class="info-details d-table-cell align-middle">
                                                    <h5>Return &amp; Exchange</h5>
                                                    <span>30 days online purchase - return &amp; Exchange Policy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="info-area d-table">
                                                <div class="info-icon d-table-cell align-middle">
                                                    <img class="img-fluid blur-up lazyload" src="assets/images/icons/support-24.png" data-src="assets/images/icons/support-24.png" alt="image" title="image" />
                                                </div>
                                                <div class="info-details d-table-cell align-middle">
                                                    <h5>Support 24/7</h5>
                                                    <span>We support 24/7 Have a Question? Call Us <a href="tel:25471212121">123-45-6789</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Store Features -->
                            </div>
                            <!-- End Product Store Features -->

                            <!-- Start Product Info Details -->
                            <div class="col-12 col-sm-12 col-md-6 product-info-details">
                                <!-- Start Product Info -->
                                <div class="profuct-info">
                                    <h1 class="product-title"><?php echo $product_single['item_name'] ; ?></h1>
                                    <div class="pro-revi-arrow clearfix">
                                        <div class="product-starrating pull-left">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <span>4 Reviews</span>
                                        </div>
                                    </div>
                                    <ul class="row pro-info-list">
                                        <li class="col-12 col-md-4 col-sm-4 instock text-sm-left">In Stock</li>
                                        <li class="col-12 col-md-4 col-sm-4 vendor text-sm-center"><b>Vendor: </b><?php echo $product_single['seller_organization'] ?>  </li>
                                    </ul>
                                </div>
                                <!-- End Product Info -->

                                <!-- Start Product Price -->
                                <ul class="d-sm-flex flex-sm-row align-items-sm-center product-price-info">
                                    <li class="product-price m-0"><span class="compare-price">$<?php echo $product_single['price'] * 1.15; ?></span><span class="sale-price">$<?php echo $product_single['price']?></span></li>
                                    <li class="save-price">You Save <span class="save-count">$<?php echo $product_single['price'] * .15; ?> (15%)</span></li>
                                </ul>
                                <!-- End Product Price -->

                                <!-- Start Product Sold In Last -->
                                <p class="sold-in-last"><span class="align-middle">10 sold in last 20 hours</span></p>
                                <!-- End Product Sold In Last -->

                                <!-- Start Product List Info -->
                                <ul class="d-flex flex-column pro-lists">
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Maecenas vehicula lorem et facilisis eleifend.</li>
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Quisque mattis augue quis risus euismod pharetra.</li>
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Curabitur bibendum massa vitae risus lacinia rutrum.</li>
                                </ul>
                                <!-- End Product List Info -->

                                <!-- Start Product Progress Bar -->
                                <div class="progress-stock">
                                    <h4>Hurry! Only <span>20</span> left in stock.</h4>
                                    <div class="progress rounded-0">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Product Progress Bar -->

                                <!-- Start Product Time Counter -->
                                <div class="product-counter-text clearfix">
                                    <h4>Hurry up! Limited time Offer</h4> 
                                    <div class="product-counter clearfix" data-countdown="2024/10/01"></div>                                       
                                </div>
                                <!-- End Product Time Counter -->

                                <!-- Start Product Color -->
                                <div class="product-color">
                                    <p class="mb-2">Color:  <b>RED</b></p>
                                    <ul class="d-flex flex-row align-items-center color-item" data-toggle="buttons">
                                        <li class="btn black active" data-toggle="tooltip" data-placement="top" title="black"><img class="img-fluid" src="assets/images/products/product-swatch-50x50.jpg" alt="image" /></li>
                                        <li class="btn navy" data-toggle="tooltip" data-placement="top" title="navy"><img class="img-fluid" src="assets/images/products/product-swatch-50x50.jpg" alt="image" /></li>
                                        <li class="btn light-blue" data-toggle="tooltip" data-placement="top" title="light-blue"><img class="img-fluid" src="assets/images/products/product-swatch-50x50.jpg" alt="image" /></li>
                                        <li class="btn green" data-toggle="tooltip" data-placement="top" title="green"><img class="img-fluid" src="assets/images/products/product-swatch-50x50.jpg" alt="image" /></li>
                                        <li class="btn yellow" data-toggle="tooltip" data-placement="top" title="yellow"><img class="img-fluid" src="assets/images/products/product-swatch-50x50.jpg" alt="image" /></li>
                                    </ul>
                                </div>
                                <!-- End Product Color -->

                                <!-- Start Product Size -->
                                <div class="product-size">
                                    <p class="mb-2">Color: <b>XL</b></p>
                                    <ul class="d-flex flex-row align-items-center color-item" data-toggle="buttons">
                                        <li class="btn x active" data-toggle="tooltip" data-placement="top" title="x"><span>X</span></li>
                                        <li class="btn xl" data-toggle="tooltip" data-placement="top" title="xl"><span>XL</span></li>
                                        <li class="btn m" data-toggle="tooltip" data-placement="top" title="m"><span>M</span></li>
                                        <li class="btn s" data-toggle="tooltip" data-placement="top" title="s"><span>S</span></li>
                                        <li class="btn xxl" data-toggle="tooltip" data-placement="top" title="xxl"><span>XXL</span></li>
                                    </ul>
                                </div>
                                <!-- End Product Size -->

                                <!-- Start Cart Box -->
                                <div class="addToBox">
                                    <form action="#" class="d-sm-flex flex-sm-row">
                                        <!-- Start Product Quantity -->
                                        <div class="product-form-item product-quantity">
                                            <div class="qty-box">
                                                <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                                <input type="text" name='quantity' value='1' class="qty-input" />                             
                                                <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <!-- End Product Quantity -->

                                        <!-- Start Product Add Cart -->
                                        <div class="product-form-item product-submit pro-buy btn-block">
                                            <a href="./backend/logics/deletecart.php?product_id=<?php echo $_GET['product_id'] ;?>" class="btn btn-primary btn-block product-btn-cart add-cart">Add to Cart</a>
                                        </div>
                                        <!-- End Product Add Cart -->

                                        <!-- Start Product Buy Now -->
                                        <!-- End Product Buy Now -->
                                    </form>
                                </div>
                                <!-- End Cart Box -->

                                <div class="wish-size-ship clearfix">
                                    <!-- Start Product Wish List -->
                                    <div class="wishlistOuter pull-left">
                                        <a href="wishlist.php"><i class="ti-heart align-middle mr-2"></i> <span class="align-middle">Add To Wishlist</span></a>
                                    </div>
                                    <!-- End Product Wish List -->

                                    <!-- Start Product Size Shipping Info -->
                                    <div class="size-ship-info pull-right">
                                        <!-- Start Product Size -->
                                        <div class="size-chart pull-left">
                                            <a href="" class="size-chart-btn" data-toggle="modal" data-target="#size-guide-model"><i class="ti-ruler-pencil align-middle mr-2"></i> <span class="align-middle">Size Guide</span></a> 
                                            <!-- Start Size Guide Modal -->
                                            <div class="size-guide-model modal fade" id="size-guide-model" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                                                            <div class="row size-chart-conversion">
                                                                <div class="col-12 col-sm-6 col-md-6 size-chart-table">
                                                                    <h4>Single Size Conversion</h4>
                                                                    <table class="table table-striped product-info-table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>UK</td>
                                                                                <td>18</td>
                                                                                <td>20</td>
                                                                                <td>22</td>
                                                                                <td>24</td>
                                                                                <td>26</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>European</td>
                                                                                <td>18</td>
                                                                                <td>20</td>
                                                                                <td>22</td>
                                                                                <td>24</td>
                                                                                <td>26</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>US</td>
                                                                                <td>18</td>
                                                                                <td>20</td>
                                                                                <td>22</td>
                                                                                <td>24</td>
                                                                                <td>26</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Australia</td>
                                                                                <td>18</td>
                                                                                <td>20</td>
                                                                                <td>22</td>
                                                                                <td>24</td>
                                                                                <td>26</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>India</td>
                                                                                <td>18</td>
                                                                                <td>20</td>
                                                                                <td>22</td>
                                                                                <td>24</td>
                                                                                <td>26</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="col-12 col-sm-6 col-md-6 text-center size-chart-img">
                                                                    <img class="img-fluid blur-up lazyload" src="assets/images/others/size-chart.png" data-src="assets/images/others/size-chart.png" alt="image" title="image" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Size Guide Modal -->
                                        </div>
                                        <!-- End Product Size -->

                                        <!-- Start Product Shipping Info -->
                                        <div class="shipping-info pull-left">
                                            <a href="" class="ship-info-btn" data-toggle="modal" data-target="#ship-info-model"><i class="ti-truck align-middle mr-2"></i> <span class="align-middle">Shipping Info</span></a>
                                            <!-- Start Shipping Info Modal -->
                                            <div class="ship-info-model modal fade" id="ship-info-model" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                                                            <div class="shipping-returns-content">
                                                                <h4>Return Policy</h4>
                                                                <p class="mb-1">Items returned within 14 days of their original shipment date in same as new condition will be eligible for a full refund or store credit.</p>
                                                                <p class="mb-1">Refunds will be charged back to the original form of payment used for purchase.</p>
                                                                <p class="mb-1">Customer is responsible for shipping charges when making returns and shipping/handling fees of original purchase is non-refundable.</p>
                                                                <p>All sale items are final purchases.</p>
                                                                <h4>Shipping</h4>
                                                                <p class="mb-1">All orders shipped with UPS Express.</p>
                                                                <p class="mb-1">Always free shipping for orders over US $250.</p>
                                                                <p>All orders are shipped with a UPS tracking number.</p>
                                                                <h4>Help</h4>
                                                                <p class="mb-1">Give us a shout if you have any other questions and/or concerns.</p>
                                                                <p class="mb-1">Email: <a href="mailto:yourmail@domain.com">yourmail@domain.com</a></p>
                                                                <p>Phone: <a href="tel:0123456789">0123456789</a></p>
                                                                <ul class="d-flex flex-column pro-lists">
                                                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li>
                                                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Aenean sollicitudin, lorem quis bibendum auctor.</li>
                                                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Nisi elit consequat ipsum, nec sagittis sem nibh id elit.</li>
                                                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Shipping Info Modal -->
                                        </div>
                                        <!-- End Product Shipping Info -->
                                    </div>
                                    <!-- Start Product Size Shipping Info -->
                                </div>

                                <!-- Start Product Counter Time -->
                                <div class="counter-real-time">
                                    <i class="fa fa-users mr-2" aria-hidden="true"></i> Real time <span class="number-counter mx-1">98</span> Visitor right now
                                </div>
                                <!-- Start Product Counter Time -->

                                <!-- Start Product Next Order Info -->
                                <div class="get-next-order">
                                    <i class="fa fa-hourglass-half mr-2" aria-hidden="true"></i>
                                    Order in the next <span class="hr-min">4 hours 0 minutes</span> to get it by <span class="date">Tuesday 04/16/2019</span>
                                </div>
                                <!-- Start Product Next Order Info -->

                                <!-- Start Checkout Info -->
                                <div class="checkout-safe">
                                    <fieldset>
                                        <legend>Guaranteed Safe Checkout</legend>
                                        <img class="img-fluid" src="assets/images/icons/checkout-icon.png" alt="Guaranteed Safe Checkout" title="Guaranteed Safe Checkout" />
                                    </fieldset>
                                </div>
                                <!-- Start Product Checkout Info -->

                                <!-- Start Product Social Media -->
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
                                <!-- Start Product Social Media -->
                            </div>
                            <!-- End Product Info Details -->
                        </div>
                    </div>
                </div>
                <!-- End Single Product Detail -->

                <!-- Start Product Detail Accordion -->
                
                <!-- End Product Detail Accordion -->

                <!-- Start Related Product -->
                <div class="related-product sections-spacing">
                    <div class="container">
                        <div class="section-header">
                            <h2>Related Product</h2>
                            <p>Browse the huge variety of our products</p>
                        </div>
                        <div class="row row-sp row-eq-height prcarousel">
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
                                        <h3 class="product-title"><a href="product-details.php">Aenean commodo ligula eget dolor</a></h3>
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
                                        <h3 class="product-title"><a href="product-details.php">Nullam scelerisque suscipit sociis</a></h3>
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
                                        <h3 class="product-title"><a href="product-details.php">Consectetur adipisicing elit</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-half-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$113.88</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Related Product -->

                
                <!-- End Recently Viewed Product -->
            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
<?php 
include './footer.php';
?>
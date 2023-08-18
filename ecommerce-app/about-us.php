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
                        <h1>About Us</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start About Us Content -->
                <div class="about-us-content">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="about-img col-12 col-sm-12 col-md-12 mb-4 mb-lg-0 col-lg-6">
                                <img class="img-fluid blur-up lazyload" src="assets/images/others/about-us.jpg" data-src="assets/images/others/about-us.jpg" alt="image" title="image" />
                            </div>
                            <div class="about-content col-12 col-sm-12 col-md-12 col-lg-6">
                                <h3>Welcome to Posh Autoparts Store</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a convallis nisl, at aliquam dolor. Morbi in iaculis nunc. Nulla eu mi at velit imperdiet sollicitudin sed vel risus.</p>
                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour . If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
                                <p>Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p>                              
                                <p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="about-list col-12 col-sm-6 col-md-6">
                                <ul class="check-mark">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Maecenas convallis purus sed ipsum faucibus, quis blandit quam vulputate.</li>
                                    <li>Sed sit amet eros dignissim, ornare urna et, egestas nunc.</li>
                                    <li>Morbi iaculis massa sed arcu luctus iaculis.</li>
                                    <li>Ut cursus dui id leo sagittis, quis feugiat nisi aliquet.</li>
                                    <li>Etiam eu nunc lacinia, finibus arcu at, malesuada purus.</li>
                                    <li>Phasellus ultrices purus ac velit suscipit, eget posuere tortor finibus.</li>
                                </ul>
                            </div>
                            <div class="about-list col-12 col-sm-6 col-md-6">
                                <ul class="check-mark">
                                    <li>Etiam eget risus at purus lobortis pellentesque eu et mauris.</li>
                                    <li>Suspendisse pulvinar dolor imperdiet arcu varius vulputate.</li>
                                    <li>Sed at ligula vulputate libero rutrum cursus.</li>
                                    <li>Donec ac enim a lectus volutpat pharetra.</li>
                                    <li>Aliquam ullamcorper urna non ullamcorper luctus.</li>
                                    <li>Suspendisse vehicula velit nec mauris fermentum, eget posuere nulla congue.</li>
                                    <li>Fusce pharetra nulla eu sem consequat maximus.</li>
                                </ul>
                            </div>
                        </div>

                        <blockquote class="blockquote">
                            <p>"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra."</p>
                            <footer class="blockquote-footer">Devid Chory</footer>
                        </blockquote>                        
                    </div>

                    <!-- Start Service -->
                    <div class="services-content sections-spacing">
                        <div class="container">
                            <div class="section-header">
                                <h2>Our service</h2>
                                <p>Parts maximus egestas interdum turpis egestas</p>
                            </div>
                            <div class="row">
                                <div class="service-item mb-4 mb-lg-0 col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="service d-table w-100">
                                        <div class="searvice-icon d-table-cell align-middle">
                                            <i class="ti-face-smile"></i>
                                        </div>
                                        <div class="searvice-detail d-table-cell align-middle pl-4">
                                            <h4>Repair & Service</h4>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="service d-table w-100">
                                        <div class="searvice-icon d-table-cell align-middle">
                                            <i class="ti-truck"></i>
                                        </div>
                                        <div class="searvice-detail d-table-cell align-middle pl-4">
                                            <h4>Free Shipping Over $15</h4>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="service d-table w-100">
                                        <div class="searvice-icon d-table-cell align-middle">
                                            <i class="ti-map-alt"></i>
                                        </div>
                                        <div class="searvice-detail d-table-cell align-middle pl-4">
                                            <h4>Store Locator</h4>
                                            <p class="m-0">Use our store locator to find the closest store near you.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item mb-4 mb-lg-0 col-12 col-sm-12 col-md-12 col-lg-4 text-center">
                                    <div class="servive-img">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/others/service.png" data-src="assets/images/others/service.png" alt="service" title="Service" />
                                    </div>
                                </div>
                                <div class="service-item col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="service d-table w-100">
                                        <div class="searvice-icon d-table-cell align-middle">
                                            <i class="ti-car"></i>
                                        </div>
                                        <div class="searvice-detail d-table-cell align-middle pl-4">
                                            <h4>Speed Perks</h4>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="service d-table w-100">
                                        <div class="searvice-icon d-table-cell align-middle">
                                            <i class="ti-wheelchair"></i>
                                        </div>
                                        <div class="searvice-detail d-table-cell align-middle pl-4">
                                            <h4>Free In-Store Services</h4>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>

                                    <div class="service d-table w-100">
                                        <div class="searvice-icon d-table-cell align-middle">
                                            <i class="ti-spray"></i>
                                        </div>
                                        <div class="searvice-detail d-table-cell align-middle pl-4">
                                            <h4>Oil & Battery Recycling</h4>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service -->

                    <!-- Start Number Counter -->
                    <div class="number-counter sections-spacing">
                        <div class="container">
                            <div class="row row-eq-height">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 mb-lg-0 text-center">
                                    <div class="counter-block">
                                        <i class="fa fa-smile-o fa-4x"></i>
                                        <span class="stat-count number">122</span>
                                        <p class="m-0 counter-details">Happy Customers</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 mb-lg-0 text-center">
                                    <div class="counter-block">
                                        <i class="fa fa-coffee fa-4x"></i>
                                        <span class="stat-count number">165</span>
                                        <p class="m-0 counter-details">Ordered Coffee's</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 mb-lg-0 text-center">
                                    <div class="counter-block">
                                        <i class="fa fa-trophy fa-4x"></i>
                                        <span class="stat-count number">140</span>
                                        <p class="m-0 counter-details">Awards Win</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-0 mb-lg-0 text-center">
                                    <div class="counter-block">
                                        <i class="fa fa-briefcase fa-4x"></i>
                                        <span class="stat-count number">777</span>
                                        <p class="m-0 counter-details">Projects Complete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Number Counter -->

                    <!-- Start Our Team -->
                    <div class="team-content sections-spacing">
                        <div class="container">
                            <div class="section-header">
                                <h2>Meet our team</h2>
                                <p>Lorem ipsum is a major key to success very important major key parts talk.</p>
                            </div>
                            <div class="row">
                                <div class="team-member mb-4 mb-lg-0 text-center col-12 col-sm-4 col-md-4 col-lg-3 col-xs-3">
                                    <div class="team-img mb-4">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/team/team1.jpg" data-src="assets/images/team/team1.jpg" alt="image" title="image" />
                                        <div class="overlay-team">
                                            <ul class="social-icons d-flex flex-row align-items-center justify-content-center text-center">
                                                <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="icon ti-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Lorem ipsum</h4>
                                    <span>Mechanical Engineer</span>
                                </div>
                                <div class="team-member mb-4 mb-lg-0 text-center col-12 col-sm-4 col-md-4 col-lg-3 col-xs-3">
                                    <div class="team-img mb-4">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/team/team1.jpg" data-src="assets/images/team/team1.jpg" alt="image" title="image" />
                                        <div class="overlay-team">
                                            <ul class="social-icons d-flex flex-row align-items-center justify-content-center text-center">
                                                <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="icon ti-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Lorem ipsum</h4>
                                    <span>Mechanical Engineer</span>
                                </div>
                                <div class="team-member mb-4 mb-lg-0 text-center col-12 col-sm-4 col-md-4 col-lg-3 col-xs-3">
                                    <div class="team-img mb-4">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/team/team1.jpg" data-src="assets/images/team/team1.jpg" alt="image" title="image" />
                                        <div class="overlay-team">
                                            <ul class="social-icons d-flex flex-row align-items-center justify-content-center text-center">
                                                <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="icon ti-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Lorem ipsum</h4>
                                    <span>Mechanical Engineer</span>
                                </div>
                                <div class="team-member mb-4 mb-lg-0 text-center col-12 col-sm-4 col-md-4 col-lg-3 col-xs-3">
                                    <div class="team-img mb-4">
                                        <img class="img-fluid blur-up lazyload" src="assets/images/team/team1.jpg" data-src="assets/images/team/team1.jpg" alt="image" title="image" />
                                        <div class="overlay-team">
                                            <ul class="social-icons d-flex flex-row align-items-center justify-content-center text-center">
                                                <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="icon ti-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Lorem ipsum</h4>
                                    <span>Mechanical Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Our Team -->                   
                </div>
                <!-- End About Us Content -->
            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
            
<?php
include './footer.php';
?>
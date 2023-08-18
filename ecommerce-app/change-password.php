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
                        <h1>Change Password</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Change Password -->
                <div class="change-password">
                    <div class="container">
                        <div class="row row-sp">
                            <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                <div class="page-title text-center">
                                    <h1>Change Password</h1>
                                    <p class="subtitle">Use the form below to change your password.</p>
                                </div>

                                <form action="./backend/logics/updatepassword.php" novalidate class="password-change-form needs-validation" method="post" >
                                    <div class="form-group">
                                        <label>Current Password *</label>
                                        <input type="password" class="form-control" placeholder="" required  name="current_password"/>
                                        <div class="invalid-feedback">Please enter your current password.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password *</label>
                                        <input type="password" class="form-control" placeholder="" required name="new_password" />
                                        <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters.</small>
                                        <div class="invalid-feedback">Please enter your new password.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Verify *</label>
                                        <input type="password" class="form-control" placeholder="" required  name="verify_password"/>
                                        <small class="form-text small text-muted">To confirm, type the new password again.</small>
                                        <div class="invalid-feedback">Please enter your new password again.</div>
                                    </div>

                                    <div class="change-password-btn mt-5">
                                        <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Change Password -->
            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
      <?php  include "./footer.php" ; ?>
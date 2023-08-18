
<?php 
$password_error = null;
$password_success = null;
session_start();
require "./backend/connector/conn.php";
    if(isset($_POST["submit_password"])){

        $current_password = $_POST["password"];
        $new_password = $_POST["npassword"];
        $confirm_password = $_POST["cpassword"];

        if($new_password != $confirm_password){
            $password_error = "Your passwords do not match";
        }else{
            $query_user = mysqli_query($conn, "SELECT password FROM users WHERE email='{$_SESSION['email']}'");
            $user_data_pass = mysqli_fetch_assoc($query_user);

            if(!password_verify($current_password, $user_data_pass["password"])){
                $password_error = "The password you entered is wrong";
            }else{
                $pass_hash_new = password_hash($new_password, PASSWORD_DEFAULT);
                mysqli_query($conn, "UPDATE users SET password='$pass_hash_new' WHERE email='{$_SESSION['email']}'");
                echo("
                    <script>
                        alert('Password updated succesfully');
                        window.location.href ='backend/auth/logout.php'
                    </script>
                ");
            }
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
                                    <p style="color:green;"><?php echo($password_success); ?></p>
                                    <p style="color:red;"><?php echo($password_error); ?></p>
                                </div>

                                <form method="post" action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" class="password-change-form needs-validation" novalidate>
                                    <div class="form-group">
                                        <label>Current Password *</label>
                                        <input type="password" class="form-control" name="password" placeholder="" required />
                                        <div class="invalid-feedback">Please enter your current password.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password *</label>
                                        <input type="password" class="form-control" name="npassword" placeholder="" required />
                                        <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters.</small>
                                        <div class="invalid-feedback">Please enter your new password.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Verify *</label>
                                        <input type="password" class="form-control" name="cpassword" placeholder="" required />
                                        <small class="form-text small text-muted">To confirm, type the new password again.</small>
                                        <div class="invalid-feedback">Please enter your new password again.</div>
                                    </div>

                                    <div class="change-password-btn mt-5">
                                        <button name="submit_password" type="submit" class="btn btn-primary btn-block">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Change Password -->
            </main>
            <!-- End Main Content -->

<?php
    include("./footer.php");
?>
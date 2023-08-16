
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=" " />
    <!-- Title -->
    <title>Register - E-Shopper-Goodies</title>
    <!-- Favicon  -->
    <link rel="shortcut icon" href="assets/images/fevicon.png" />

    <!-- *********** CSS Files *********** -->
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css" />
    <!-- Styles CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
</head>

<body class="template-register account-page">
    <!-- Start Page Loader -->
    <div class="page-loading"></div>
    <!-- End Page Loader -->

    <!--  Start Main Wrapper -->
    <div class="main-wrapper cart-drawer-push">
        <!-- Start Promotional Bar Section -->

        <!-- End Promotional Bar Section -->

        <!-- Start Header Section -->

        <!-- End Header Section -->

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
                                <p class="subtitle mb-0">
                                    Create your Account as a seller and upload your products
                                </p>
                            </div>
                            <form action="../backend/seller/auth/register.php" class="register-form needs-validation"
                                enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" placeholder="" required
                                            name="first-name" />
                                        <div class="invalid-feedback">Please enter your first name.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" placeholder="" required
                                            name="last-name" />
                                        <div class="invalid-feedback">Please enter your last name.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Organization Name*</label>
                                        <input type="text" class="form-control" placeholder="" required
                                            name="company" />
                                        <div class="invalid-feedback">Please enter your bussiness name.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Bussiness Account number *</label>
                                        <input type="number" class="form-control" placeholder="" required
                                            name="bussiness-account-number" />
                                        <div class="invalid-feedback">Please enter your bussiness account number.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Email Address *</label>
                                        <input type="email" class="form-control" placeholder="" required name="email" />
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone number *</label>
                                        <input type="number" class="form-control" placeholder="" required
                                            name="phone" />
                                        <div class="invalid-feedback">Please enter your phone number.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Profile Picture / Bussiness logo *</label>
                                        <input type="file" name="filetoupload" required />
                                        <div class="invalid-feedback">Please enter your Profile Picture / Bussiness logo
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Password *</label>
                                        <input type="password" class="form-control" placeholder="" required
                                            name="password" required />
                                        <div class="invalid-feedback">Please enter your password.</div>
                                    </div>
                                </div>


                                <div class="form-group button-action mt-1 mt-sm-5 clearfix text-center">
                                    <button type="submit" class="account-create btn btn-primary" name="submit">Create
                                        Seller Account</button>
                                    <p><a href="./login.php">Already have an account ? Login</a></p>
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
        <!-- End Footer Section -->

        <!-- Start Scroll Top -->
        <div id="scrollTop"><i class="ti-arrow-up"></i></div>
        <!-- End Scroll Top -->

        <!-- Overlay -->
        <div class="overlay"></div>

    </div>
    <!--  End Main Wrapper -->

    <!-- ******** JS Files ******** -->
    <!-- Plugin JS -->
    <script src="../assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

</body>

</html>
<?php
session_start();
require "../backend/connector/conn.php";

if (isset($_SESSION['emailseller'])) {
    $session_var = $_SESSION['emailseller'];
    $sql = "SELECT * FROM sellers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $session_var);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        // User with the given email exists
        $row = $result->fetch_assoc();
        $name = $row['first_name'] . " " . $row['last_name'];
        $image = $row['profile'];
        $orgname = $row['bussiness_name'];
    }


} else {
    echo "<script>
    alert('you are not logged in');
location.replace('./login.php');
    </script>";

}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=" " />
    <!-- Title -->
    <title>Upload Product - E-Shopper-Goodies</title>
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
                    <h1>Upload Product</h1>
                    <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="home.php" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Upload Products</li>
                        <li class="breadcrumb-item"><a href="home.php" title="Products">Products</a></li>
                        <li class="breadcrumb-item" ><a href="../backend/seller/auth/logout.php" title="Logout" style="color: red;">logout</a></li>


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

                                    <?php echo '<h1 style="color:green"> Hello ' . $name . '</h1></br>';
                                    ?>
                                    upload your products here
                                </p>
                            </div>
                            <form enctype="multipart/form-data" method="post"
                                action="../backend/seller/functions/upload.php">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="item_name">Item Name:</label>
                                        <input type="text" class="form-control" id="item_name" name="item_name"
                                            required>
                                    </div>
                                    <?php
                                    // Generate sample categories
                                    $sampleCategories = [
                                        "Electronics",
                                        "Clothing",
                                        "Home and Living",
                                        "Books",
                                        "Beauty and Personal Care",
                                        "Phones and Accessories",
                                        "Shoes",
                                        "Home and Kitchen",
                                        "Beauty , Health and hair",
                                        "bags",
                                        "Clothes",
                                        "Watches and jewellery",
                                        "Computers and accessories",
                                        "Baby , kids and maternity",
                                        "Drinks",
                                        "automotive",
                                        "Sports ,fitness and outdoor",
                                        "office products",
                                        "Other"

                                        // Add more categories as needed
                                    ];

                                    // Generate the category options
                                    $categoryOptions = "";
                                    foreach ($sampleCategories as $categoryName) {
                                        $categoryOptions .= "<option value='$categoryName'>$categoryName</option>";
                                    }
                                    ?>
                                    <div class="form-group col-md-3">
                                        <label for="availability">Category:</label>
                                        <select class="form-control" id="category" name="category" required
                                            style="background-color:#f76d2b;color:antiquewhite">
                                            <option value="" disabled selected>Select a
                                                category</option>
                                            <?php echo $categoryOptions; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="items_number">Items Number (approximate):</label>
                                        <input type="number" class="form-control" id="items_number" name="items_number"
                                            required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="price">Price (Ksh):</label>
                                        <input type="number" class="form-control" id="price" name="price" required>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-2">
                                        <label for="image_primary">Primary Image:</label>
                                        <input type="file" class="form-control" id="image_primary" name="image_primary"
                                            required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="image2">Image 2:</label>
                                        <input type="file" class="form-control" id="image2" name="image2" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="image3">Image 3:</label>
                                        <input type="file" class="form-control" id="image3" name="image3" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="image4">Image 4:</label>
                                        <input type="file" class="form-control" id="image4" name="image4" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="image5">Image 5:</label>
                                        <input type="file" class="form-control" id="image5" name="image5" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="image6">Image 6:</label>
                                        <input type="file" class="form-control" id="image6" name="image6" required>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="form-group col-md-2">
                                        <label for="new_arrival_tag">New Arrival Tag:</label>
                                        <input type="checkbox" id="new_arrival_tag" name="new_arrival_tag"
                                            value="false">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="in_demand_tag">In Demand Tag:</label>
                                        <input type="checkbox" id="in_demand_tag" name="in_demand_tag" value="false">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="trending_tag">Trending Tag:</label>
                                        <input type="checkbox" id="trending_tag" name="trending_tag" value="false">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="flash_sale_tag">Flash Sale Tag:</label>
                                        <input type="checkbox" id="flash_sale_tag" name="flash_sale_tag" value="false">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="coming_soon">Coming Soon:</label>
                                        <input type="checkbox" id="coming_soon" name="coming_soon" value="false">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="seller_organization">Seller Organization Name:</label>
                                        <input type="text" class="form-control" id="seller_organization"
                                            name="seller_organization" value="<?php echo $orgname; ?> "  >
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label for="description">Item Description:</label>
                                        <textarea class="form-control" id="description" name="description"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <button type="submit"
                                            class=" btn btn-primary form-group col-md-12">Submit</button>
                                    </div>

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
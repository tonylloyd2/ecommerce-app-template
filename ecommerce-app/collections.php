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
     <!-- End Header Section -->

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                
                <!-- Start Collection List -->
                <div class="colection-listing">
                    <div class="container">
                        <div class="row row-sp">
                            <?php
                            while ($randomProduct = mysqli_fetch_assoc($result_products)) { 


                            ?>
                            <div class="col-sp col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                <div class="collection-item position-relative text-center mb-5">
                                    <a href="shop-list-left-sidebar.php" class="animate-scale collection-img">
                                        <img class="img-fluid blur-up lazyload w-100" style="width: 195px;height: 260px;" src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>"
                                         data-src="<?php echo "./image/products/".$randomProduct["image_primary"]; ?>" alt="image" title="Speedometer" />
                                    </a>
                                    <div class="collection-details">
                                        <p class="count-pro"><?php echo "Items number : ".$randomProduct['items_number']?></p>
                                        <a href="shop-list-left-sidebar.php" class="collection-title"><?php $randomProduct['items_number']; ?></a>
                                        <p class="detail"><?php $randomProduct['description'] ?></p>
                                        <a class="btn btn-primary" href="product-details.php?product_id=<?php echo $randomProduct['id']; ?>">
                                            shop now</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- End Collection List -->
            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
       <?php include "./footer.php" ; ?>
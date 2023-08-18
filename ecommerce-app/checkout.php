<?php
session_start();
require "./backend/connector/conn.php";


$query_products = "SELECT * FROM product_information order by rand()";
$result_products = mysqli_query($conn, $query_products);

$checkout_firstName = "";
$checkout_lastName = "";
$checkout_email="";
$checkout_phone = "";
$checkout_userId = "";

$checkout_total = 0;
$product_ids = [];

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
        $image = $row['image'];
        $checkout_firstName = $row['firstname'];
        $checkout_lastName = $row['lastname'];
        $checkout_email= $row['email'];
        $checkout_phone = $row['phone'];
        $checkout_userId = $row["id"];

        $user_cart_id = $row['id'];
  }
  
  
}



 include "./header.php";
 
 

 ?>
            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <!-- End Breadcrumb -->

                <!-- Start checkout -->
                <div class="checkout-content checkout-version-two">
                    <div class="container">
                        <!-- Start Checkout Content -->
                        <div class="row">
                            <!-- Start Checkout Form -->
                            <div class="checkout-form col-12 col-sm-12 col-lg-8 order-1 order-lg-0 sidebar-left">
                                <div class="accordion accordion-checkout" id="accordionCheckout">
                                    <!-- Start Card Shipping Address -->
                                    <div class="card border-0">
                                        <div class="card-header" id="headingOne" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h3>01. Shipping Address</h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCheckout">
                                            <div class="card-body px-0">
                                                <p class="mb-4"><a class="link-color" href="login.php">Login</a> or <a class="link-color" href="register.php">Register</a> for faster payment.</p>
                                                <!-- Start Shipping Form -->
                                                <form action="#" class="shiping-form needs-validation" novalidate>
                                                    <div class="row form-group mb-0">
                                                        <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                            <label>First Name: *</label>
                                                            <input type="text" name="first-name" class="form-control" placeholder="" value="<?php echo($checkout_firstName); ?>" required />
                                                            <div class="invalid-feedback">Please enter your first name.</div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                            <label>Last Name: *</label>
                                                            <input type="text" name="last-name" class="form-control" value="<?php echo($checkout_lastName); ?>" placeholder="" required />
                                                            <div class="invalid-feedback">Please enter your last name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group mb-0">
                                                        <div class="col-12 col-sm-12 col-md-12 mb-4">
                                                            <label>Pickup Station:</label>
                                                            <select class="form-control">
                                                                <option value="">station 1</option>
                                                                <option value="">station 2</option>
                                                                <option value="">station 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group mb-0">
                                                        <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                            <label>Phone Number: *</label>
                                                            <input type="text" name="phone-number" class="form-control" value="<?php echo($checkout_phone); ?>"  placeholder="" required />
                                                            <div class="invalid-feedback">Please enter your phone number.</div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                            <label>Email Address: *</label>
                                                            <input type="email" name="email-address" class="form-control" placeholder="" value="<?php echo($checkout_email); ?>" required />
                                                            <div class="invalid-feedback">Please enter your email.</div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- End Shipping Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card Shipping Address -->



                                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                            <form  action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="post">
                                                <div class="form-group checkout-order mt-5">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block place-order-btn">Place order</button>
                                                </div>
                                            </form>
                                    <!-- End Card Payment Method -->
                                </div>
                            </div>
                            <!-- End Checkout Form -->

                            <!-- Start Cart Order -->
                            <div class="checkout-order col-12 col-sm-12 col-lg-4 mb-5 mb-lg-0 order-0 order-lg-1 sidebar sidebar-right">
                                <h3>Order Summary</h3>
                                <!-- Start Order Cart Table -->
                                <div class="table-content table-responsive mb-4">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th class="text-left">Item</th>
                                                <th class="text-center">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                <?php 
                                                $checkout_totale = 0;
                                                while ($cart_data = $resultcart->fetch_assoc()) { 
                                                    array_push($product_ids, $cart_data["product_id"]);
                                                    $checkout_total = $checkout_total + $cart_data['product_price']
                                                        ?>
                                                        <tr>
                                                            <td class="pro-img text-center"><a href="product-details.php"><img class="img-fluid blur-up lazyload" src="<?php echo './image/products/'.$cart_data['product_image']  ;?>" data-src="<?php echo './image/products/'.$cart_data['product_image']  ;?>" alt="image" title="image" width="60" /></a></td>
                                                            <td class="pro-del text-left">
                                                                <p class="mb-1 pro-name"><?php echo $cart_data['product_name'] ; ?></p>
                                                            </td>
                                                            <td class="pro-price text-center"><?php echo "Ksh. ".$cart_data['product_price'];  ?></td>
                                                        </tr>
                                                    <?php }?>
                                            <tr class="check-action item-total">
                                                <td class="text-left" colspan="2"><b>Total:</b></td>
                                                <td class="text-center font-14"><strong><?php echo "Ksh. ".$checkout_total; ?></strong></td>
                                            </tr>
                                            <?php } ?>    
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Order Cart Table -->

                            </div>
                            <!-- End Cart Order -->
                        </div>
                        <!-- End Checkout Content -->
                    </div>
                </div>
                <!-- End checkout -->
            </main>
            <!-- End Main Content -->

            <?php
                if (isset($_POST["submit"])) {

                    // $response = ["success" => true, "error" => ""];
                    // $phone_number = "254" .(int)$checkout_phone;

                    // $consumer_key = '4zoOGSweQY5hmA0TJ6rMAQd0P5qoHZ2D';
                    // $consumer_secret = 'QfcXyARBH6QkP0fQ';

                    // $Business_Code = '174379';
                    // $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
                    // $Type_of_Transaction = 'CustomerPayBillOnline';
                    // $Token_URL = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
                    // $OnlinePayment = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
                    // $CallBackURL = 'https://2974-154-159-237-136.in.ngrok.io/transactions/callback.php';
                    // // $CallBackURL = "http://callback.php";
                    // $Time_Stamp = date("Ymdhis");
                    // $password = base64_encode($Business_Code . $Passkey . $Time_Stamp);

                    // $curl_request = curl_init();
                    // $credentials = base64_encode($consumer_key . ':' . $consumer_secret);
                    // curl_setopt($curl_request, CURLOPT_URL, $Token_URL);
                    // curl_setopt($curl_request, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials));
                    // curl_setopt($curl_request, CURLOPT_HEADER, false);
                    // curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
                    // curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, false);

                    // $curl_request_response = curl_exec($curl_request);

                    // if ($curl_request_response === false) {
                    //     $error_message = curl_error($curl_request);
                    //     $error_code = curl_errno($curl_request);
                    //     // Handle the error appropriately, e.g., log or display the error message.
                    //     echo "cURL Error: $error_message (Code: $error_code)";
                    // } else {
                    //     $token_data = json_decode($curl_request_response);
                    //     if (isset($token_data->access_token)) {
                    //         $token = $token_data->access_token;
                    //         // Now proceed with the rest of your code using the access token.
                    //     } else {
                    //         echo "Access token not found in the response.";
                    //     }
                    // }

                    // curl_close($curl_request);

                    // $curl_Tranfer2 = curl_init();
                    // curl_setopt($curl_Tranfer2, CURLOPT_URL, $OnlinePayment);
                    // curl_setopt($curl_Tranfer2, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token));

                    // $curl_Tranfer2_post_data = [
                    //     'BusinessShortCode' => $Business_Code,
                    //     'Password' => $password,
                    //     'Timestamp' => $Time_Stamp,
                    //     'TransactionType' => $Type_of_Transaction,
                    //     'Amount' => $checkout_total,
                    //     'PartyA' => $phone_number,
                    //     'PartyB' => $Business_Code,
                    //     'PhoneNumber' => $phone_number,
                    //     'CallBackURL' => $CallBackURL,
                    //     'AccountReference' => 'E-Shorper Goodies',
                    //     'TransactionDesc' => 'Order Payment',
                    // ];

                    $order_id = 0;

                    $query = mysqli_query($conn,"INSERT INTO orders(user_id) VALUES($checkout_userId)");
                    if($query){
                        $id_query = mysqli_query($conn, "SELECT id FROM orders WHERE user_id=$checkout_userId ORDER BY created_at DESC LIMIT 1");

                        if ($id_query) {
                            $row = mysqli_fetch_assoc($id_query);
                            $order_id = $row['id'];
                        }
                    }

                    
                    $orderproduct_sql = "INSERT INTO order_product(order_id,product_id) VALUES(?, ?)";
                    $orderproduct_stmt = $conn->prepare($orderproduct_sql);
                    
                    foreach($product_ids as $productId){
                        $orderproduct_stmt->bind_param("ss",$order_id, $productId );
                        $orderproduct_stmt->execute();
                    }

                    $delete_query = mysqli_query($conn, "DELETE FROM cart WHERE user_id=$checkout_userId");
                    echo("
                        <script>
                            window.location.href = 'index.php';
                        </script>
                    ");
                }
    
        include "./footer.php";
    ?>

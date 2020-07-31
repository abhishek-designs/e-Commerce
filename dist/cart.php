<?php 
    if(!isset($_SESSION))
    {
        echo '';
    }
    else
    {
        session_start(); 
        // $userId = $_SESSION['userid'];
        // $loggedIn = $_SESSION['loggedin'];

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/cart.css">
    <title>Your Cart</title>
</head>

<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Connecting to database -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Cart -->
    <section id="cart-section" class="bg-light py-3">
        <div class="container">
            <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
                {
                    echo '<!-- If the user is not logged in then we will show the cart restrict section -->
                    <div class="cart-restrict py-3">
                        <div class="cart-restrict-content">
                            <h2 class="head-3">Cart Unavailable</h2>
                            <p class="lead-2">Seems like you are not logged in, sign in to the store to be able to add the products to your cart.</p>
                            <a href="login.php" class="btn btn-unique">Login</a>
                        </div>

                    </div>';

                }
                else
                {
                    if(!isset($_SESSION['userid']))
                    {
                        echo 'user not found';
                    }
                    else
                    {
                        echo '<!-- If the user is logged in then we will show the cart section -->
                        <div class="carts">';
            
                            
                            $totalPrice = 0; // Total price of the products which is used for billing
                            $discount = 0; //Initial discount set to 0 
                            $deliveryCharge = 50; //Delievery charges

                            $query = 'SELECT * FROM `cart` where `user_id`='.$_SESSION['userid'];
                            $res = mysqli_query($con,$query);
                            $num = mysqli_num_rows($res);
            
                            if(!isset($_GET['coupon_removed']) || $_GET['coupon_removed']!=true)
                            {
                                echo '';
                            }
                            else
                            {
                                $discount = 0;
                            }
            
                            // Setting the discount price according to the coupons applied by the user
                            // Discount advantages according to the coupon applied
                            
                            //Wether the coupons applied or not
                            if(!isset($_GET['coupon_applied']) || $_GET['coupon_applied']!=true)
                            {
                                echo '';
                            }
                            else
                            {
                                if(!isset($_GET['discount_amt']))
                                {
                                    echo 'there is no discount on the coupon';
                                }
                                else
                                {   $discountAmt = $_GET['discount_amt'];
                                    $discount = $discountAmt;
                                }
                            }
                            
                            echo '<div class="carts-items">
                                <h2 class="head-2">MY CART('.$num.')</h2>';
             
                                    if($num > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($res))
                                        {
                                            $productId = $row['product_id'];
                                            $productName = $row['product_name'];
                                            $productPrice = $row['product_price'];
                                            $cartId = $row['cart_id'];
            
                                            $query2 = 'SELECT sub_sub_cat_id FROM products WHERE product_id='.$productId;
                                            $res4 = mysqli_query($con,$query2);
                                            $row4 = mysqli_fetch_assoc($res4);
            
                                            $subCatIdImg = $row4['sub_sub_cat_id'];
            
                                            echo '<div class="cart-row">
                                                <div class="img-tab">
                                                    <div class="img-contain">
                                                        <img src="./img/Products/'.$productId.$subCatIdImg.'.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-details">
                                                    <h3 class="head-3">'.$productName.'</h3>
                                                    <a href="partials/_removeCart.php?user_id='.$_SESSION['userid'].'&cart_id='.$cartId.'" class="remove-btn red lead-4">Remove</a>
                                                    <div class="quantity-field">
                                                        <label for="quantity" class="lead-4">Quantity</label>
                                                        <input type="number" name="quantity" id="quantity" class="quantity" value="1">
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <h3 class="head-3">₹'.$productPrice.'</h3>
                                                </div>
                                            </div>';

                                            // Every price of the product should be added to this variable
                                            $totalPrice = $productPrice + $totalPrice;
            
                                        }
                                    }
                                    else
                                    {
                                        echo '<!-- This UI will be shown when there is no item in the cart -->
                                        <div class="no-items bg-semi-med">
                                            <i class="fa fa-frown"></i>
                                            <h2 class="head-2">No Item Added</h2>
                                        </div>';

                                        $deliveryCharge = 0;
                                    }
            
                            echo '</div>
            
                            <div class="carts-billing">
                                <div class="pricing">
                                    <h3 class="head-3">Price Details</h3>
                                    <div class="tab total-tab">
                                        <p class="lead-3">Total</p>
                                        <span class="total lead-3 red">+ '.$totalPrice.'</span>
                                    </div>
                                    <div class="tab discount-tab">
                                        <p class="lead-3">Discount</p>';

                                        if(!isset($_GET['coupon_applied']) || $_GET['coupon_applied']!=true)
                                        {
                                            $discount = 0;
                                            echo '<span class="discount lead-3 green">'.$discount.'% - <a href="coupons.php" class="remove-btn green">apply coupon</a></span></span>';
                                        }
                                        else
                                        {
                                            echo '<span class="discount lead-3 green">'.$discount.'% - <a href="cart.php?coupon_removed=true" class="remove-btn green">remove coupon</a></span>';
                                        }
                                        $discounted = $totalPrice*($discount/100);

                                    echo '</div>
                                    <div class="tab shipping-tab">
                                        <p class="lead-3">Delivery Charges</p>
                                        <span class="shipping lead-3 red">+ '.$deliveryCharge.'</span>
                                    </div>';
                                    $grandTotal = $totalPrice - $discounted + $deliveryCharge;
                                    echo '<div class="tab grand-total">
                                        <p class="lead-1">Total</p>
                                        <span class="grand lead-1">₹'.$grandTotal.'</span>
                                    </div>
                                </div>
            
                                <a href="#" class="btn btn-unique">Place Order</a>
            
                                <div class="coupon">
                                    <h3 class="head-3">Options</h3>
                                    <div class="coupon-tab">
                                        <p class="head-4">Coupons</p>
                                        <a href="coupons.php" class="btn btn-primary">Apply Coupon</a>
                                    </div>
                                </div>
                            </div>
            
            
            
                        </div>';

                    }
                }
            ?>

        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
<script src="scripts/cart.js"></script>
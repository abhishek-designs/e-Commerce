<?php 
    if(!isset($_SESSION))
    {
        echo '';
    }
    else
    {
        session_start(); 
        $userId = $_SESSION['userid'];

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
            <div class="carts">

                <?php 
                    if(!isset($userId))
                    {
                        echo '';
                    }
                    else
                    {
                        $query = 'SELECT * FROM `cart` where `user_id`='.$userId;
                        $res = mysqli_query($con,$query);
                        $num = mysqli_num_rows($res);

                    }


                        
                ?>

                <div class="carts-items">
                    <h2 class="head-2">MY CART(<?php echo $num; ?>)</h2>

                    <?php 
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
                                        <a href="partials/_removeCart.php?user_id='.$userId.'&cart_id='.$cartId.'" class="remove-btn red lead-4">Remove</a>
                                        <div class="quantity-field">
                                            <label for="quantity" class="lead-4">Quantity</label>
                                            <input type="number" name="quantity" id="quantity" class="quantity" value="1">
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <h3 class="head-3">₹'.$productPrice.'</h3>
                                    </div>
                                </div>';

                            }
                        }
                        else
                        {
                            echo '<!-- This UI will be shown when there is no item in the cart -->
                            <div class="no-items bg-semi-med">
                                <i class="fa fa-frown"></i>
                                <h2 class="head-2">No Item Added</h2>
                            </div>';
                        }
                    ?>

                </div>

                <div class="carts-billing">
                    <div class="pricing">
                        <h3 class="head-3">Price Details</h3>
                        <div class="tab total-tab">
                            <p class="lead-3">Total</p>
                            <span class="total lead-3 red">+ 1300</span>
                        </div>
                        <div class="tab discount-tab">
                            <p class="lead-3">Discount</p>
                            <span class="discount lead-3 green">40%</span>
                        </div>
                        <div class="tab shipping-tab">
                            <p class="lead-3">Delivery Charges</p>
                            <span class="shipping lead-3 red">+ 50</span>
                        </div>
                        <div class="tab grand-total">
                            <p class="lead-1">Total</p>
                            <span class="grand lead-1">₹0</span>
                        </div>
                    </div>

                    <a href="#" class="btn btn-unique">Place Order</a>

                    <div class="coupon">
                        <h3 class="head-3">Options</h3>
                        <div class="coupon-tab">
                            <p class="head-4">Coupons</p>
                            <a href="#" class="btn btn-primary">Apply Coupon</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
<script src="scripts/cart.js"></script>
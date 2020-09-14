<!-- Setting the session -->
<?php
    if(!isset($_SESSION))
    {
        echo '';
    }
    else
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/global.css">
    <title>Proceed to pay</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Fetching the require data from the URL -->
    <?php
        
        if(!isset($_GET['sub_total']) || !isset($_GET['shipping']) || !isset($_GET['total']))
        {
            header('Location: /Ecommerce/dist/cart.php');
        }
        else
        {
            $subTotal = $_GET['sub_total'];
            $shipping = $_GET['shipping'];
            $total = $_GET['total'];

        }

    ?>

    <!-- Verifying the session variables -->
    <?php
    
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
        {
            echo '';
        }
        else
        {
            $userName = $_SESSION['username'];

        }
    
    ?>

    <!-- Checkout form -->
    <div id="checkout" class="container">
        <!-- Form For Checkout -->
        <div id="checkout-form">
            <h1 class="head-2">Proceed your payment</h1>

            <!-- Display a payment form -->
            <form action="partials/_charge.php" method="post" id="payment-form">
                <!-- <div class="form-grp">
                    <label for="card-num">Card No.</label>
                    <input type="text" name="card-num" id="card-num">
                </div> -->
                <input type="text" name="price-amt" id="price-amt" value=<?php echo $total; ?> hidden>
                <div class="form-grp">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- a Stripe Element will be inserted here. -->
                    </div>

                        <!-- Used to display form errors -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <button type="submit" class="submit btn btn-unique">PAY ₹<?php echo $total; ?></button>

                <!-- <button type="submit" class="btn btn-unique">Pay   ₹<?php echo $total; ?></button> -->
            </form>
            
        </div>

        <!-- Order Summary -->
        <div id="checkout-summary">
            <!-- Bill Container -->
            <div class="summary-contain">
                <!-- Content on the bill -->
                <div class="content">
                    <h2 class="head-3">Order Summary</h2>
                    <div class="price-list price-list-1">
                        <p class="head-4">Sub total</p>
                        <p class="head-4">₹<?php echo $subTotal; ?></p>
                    </div>
                    <div class="price-list price-list-2">
                        <p class="head-4">Shipping</p>
                        <p class="head-4">₹<?php echo $shipping; ?></p>
                    </div>
                    <div class="price-list price-list-3">
                        <p class="head-3 med">Total</p>
                        <p class="head-3 med">₹<?php echo $total; ?></p>
                    </div>
                </div>

            </div>

            <!-- Circular Layout Behind The Summary -->
            <div class="layout">
                
            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>

    <!-- Payment Scripts -->
    <script src="https://js.stripe.com/v2/"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="scripts/client.js" defer></script>
    
</body>
</html>

<!-- Other Scripts -->
<script src="scripts/search.js"></script>
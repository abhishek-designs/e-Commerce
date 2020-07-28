<?php
    // Fetching the user and product details from the URL
    $userId = $_GET['user_id'];
    $cartId = $_GET['cart_id'];

    // Database connection
    require '_mySQLConnect.php';

    $query = 'DELETE FROM `cart` WHERE `user_id`='.$userId.' AND `cart_id`='.$cartId;
    $res = mysqli_query($con,$query);
    
    if($res)
    {
        echo 'deletion successful';
        header('location: /Ecommerce/dist/cart.php');
    }
    else
    {
        die('failed'.mysqli_error($con));
    }
?>
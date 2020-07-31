<?php
    // Fetching the data's from the URL
    $isApplied = $_GET['coupon_applied'];
    $couponId = $_GET['coupon_id'];

    if(!isset($isApplied) || $isApplied!=true)
    {
        echo 'What the hell! coupon is not applied';
    }
    else
    {
        if(!isset($couponId))
        {
            echo 'coupon not found';
        }
        else
        {
            // Database Connection
            require '_mySQLConnect.php';

            // Executing query to fetch the discount amount through the coupon id
            $query = 'SELECT `discount_amt` FROM `offer_coupons` WHERE `coupon_id`='.$couponId;
            $res = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($res))
            {
                $discountAmt = $row['discount_amt'];
            }

            header('location: /Ecommerce/dist/cart.php?coupon_applied='.$isApplied.'&discount_amt='.$discountAmt);
        }
    }
?>
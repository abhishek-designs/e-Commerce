<?php
    $productId = $_GET['product_id'];
    $userId = $_GET['user_id'];

    // Database Connection
    require '_mySQLConnect.php';

    // Fetching user details
    $query = 'SELECT * FROM t2 where Cust_Id='.$userId;
    $res = mysqli_query($con,$query);
    $num = mysqli_num_rows($res);

    while($row = mysqli_fetch_assoc($res))
    {
        $userName = $row['Cust_Name'];
        $userMail = $row['Cust_Email'];
        $userPhone = $row['Phone_no'];
        $userPwd = $row['Cust_Pwd'];
    }

    // Fetching product details
    $query = 'SELECT * FROM products WHERE product_id='.$productId;
    $res2 = mysqli_query($con,$query);
    $num2 = mysqli_num_rows($res2);

    while($row2 = mysqli_fetch_assoc($res2))
    {
        $productName = $row2['product_name'];
        $productBrand = $row2['product_brand'];
        $productDesc = $row2['product_desc'];
        $productPrice = $row2['product_price'];
        $productQuantity = $row2['product_quantity'];
    }

    // Inserting all the fetched data into the cart table of the database
    $query = "INSERT INTO `cart` (`user_id`, `user_name`, `user_mail`, `user_phone_no`, `user_pwd`, `product_id`, `product_name`, `product_brand`, `product_price`, `product_quantity`, `updated_at`) VALUES ('".$userId."', '".$userName."', '".$userMail."', '".$userPhone."', '".$userPwd."', '".$productId."', '".$productName."', '".$productBrand."', '".$productPrice."', '".$productQuantity."', current_timestamp())";
    $insert = mysqli_query($con,$query);
    
    if($insert)
    {
        echo 'Cart updated';
    }
    else
    {
        die('Connection Error: '.mysqli_error($con));
    }


    


?>
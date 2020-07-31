<?php
    // Wether the question successfully registered or not
    $quesReg = 'false';

    // Fetching the data's from the URL
    $userId = $_POST['user_id'];
    $productId = $_POST['product_id'];
    $ques = $_POST['ques'];

    // Database Connection
    require '_mySQLConnect.php';

    // Now inserting all the fetched data into the questions table
    $query = 'INSERT INTO `users_ques` (`user_id`, `product_id`, `ques_desc`, `ques_asked_on`) VALUES ('.$userId.', '.$productId.', "'.$ques.'", current_timestamp())';
    $res = mysqli_query($con,$query);

    if($res)
    {
        $quesReg = 'true';
    }
    else
    {
        $quesReg = 'false'.mysqli_error($con);
    }

    // Fetching sub cat id
    $query2 = 'SELECT `sub_sub_cat_id` FROM `products` WHERE `product_id`='.$productId;
    $res2 = mysqli_query($con,$query2);
    
    while($row = mysqli_fetch_assoc($res2))
    {
        $subSubCatId = $row['sub_sub_cat_id'];
    }

    // echo $quesReg;
    header('location: /Ecommerce/dist/product_info.php?product_id='.$productId.'&sub_sub_cat_id='.$subSubCatId.'&ques_registered='.$quesReg);

?>
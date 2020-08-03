<?php
    // Wether the answer registered or not
    $ansRegistered = 'false';

    // Fetching the required data from the URL
    $userId = $_POST['user_id'];
    $productId = $_POST['product_id'];
    $quesId = $_POST['ques_id'];
    $ans = $_POST['ans'];

    // Database Connection
    require '_mySQLConnect.php';

    // Query to insert the answers according to the questions in the table
    $ansQuery = 'INSERT INTO `users_ans` (`ques_id`, `user_id`, `product_id`, `ans_desc`, `ans_posted_on`) VALUES ('.$quesId.', '.$userId.', '.$productId.', "'.$ans.'", current_timestamp())';
    $ansRes = mysqli_query($con,$ansQuery);

    if($ansRes)
    {
        $ansRegistered = 'true';
    }
    else
    {
        $ansRegistered = 'false '.mysqli_error($con);
    }

    // echo $ansRegistered;
    header('location: /Ecommerce/dist/productQna.php?product_id='.$productId.'&question_id='.$quesId.'&ans_registered='.$ansRegistered);
?>
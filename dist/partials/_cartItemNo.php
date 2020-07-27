<?php
    session_start();
    $userId = $_SESSION['userid'];

    // Database Connection
    require '_mySQLConnect.php';

    if(!isset($userId))
    {
        echo 'id not found';
    }
    else
    {

        $query = 'SELECT * FROM `cart` WHERE `user_id`='.$userId;
        $res = mysqli_query($con,$query);
        $num = mysqli_num_rows($res);
    
        echo $num;
    }


?>
<!-- Checking wether the search value is entered or not -->
<?php
    // Database Connection
    require '_mySQLConnect.php';

    $srchValue = $_GET['srch'];
    if(!isset($srchValue))
    {
        echo 'no search found';
    }
    else
    {
        // Query to insert all the searches in the database for future use
        $srchQuery = 'INSERT INTO `user_searches` (`srch_value`, `srch_time`) VALUES ("'.$srchValue.'", current_timestamp())';
        $srchRes = mysqli_query($con,$srchQuery);
        if($srchRes)
        {
            header('location: /Ecommerce/dist/product_results.php?srch='.$srchValue);
        }
        else
        {
            header('location: /Ecommerce/dist/product_results.php?srch='.$srchValue);
            die('Insertion failed '.mysqli_error($con));
        }
    }
?>
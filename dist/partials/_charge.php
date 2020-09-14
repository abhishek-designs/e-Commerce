<?php
    // Starting the session first
    session_start();

    // Fetching the amount
    $amount = $_POST['price-amt'];
    $priceAmt = round($amount);
    $priceAmt = $priceAmt.'00';

    // Fetching the token
    $token = $_POST['stripeToken'];

    // Checking wether the user is logged in or not
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    {
        // User is not logged in
        header('Location: /Ecommerce/dist/login.php');
    }
    else
    {
        // User is logged in
        // Fetching User's info through session
        $userId = $_SESSION['userid'];
        
        // Connecting to user's database
        require '_mySQLConnect.php';

        // Getting user's info form database
        $fetchQuery = 'SELECT * FROM `t2` WHERE `Cust_Id`='.$userId;
        $res = mysqli_query($con,$fetchQuery);

        while($row = mysqli_fetch_assoc($res))
        {
            $userName = $row['Cust_Name'];
            $userEmail = $row['Cust_Email'];
            $address = $row['Address'];
            $phoneNo = $row['Phone_no'];
        }

        // Activating the Stripe API
        require_once 'vendor/autoload.php';

        // Setting our API key
        \Stripe\Stripe::setApiKey('sk_test_51HKiBYLCI7SLTY8PWnbqWMlUaUsjeUMQ3AeRJNIxzMBWj5qIz9OKZUwxkBQaic18lQY1gGuKx8Hrl3QRbqVzMYRj00BB2sMwkc');

        // Creating Customer
        $customer = \Stripe\Customer::create(array(
            "name" => $userName,
            "email" => $userEmail,
            "source" => $token
        ));

        // Charging the customer
        $charge = \Stripe\Charge::create(array(
            "amount" => $priceAmt,
            "currency" => "inr",
            "description" => "clothes",
            "customer" => $customer->id
        ));

        // Redirect user to success page
        header('Location: /Ecommerce/dist/success.php?tid='.$charge->id.'&product_desc='.$charge->description.'&uid='.$userId);
    }

?>


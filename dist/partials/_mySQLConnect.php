<?php
    $username = 'abhishek';
    $server = 'localhost';
    $password = 'abhi@822';
    $dbName = 'test';

    $con = mysqli_connect($server,$username,$password,$dbName);
    if(!$con)
    {
        die('Connection Error: '.mysqli_connect_error($con));
    }
?>
<?php
    $username = 'abhi';
    $server = 'localhost';
    $password = 'abhi@368';
    $dbName = 'test';

    $con = mysqli_connect($server,$username,$password,$dbName);
    if(!$con)
    {
        die('Connection Error: '.mysqli_connect_error($con));
    }
?>
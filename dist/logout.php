<?php
    // Starting Session
    session_start();

    // First deleting the user data
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);

    // Destroying the session
    session_destroy();
    header('location: /Ecommerce/dist/login.php');
    ?>
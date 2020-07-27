<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $usermail = trimData($_POST['mail']);
        $userpwd = htmlspecialchars($_POST['pwd']);

        // Connecting to database
        require 'partials/_mySQLConnect.php';

        $query = 'select *from t2 where Cust_Email="'.$usermail.'"';
        $result = mysqli_query($con,$query);

        $num = mysqli_num_rows($result);
        
        if($num == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $verify = password_verify($userpwd,$row['Cust_Pwd']);
                if($verify)
                {

                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['userid'] = $row['Cust_Id'];
                    $_SESSION['username'] = $row['Cust_Name'];

                    
                    // Redirect to welcome page
                    header('location: /Ecommerce/dist/index.php');
                    $showError = false;
                }
                else
                {
                    $showError = 'Password is Invalid';
                    $showAlert = false;
                }   

            }
            // echo $showAlert;
        }
        else
        {
            $showError = 'User not found check your Email ID';
            $showAlert = false;
            // echo $showAlert;
        }
    }

    // trimming data to avoid useless characters
    function trimData($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login | eCommerce</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Search Bar -->
    <div class="search">
        <div class="container">
            <form action="">
                <div class="srch-field">
                    <i class="fa fa-search search-btn"></i>
                    <input type="text" name="srch" id="srch" class="srch" placeholder="Search">
                </div>
                <i class="fa fa-close cancel-btn"></i>
            </form>
        </div>
    </div>

    <!-- Show Alert according to the condition -->
    <?php
    if($showError)
    {
        echo '<div class="error-tab py-1">
            <div class="container">
            <p class="lead-3 light"><strong>Oops,</strong> '.$showError.'</p>
            <a href="#" class="close-btn light"><i class="fa fa-close"></i></a>
            </div>
            </div>';
    }
    if($showAlert)
    {
        echo '<div class="success-tab py-1">
            <div class="container">
            <p class="lead-3 light"><strong>'.$showAlert.'</strong> 😊</p>
            <a href="#" class="close-btn light"><i class="fa fa-close"></i></a>
            </div>
            </div>';   
    }

    ?>

    <!-- Sign In Box -->
    <section id="sign-in" class="my-2">
        <div class="shop-vector">
            <img src="img/illustrations/undraw_gone_shopping_vwmc.svg" alt="">
        </div>
        <div class="container">
            <div class="card card-2 bg-semi-med">
                <h2 class="head-3">REGISTERED CUSTOMERS</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-grp">
                        <label for="mail">Email <span class="red">*</span></label>
                        <input type="text" name="mail" id="mail" class="mail">
                    </div>
                    <div class="form-grp">
                        <label for="pwd">Password <span class="red">*</span></label>
                        <input type="password" name="pwd" id="pwd" class="pwd">
                        <span class="show-btn">
                            <i class="fa fa-eye"></i>
                            <input type="checkbox" name="toggler" id="toggler" class="toggler">
                        </span>
                    </div>
                    <div class="bottom-space">
                        <a href="#" class="lead-3">Forgot Your Password?</a>
                        <!-- <a href="#" class="btn btn-unique login-btn">login</a> -->
                        <button type="submit" class="btn btn-med login-btn" disabled>Login</button>
                    </div>
                </form>
            </div>
            <div class="card card-1 bg-light">
                <h2 class="head-3">NEW CUSTOMERS</h2>
                <!-- <p class="lead-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nihil harum tenetur quam excepturi, magnam odit libero maxime illo cupiditate velit id ab quos iure dolorum itaque amet, vel ratione unde voluptatem provident ut! Laudantium quod tempore velit voluptatum eaque veritatis cupiditate ipsa odit vitae! Modi ducimus dolore nostrum ratione?</p> -->
                <a href="sign_up.php" class="btn btn-unique">Create Account</a>
            </div>
            
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
<script src="scripts/login.js"></script>
<script src="scripts/alert_tab.js"></script>
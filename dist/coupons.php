<?php
    if(!isset($_SESSION))
    {
        echo '';
    }
    else
    {
        session_start();

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/coupons.css">
    <title>Select your coupons</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Database Connection -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Coupons Section -->
    <section id="coupons-section" class="bg-light">
        <div class="container">
            <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                {
                    echo 'login bro';
                }
                else
                {
                    if(!isset($_SESSION['userid']))
                    {
                        echo 'no user found';
                    }
                    else
                    {
                        $userId = $_SESSION['userid'];
                        $user = $_SESSION['username'];
                    }
                }
            ?>
            <h2 class="head-1 main">Hey, <?php echo $user; ?> grab your coupon :)</h2>
            <div class="coupons">
                <?php
                    $query = 'SELECT * FROM `offer_coupons` WHERE `user_id`='.$userId;
                    $res = mysqli_query($con,$query);
                    $num = mysqli_num_rows($res);

                    if($num > 0)
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $couponId = $row['coupon_id'];
                            $couponTitle = $row['offer_title'];
                            $couponDesc = $row['offer_desc'];
                            $couponAmt = $row['discount_amt'];

                            echo '<div class="coupons-pane">
                                    <div class="coupons-pane-desc">
                                        <p class="head-2">'.$couponTitle.'</p>
                                        <p class="lead-3">'.$couponDesc.'</p>
                                        <a href="partials/_couponApplied.php?coupon_applied=true&coupon_id='.$couponId.'" class="btn btn-unique">APPLY</a>
                                    </div>
                                    <div class="coupons-pane-discount">
                                        <h2 class="head-1">'.$couponAmt.'% <span class="lead-3">off*</span></h2>
                                    </div>
                                    <div class="coupons-pane-mesh">
                
                                    </div>
                                </div>';                           

                        }
                    }
                    else
                    {
                        echo 'Sorry no coupons found right now';
                    }
                ?>


                <!-- <div class="coupons-pane">
                    <div class="coupons-pane-desc">
                        <p class="head-2">Welcome coupon</p>
                        <p class="lead-3">Get flat 40% off on all products.Enjoy!!</p>
                        <a href="/" class="btn btn-unique">APPLY</a>
                    </div>
                    <div class="coupons-pane-discount">
                        <h2 class="head-1">40% <span class="lead-3">off*</span></h2>
                    </div>
                    <div class="coupons-pane-mesh">

                    </div>
                </div> -->
            </div>
            
            <div class="img-contain">
                <img src="img/Illustrations/undraw_happy_birthday_s72n.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>
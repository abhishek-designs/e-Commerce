<?php
    if(!isset($_SESSION))
    {
        echo '';
    }
    else
    {
        session_start();
        // echo $_SESSION['username'];

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/products.css">
    <title>Clothes</title>
</head>

<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Fetching the category id from the URL -->
    <?php $subSubCatId = $_GET['sub_sub_cat_id']; ?>

    <!-- Database Connection -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Main product section -->
    <div id="products" class="products py-1">
        <div class="products-setting">
            <!-- User can filter products according to their wish -->
            <div class="products-setting-box">
                <h2 class="head-line-1">Colors</h2>
                <ul>
                    <li><a href="">Red</a></li>
                    <li><a href="">Blue</a></li>
                    <li><a href="">Violet</a></li>
                    <li><a href="">Green</a></li>
                </ul>
            </div>

            <div class="products-setting-box">
                <h2 class="head-line-1">Sizes</h2>
                <ul>
                    <li><a href="">S (Small)</a></li>
                    <li><a href="">M (Medium)</a></li>
                    <li><a href="">L (Large)</a></li>
                    <li><a href="">XL (Extra large)</a></li>
                </ul>
            </div>


        </div>
        <div class="products-showcase">
            <!-- This message should when cart is updated -->
            <div class="cart-update-msg">
                <div class="msg-content">
                    <p class="head-3">Your cart updated</p>
                </div>
            </div>
            
            <?php 

                $query = 'SELECT sub_sub_cat_name FROM sub_sub_categories WHERE sub_sub_cat_id='.$subSubCatId;
                $res = mysqli_query($con,$query);
                $num = mysqli_num_rows($res);

                if($num == 1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['sub_sub_cat_name'];

                    echo '<h2 class="head-2">'.$title.'</h2>';
                }
                else
                {
                    echo '<h2 class="head-2">No title found</h2>';
                }

            ?>
            <?php
                $numFound = false;
                $query = 'SELECT * FROM products';
                $total1 = mysqli_query($con,$query);
                $totalProducts = mysqli_num_rows($total1);
                if($totalProducts > 0)
                {
                    $numFound = true;
                }

                $query = 'SELECT * FROM products WHERE sub_sub_cat_id = '.$subSubCatId;
                $total2 = mysqli_query($con,$query);
                $totalCatProducts = mysqli_num_rows($total2);
                if($totalCatProducts > 0)
                {
                    $numFound = true;
                }
                
                if($numFound)
                {
                    echo '<p class="lead-3 med">(Showing '.$totalCatProducts.' products of '.$totalProducts.' products)</p>';

                }
                else
                {
                    echo '';

                }
            ?>
            
            <!-- Products are showcased here -->
            <div class="products-showcase-contain">

            <?php
                $query = 'SELECT * FROM products WHERE sub_sub_cat_id='.$subSubCatId;
                $res2 = mysqli_query($con,$query);
                $num = mysqli_num_rows($res2);
                
                if($num > 0)
                {
                    while($row = mysqli_fetch_assoc($res2))
                    {
                        $productId = $row['product_id'];
                        $productBrand = $row['product_brand'];
                        $productName = $row['product_name'];
                        $productPrice = $row['product_price'];
                        $productMrpPrice = $row['product_price_mrp'];

                        echo '<div class="box box-1">
                            <div class="upper-tab">
                                <div class="img-contain">
                                    <span class="product-id">'.$productId.'</span>
                                    <a href="product_info.php?product_id='.$productId.'&sub_sub_cat_id='.$subSubCatId.'" class="product-info">
                                        <img src="./img/Products/'.$productId.$subSubCatId.'.png" alt="product'.$productId.'">
                                    </a>
                                </div>
                            </div>
                            <div class="bottom-tab">
                                <div class="content-pc">
                                    <h3 class="head-4">'.$productBrand.'</h3>
                                    <p class="lead-4 med">'.$productName.'</p>
                                </div>
                                <div class="content-m">
                                    <h3 class="head-3">'.$productName.'</h3>
                                </div>
                                <div class="price-tab">
                                    <p class="lead-2 main">₹'.$productPrice.'</p>
                                    <p class="lead-3">₹'.$productMrpPrice.'</p>
        
                                </div>
                                <a class="btn btn-light fav"><i class="far fa-heart main fav-1"></i></a>
                            </div>
                            <a class="cart-tab">
                                <p class="lead-3 light">ADD TO CART</p>
                            </a>
                        </div>';

                    }
                }
                else
                {
                    echo 'No products found';
                }

            ?>
                <!-- <div class="box box-2">
                    <div class="upper-tab">
                        <div class="img-contain">
                            <img src="./img/Clothes/shirt.png" alt="">
                        </div>
                    </div>
                    <div class="bottom-tab">
                        <div class="content-pc">
                            <h3 class="head-4">Diesel</h3>
                            <p class="lead-4 med">Men check shirt</p>
                        </div>
                        <div class="content-m">
                            <h3 class="head-3">Men check shirt</h3>
                        </div>
                        <div class="price-tab">
                            <p class="lead-2 main">₹599</p>
                            <p class="lead-3">₹999</p>

                        </div>
                        <a class="btn btn-light fav"><i class="far fa-heart main fav-1"></i></a>
                        <a class="cart-tab">
                            <p class="lead-3">ADD TO CART</p>
                        </a>
                    </div>
                </div>
                <div class="box box-3">

                </div>
                <div class="box box-4">

                </div> -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
<!-- <script src="scripts/updateCart.js"></script> -->
<script type='text/javascript'>

    // Fetching the user id through client
    var userId = <?php echo $_SESSION['userid']; ?>;
    

    // Accessing the cart quantity showing component
    const nav = document.querySelector('.navbar');
    const cartNum = nav.querySelector('.cart-indicate');

    // Accessing the parent element of the btn first
    const parent = document.querySelector('.products-showcase');
    const cartBtn = parent.querySelectorAll('.cart-tab');

    // Accessing the cart notification tab
    const cartMsg = document.querySelector('.cart-update-msg');

    // Fetching each cart btn
    for(let i=0; i<cartBtn.length; i++)
    {
        var btn = cartBtn[i];
        
        // Making the btn functional
        btn.addEventListener('click',updateCart);
    }

    function updateCart(event)
    {
        // Fetching product id through client side
        var productBox = this.parentElement;
        var productIdContain = productBox.querySelector('.product-id');
        var productId = productIdContain.innerText;
        // console.log('user id '+userId+' selected the product '+productId);


        var xhr = new XMLHttpRequest();
        xhr.open("GET","partials/_updateCart.php?product_id="+productId+"&user_id="+userId,true);
        xhr.send();

        xhr.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                cartMsg.style.animationName = 'pop-in';
        
                setTimeout(function(){
                    cartMsg.style.animationName = 'pop-out';
                },3000)
            }
        }

        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET","partials/_cartItemNo.php",true);
        xhr2.send();
        
        xhr2.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                cartNum.innerText = this.responseText;
            }
        }

    }

</script>

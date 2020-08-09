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
    <link rel="stylesheet" href="css/product_results.css">
    <title>Your results</title>
</head>

<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Database Connection -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Fetching the keyword from the URL first -->
    <?php
        $keyword = $_GET['srch'];

        if(!isset($keyword))
        {
            echo 'no search keyword found';
        }
        else
        {
            // Query to fetch the products according to the search keyword
            $keyQuery = 'SELECT * FROM `products` WHERE `product_keyword` LIKE "%'.$keyword.'%"';
            $keyRes = mysqli_query($con,$keyQuery);
            $productNum = mysqli_num_rows($keyRes);

            // Query to get the total number of all the products present in the store
            $totalQuery = 'SELECT * FROM `products`';
            $totalRes = mysqli_query($con,$totalQuery);
            $totalProductsNum = mysqli_num_rows($totalRes);

        }
    ?>
    <!-- Showing all the products according to the search keyword by users -->
    <div id="search-results" class="py-1">
        <!-- This message should be shown when cart is updated -->
        <div class="cart-update-msg">
            <div class="msg-content">
                <p class="head-3">Your cart updated</p>
            </div>
        </div>

        <div class="container">
            <h2 class="head-2 dark">Showing search results related to '<?php echo $keyword; ?>'</h2>
            <p class="lead-2 med">( Products 1-<?php echo $productNum; ?> of <?php echo $totalProductsNum; ?> )</p>

            
                <?php
                    if($productNum > 0)
                    {
                        echo '<!-- This section will show all the products -->
                        <div class="result-products">';
                            // If searched product found
                            while($row = mysqli_fetch_assoc($keyRes))
                            {
                                $productId = $row['product_id'];
                                $productName = $row['product_name'];
                                $productBrand = $row['product_brand'];
                                $productPrice = $row['product_price'];
                                $productMrpPrice = $row['product_price_mrp'];

                                // Query to fetch the sub category id for each product
                                $catQuery = 'SELECT `sub_sub_cat_id` FROM `products` WHERE `product_id`='.$productId;
                                $catRes = mysqli_query($con,$catQuery);

                                while($catRow = mysqli_fetch_assoc($catRes))
                                {
                                    $subSubCatId = $row['sub_sub_cat_id'];
                                }
                                
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
                                        <p class="lead-3">ADD TO CART</p>
                                    </a>
                                </div>';
                                
                            }
                            echo '</div>';
                    }
                    else
                    {
                        // If searched product not found
                        echo '<div class="no-result bg-semi-med py-1 my-1">
                            <div class="container">
                                <h2 class="head-2 med">Sorry, no result found !!</h2>
                                <p class="lead-2 med">We can add this product for you as soon as possible :)</p>
                            </div>
                        </div>';
                    }
                ?>

                <!-- <div class="box box-2">
                    <div class="upper-tab">
                        <div class="img-contain">
                            <span class="product-id">401</span>
                            <a href="product_info.php?product_id='.$productId.'&sub_sub_cat_id='.$subSubCatId.'" class="product-info">
                                <img src="./img/Products/401301.png" alt="product'.$productId.'">
                            </a>
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
                    </div>
                    <a class="cart-tab">
                        <p class="lead-3">ADD TO CART</p>
                    </a>
                </div> -->

            
        </div>
    </div>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>

<script type='text/javascript'>

    // Fetching the user id through client
    var userId = <?php echo $_SESSION['userid']; ?>;
    

    // Accessing the cart quantity showing component
    const nav = document.querySelector('.navbar');
    const cartNum = nav.querySelector('.cart-indicate');

    // Accessing the parent element of the btn first
    const parent = document.querySelector('.result-products');
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>Welcome | eCommerce</title>
</head>

<body>
    <!-- NavBar -->
    <?php require 'partials/_navbar.php'; ?>
    <!-- Connecting to database -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Creating Slider -->
    <header id="slider" class="slider">
        <div class="slider-box">
            <div class="slide"
                style="background-image:url(./img/Compressed/brown-teddy-bear-on-brown-wooden-bench-outside-207891-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals!!!</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide"
                style="background-image:url(./img/Compressed/model-vehicle-classic-oldtimer-35619-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide active"
                style="background-image:url(./img/Compressed/photo-of-nike-shoes-1598505-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide"
                style="background-image:url(./img/Compressed/apple-earphones-iphone-iphone-x-805922-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url(./img/Compressed/shirts-428600_1920-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide"
                style="background-image:url(./img/Compressed/woman-in-gray-sweater-holding-white-headphones-3756948-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Slider Controllers -->
        <div class="controls">
            <div class="prev"><i class="fa fa-chevron-left light"></i></div>
            <div class="next"><i class="fa fa-chevron-right light"></i></div>
        </div>

        <!-- Slider Indicators -->
        <div class="indicator">

        </div>
    </header>

    <!-- Home Sections -->
    <div id="home">
        <!-- Section A -->
        <section id="home-a" class="py-5">
            <div class="container">

                <div class="card">
                    <div class="img card-1"
                        style="background:url('./img/Small_img/selective-focus-photography-of-classic-car-die-cast-models-2691478.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/selective-focus-photography-of-classic-car-die-cast-models-2691478.jpg" alt="deal1"> -->
                    </div>

                    <div class="overlay-content">

                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-2"
                        style="background:url('./img/Small_img/photo-of-nike-shoes-1598505.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/photo-of-nike-shoes-1598505.jpg" alt="deal2"> -->
                    </div>

                    <div class="overlay-content">

                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-3"
                        style="background:url('./img/Small_img/photo-of-woman-wearing-denim-jacket-3250718.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/photo-of-woman-wearing-denim-jacket-3250718.jpg" alt="deal3"> -->
                    </div>

                    <div class="overlay-content">

                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-4"
                        style="background:url('./img/Small_img/close-up-photo-of-wristwatch-2113994.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/close-up-photo-of-wristwatch-2113994.jpg" alt="deal4"> -->
                    </div>

                    <div class="overlay-content">

                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-5"
                        style="background:url('./img/Small_img/work-nature-blossom-growth-plant-house-883784-pxhere.com.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/work-nature-blossom-growth-plant-house-883784-pxhere.com.jpg" alt="deal4"> -->
                    </div>

                    <div class="overlay-content">

                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section B -->
        <section id="home-b" class="py-1 bg-light">
            <div class="container">
                <div class="content">
                    <h3 class="head-1 main">Prevention is better than Cure !!</h3>
                    <p class="lead-1">Get 40% off on Health & Sanitization products.</p>
                    <a href="#" class="btn btn-unique">check now</a>
                </div>
                <div class="img-contain">
                    <img src="./img/Illustrations/undraw_medicine_b1ol.svg" alt="">
                </div>
            </div>
        </section>

        <!-- Section C  -->
        <section id="home-c" class="py-3 bg-semi-med">
            <div class="container">
                <h2 class="head-line-1">NEW COLLECTIONS</h2>
                <p class="lead-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore error cum ratione
                    possimus culpa! Eius!</p>


                <div class="product ">

                    <?php 
                        // Executing fetching query
                        $query = 'select *from products';
                        $res = mysqli_query($con,$query);

                        // Analysing the number of records
                        $num = mysqli_num_rows($res);

                        // Fetching the products from database and showing to the user
                        if($num > 0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $productName = $row['product_name'];
                                $productDesc = $row['product_desc'];
                                $productPrice = $row['product_price'];
                                $productPriceMrp = $row['product_price_mrp'];
                                $productImg = $row['product_img'];

                                echo '<div class="box product-1">
                                        <div class="upper-tab">
                                            <div class="img-contain">
                                                <img src="./img/'.$productImg.'" alt="">
                                            </div>
                                        </div>
                                        <div class="bottom-tab">
                                            <div class="content-pc">
                                                <h3 class="head-4">'.$productName.'</h3>
                                                <p class="lead-4 med">'.substr($productDesc,0,50).'...</p>
                                            </div>
                                            <div class="content-m">
                                                <h3 class="head-3">'.$productName.'</h3>
                                            </div>
                                            <div class="price-tab">
                                                <p class="lead-2 main">₹'.$productPrice.'</p>
                                                <p class="lead-3">₹'.$productPriceMrp.'</p>
                                                
                                            </div>
                                            <a  class="btn btn-light fav"><i class="far fa-heart main fav-1"></i></a>
                                            <a class="cart-tab">
                                                <p class="lead-3">ADD TO CART</p>
                                            </a>
                                        </div>
                                   
                                    </div>';
                            }
                        }
                        else
                        {
                            echo 'No product stored';
                        }
                    ?>

                </div>
            </div>
        </section>

        <!-- Electronics Section -->
        <section class="electronics py-2 bg-light">
            <!-- Color Mesh -->
            <div class="mesh">

            </div>
            <div class="mesh">

            </div>
            <!-- Vector Image -->
            <img src="img/Illustrations/undraw_Mobile_app_p3ts.svg" alt="" class="vector-art">
            <div class="product">
                <!-- Product Sub-Category -->
                <div class="product-contain">
                    <h2 class="head-3 light">Upto 50% off on electronic gadgets</h2>
                    <div class="product-groups">

                        <div class="product-box">
                            <img src="img/Electronics/phone.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Smartphones</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>

                        </div>

                        <div class="product-box">
                            <img src="img/Electronics/laptop.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Laptops</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>

                        </div>

                        <div class="product-box">
                            <img src="img/Electronics/television.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Televisions</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>

                        </div>

                        <div class="product-box">
                            <img src="img/Electronics/gear.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Gears</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product Sub-Category
                <div class="product-contain bg-light">
                    <h2 class="head-3">Upto 20% off on Electronic Accessories</h2>
                    <div class="product-box">
                        
                    </div>

                    <div class="product-box">

                    </div>

                    <div class="product-box">

                    </div>

                    <div class="product-box">

                    </div>
                </div> -->
            </div>
        </section>

        <!-- Section D -->
        <section id="home-d">
            <div class="container">
                <div class="content">
                    <h2 class="head-1 light">30% Discount on Groceries</h2>
                    <h2 class="lead-1 light">During Lockdown</h2>
                    <a href="" class="btn btn-unique">Explore</a>
                </div>
            </div>
        </section>

        <!-- Section E -->
        <section id="home-e" class="py-3 bg-light">
            <div class="container">
                <div class="content">
                    <h3 class="head-1 main">Let's Stay United and Fight this Pandemic !!!</h3>
                    <p class="lead-1">Awesome deals on Face Masks check it out.</p>
                    <a href="#" class="btn btn-unique">Shop Now</a>
                </div>
                <div class="img-contain">
                    <img src="./img/Illustrations/image-from-rawpixel-id-2285492-png.png" alt="">
                </div>
            </div>
        </section>

        <!-- Section F -->
        <section id="home-f" class="py-3 bg-semi-med">
            <div class="container">
                <h2 class="head-line-1">DEALS OF THE DAY</h2>
                <p class="lead-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, est architecto
                    ut quas culpa doloremque?</p>

                <div class="product">

                    <?php  
                        $query2 = 'select*from products_2';
                        $res2 = mysqli_query($con,$query2);

                        $num = mysqli_num_rows($res2);

                        if($num > 0)
                        {
                            while($row = mysqli_fetch_assoc($res2))
                            {
                                $productName2 = $row['product_name'];
                                $productDesc2 = $row['product_desc'];
                                $productPrice2 = $row['product_price'];
                                $productPriceMRP2 = $row['product_price_mrp'];
                                $productImg2 = $row['product_img'];

                                echo '<div class="box product-4">
                                        <div class="upper-tab">
                                            <div class="img-contain">
                                                <img src="./img/'.$productImg2.'" alt="">
                                            </div>
                                        </div>
                                        <div class="bottom-tab">
                                            <div class="content-pc">
                                                <h3 class="head-4">'.$productName2.'</h3>
                                                <p class="lead-4 med">'.$productDesc2.'</p>
                                            </div>
                                            <div class="content-m">
                                                <h3 class="head-3">'.$productName2.'</h3>
                                            </div>
                                            <div class="price-tab">
                                                <p class="lead-2 main">₹'.$productPrice2.'</p>
                                                <p class="lead-3">₹'.$productPriceMRP2.'</p>
                
                                            </div>
                                        
                                            <a class="btn btn-light fav"><i class="far fa-heart main fav-4"></i></a>
                                            <a class="cart-tab">ADD TO CART</a>
                                        </div>
                                    </div>';

                            }
                        }
                        else
                        {
                            echo 'No records found';
                        }
                    ?>

                    <!-- Template for future use -->
                    <!-- <div class="box product-5">
                        <div class="upper-tab">
                            <div class="img-contain">
                                <img src="./img/Perfumes/perfume1.png" alt="">
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="far fa-star main"></i>
                                <i class="far fa-star main"></i>
                            </div>
                            <div class="content-pc">
                                <h3 class="head-3">Women's Perfume</h3>
                                <p class="lead-3 med">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <div class="content-m">
                                <h3 class="head-3">Leather Hand Bag</h3>
                            </div>
                        </div>
                        <div class="bottom-tab">
                            <div class="price-tab">
                                <p class="lead-1 main">₹1499</p>
                                <p class="lead-3">₹1999</p>

                            </div>
                            <div class="btn-tab">
                                <a class="btn btn-primary cart"><i class="fa fa-cart-plus"></i></a>
                                <a class="btn btn-light fav"><i class="far fa-heart main fav-5"></i></a>

                            </div>
                        </div>

                    </div> -->

                </div>

            </div>
        </section>

        <!-- Fashion Section -->
        <section class="fashion py-2 bg-light">
            <!-- Color Mesh -->
            <div class="mesh">

            </div>
            <div class="mesh">

            </div>
            <!-- Vector Image -->
            <img src="img/Illustrations/undraw_eco_conscious_1y58.svg" alt="" class="vector-art">
            <div class="product">
                <!-- Product Sub-Category -->
                <div class="product-contain">
                    <h2 class="head-3 light">Upto 20% off on Fashion and clothings</h2>
                    <div class="product-groups">

                        <div class="product-box">
                            <img src="img/Clothes/hoodie2.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Hoodies</p>
                                <a href="products.php" class="btn btn-transparent">Check Out</a>
                            </div>

                        </div>

                        <div class="product-box">
                            <img src="img/Clothes/sweater.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Sweaters</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>

                        </div>

                        <div class="product-box">
                            <img src="img/Clothes/shirt.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Shirts</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>

                        </div>

                        <div class="product-box">
                            <img src="img/Perfumes/perfume2.png" alt="">
                            <!-- Product-box overlay -->
                            <div class="product-box-overlay">
                                <p class="lead-2">Perfumes</p>
                                <a href="#" class="btn btn-transparent">Check Out</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Section G -->
        <section id="home-g" class="py-3 bg-light">
            <div class="container">
                <div class="services">
                    <h2 class="head-line-1">OUR SERVICES</h2>
                    <ul>
                        <li>
                            <div class="icon-tab">
                                <div class="icon-contain">
                                    <i class="fa fa-user"></i>
                                </div>

                            </div>
                            <span class="content">
                                <h3 class="head-3">24/7 online free support</h3>
                                <p class="lead-2 med">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                                    ratione sequi at sapiente excepturi, animi earum minus atque iste iure!</p>
                            </span>
                        </li>
                        <li>
                            <div class="icon-tab">

                                <div class="icon-contain">
                                    <i class="fa fa-bus"></i>
                                </div>
                            </div>
                            <span class="content">
                                <h3 class="head-3">Free shipping</h3>
                                <p class="lead-2 med">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                                    ratione sequi at sapiente excepturi, animi earum minus atque iste iure!</p>
                            </span>
                        </li>
                        <li>
                            <div class="icon-tab">
                                <div class="icon-contain">
                                    <i class="fa fa-money"></i>
                                </div>

                            </div>
                            <span class="content">
                                <h3 class="head-3">100% money back</h3>
                                <p class="lead-2 med">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                                    ratione sequi at sapiente excepturi, animi earum minus atque iste iure!</p>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="feedback bg-semi-med">
                    <div class="slider-box">

                        <div class="slide active">
                            <div class="feedback-content">
                                <div class="image">
                                    <img src="./img/Faces/Untitled design.png" alt="">

                                </div>
                                <p class="lead-2 med">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit similique voluptatem voluptatum laudantium voluptates excepturi earum
                                    praesentium ab pariatur explicabo asperiores odit, saepe dolore maiores, beatae
                                    veritatis possimus incidunt illo temporibus esse inventore aliquid odio repellendus
                                    accusamus. Nobis dolorum sint sed neque? Minima, dicta! Aut aliquam numquam vero
                                    eligendi dicta.</p>
                                <p class="name lead-2">- User1</p>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="feedback-content">
                                <div class="image">
                                    <img src="./img/Faces/Untitled design (1).png" alt="">

                                </div>
                                <p class="lead-2 med">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit similique voluptatem voluptatum laudantium voluptates excepturi earum
                                    praesentium ab pariatur explicabo asperiores odit, saepe dolore maiores, beatae
                                    veritatis possimus incidunt illo temporibus esse inventore aliquid odio repellendus
                                    accusamus. Nobis dolorum sint sed neque? Minima, dicta! Aut aliquam numquam vero
                                    eligendi dicta.</p>
                                <p class="name lead-2">- User2</p>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="feedback-content">
                                <div class="image">
                                    <img src="./img/Faces/Untitled design (2).png" alt="">

                                </div>
                                <p class="lead-2 med">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit similique voluptatem voluptatum laudantium voluptates excepturi earum
                                    praesentium ab pariatur explicabo asperiores odit, saepe dolore maiores, beatae
                                    veritatis possimus incidunt illo temporibus esse inventore aliquid odio repellendus
                                    accusamus. Nobis dolorum sint sed neque? Minima, dicta! Aut aliquam numquam vero
                                    eligendi dicta.</p>
                                <p class="name lead-2">- User3</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <div class="controls">
                        <div class="prev"><i class="fa fa-chevron-left light"></i></div>
                        <div class="next"><i class="fa fa-chevron-right light"></i></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section H -->
        <section id="home-h" class="bg-semi-med py-3">
            <div class="container">
                <div class="content">
                    <h3 class="head-2">NEWSLETTER</h3>
                    <p class="lead-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, doloremque?</p>
                </div>
                <div class="field">
                    <input type="text" name="news" id="news" placeholder="Your Email">
                    <a href="" class="btn btn-unique">Subscribe</a>
                </div>
            </div>
        </section>

    </div>

    <!-- Cart -->
    <section id="cart-section" class="bg-light py-3">
        <div class="container">
            <div class="carts">

                <!-- This UI will be shown when there is no item in the cart -->
                <div class="no-items bg-semi-med">
                    <i class="fa fa-frown"></i>
                    <h2 class="head-2">No Item Added</h2>
                </div>
                <div class="carts-items">
                    <h2 class="head-2">MY CART(0)</h2>

                </div>

                <div class="carts-billing">
                    <div class="pricing">
                        <h3 class="head-3">Price Details</h3>
                        <div class="tab total-tab">
                            <p class="lead-3">Total</p>
                            <span class="total lead-3 red">+ 1300</span>
                        </div>
                        <div class="tab discount-tab">
                            <p class="lead-3">Discount</p>
                            <span class="discount lead-3 green">40%</span>
                        </div>
                        <div class="tab shipping-tab">
                            <p class="lead-3">Delivery Charges</p>
                            <span class="shipping lead-3 red">+ 50</span>
                        </div>
                        <div class="tab grand-total">
                            <p class="lead-1">Total</p>
                            <span class="grand lead-1">₹0</span>
                        </div>
                    </div>

                    <a href="#" class="btn btn-unique">Place Order</a>

                    <div class="coupon">
                        <h3 class="head-3">Options</h3>
                        <div class="coupon-tab">
                            <p class="head-4">Coupons</p>
                            <a href="#" class="btn btn-primary">Apply Coupon</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>
<!-- <div>Icons made by <a href="https://www.flaticon.com/authors/kiranshastry" title="Kiranshastry">Kiranshastry</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
<!-- <a href="https://www.freepngimg.com/png/13417-dress-png-hd">Dress Png Hd FreePNGImg.com</a> -->
<!-- Embeded Scripts -->
<!-- <script src="scripts/slider.js"></script> -->
<script src="scripts/cart.js" async></script>
<script src="scripts/search.js"></script>
<script src="scripts/fav_btn.js"></script>
<script src="scripts/scroll.js"></script>
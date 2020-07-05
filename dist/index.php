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
    <!-- Navigation Bar (PC/Laptop) -->
    <nav class="navbar py-1">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="./img/shopping-cart.png" alt="logo">
                    <h1 class="head-2">MAUJ</h1>
                </a>
                
            </div>

            <div class="menu-list">
                <ul>
                    <li>
                        <a href="#">Home</a>
                        <span class="bottom-line"></span></li>
                    <li>Products 
                        <i class="fa fa-sort-down"> 
                        <span class="bottom-line"></span></i>
                        <div class="sub-list">
                            <div class="clothings">
                                <h2 class="lead-1 main">Clothings</h2>
                                <ul>
                                    <li> <a href="">Saree</a></li>
                                    <li> <a href="">Jeans</a></li>
                                    <li> <a href="">T-Shirts</a></li>
                                    <li> <a href="">Skirts</a></li>
                                    <li> <a href="">Kurtas</a></li>
                                    <li> <a href="">Frock</a></li>
                                </ul>
                            </div>
                            <div class="electronics">
                                <h2 class="lead-1 main">Electronics</h2>
                                <ul>
                                    <li> <a href="">Smartphones</a></li>
                                    <li> <a href="">Headphones</a></li>
                                    <li> <a href="">Television</a></li>
                                    <li> <a href="">Laptops</a></li>
                                </ul>
                            </div>
                            <div class="stationary">
                                <h2 class="lead-1 main">Stationary</h2>
                                <ul>
                                    <li> <a href="">Books</a></li>
                                    <li> <a href="">Eng. Materials</a></li>
                                    <li> <a href="">Pencil</a></li>
                                    <li> <a href="">Rubber</a></li>
                                    <li> <a href="">Pen & Marker</a></li>
                                    <li> <a href="">Draw. Sheets</a></li>
                                </ul>
                            </div>
                            <div class="pharmecy">
                                <h2 class="lead-1 main">Pharmecy</h2>
                                <ul>
                                    <li> <a href="">Ayurvedic</a></li>
                                    <li> <a href="">Homeopathic</a></li>
                                    <li> <a href="">Alopathic</a></li>
                                </ul>
                            </div>
                            <div class="furniture">
                                <h2 class="lead-1 main">Furniture</h2>
                                <ul>
                                    <li> <a href="">Dining Tables</a></li>
                                    <li> <a href="">Beds</a></li>
                                    <li> <a href="">Sofas</a></li>
                                    <li> <a href="">Chairs</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>Services 
                        <i class="fa fa-sort-down"></i>
                        <span class="bottom-line"></span>
                        <div class="sub-list">
                            <div class="booking">
                                <h2 class="lead-1 main">Bookings</h2>
                                <ul>
                                    <li> <a href="">Hotels</a></li>
                                    <li> <a href="">Cabs</a></li>
                                    <li> <a href="">Wedding Gardens</a></li>
                                    <li> <a href="">Gym</a></li>
                                    <li> <a href="">Coachings</a></li>
                                </ul>
                            </div>
                            <div class="tourism">
                                <h2 class="lead-1 main">Tourism</h2>
                                <ul>
                                    <li> <a href="">National</a></li>
                                    <li> <a href="">International</a></li>
                                </ul>
                            </div>
                            <div class="photo">
                                <h2 class="lead-1 main">Photography</h2>
                                <ul>
                                    <li> <a href="">Wedding</a></li>
                                    <li> <a href="">Ocassional</a></li>
                                </ul>
                            </div>
                            <div class="other">
                                <h2 class="lead-1 main">Other</h2>
                                <ul>
                                    <li> <a href="">Home Renovation</a></li>
                                    <li> <a href="">Catering</a></li>
                                    <li> <a href="">Beauty Parlour</a></li>
                                    <li> <a href="">Laundary</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">About</a>
                        <span class="bottom-line"></span>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                        <span class="bottom-line"></span>
                    </li>
                </ul>
                
            </div>

            <div class="features">
                <i class="fa fa-search srch-btn"></i>
                <a href="login.html"><i class="fa fa-user"></i></a>
                <a href="#" class="shopping"><i class="fa fa-shopping-cart"></i>
                    <span class="cart-indicate">0</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Navigation Bar (Smartphone/Tablet) -->
    <nav class="navbar-m py-1 bg-light">
        <div class="container">
            <div class="menu">
                <input type="checkbox" class="toggler">
                <div class="hamburger">
                    <div>
                        
                    </div>
                </div>
                <div class="menu-contain">
                    <span class="user-name">Hello, Guest</span>
                        <div>
                            <div class="menu-box bg-light">
                                <li class="item">
                                    <a href="index.php" class="list list-1">Home</a>
                                </li>
        
                                <li class="item" id="item-2">
                                    <a href="#/item-2" class="list list-2">Products</a>
        
                                    <div class="sub-menu">
                                        <a href="#" class="sub-btn">Clothings</a>
                                        <a href="#" class="sub-btn">Electronics</a>
                                        <a href="#" class="sub-btn">Stationary</a>
                                        <a href="#" class="sub-btn">Pharmecy</a>
                                        <a href="#" class="sub-btn">Furniture</a>
                                    </div>
                                </li>
        
                                <li class="item" id="item-3">
                                    <a href="#/item-3" class="list list-3">Services</a>
        
                                    <div class="sub-menu">
                                        <a href="" class="sub-btn">Bookings</a>
                                        <a href="" class="sub-btn">Tourism</a>
                                        <a href="" class="sub-btn">Photography</a>
                                        <a href="" class="sub-btn">Others</a>
                                    </div>
                                </li>
        
                                <li class="item" id="item-4">
                                    <a href="#/item-4" class="list list-4">About</a>
                                </li>
        
                                <li class="item" id="item-5">
                                    <a href="#/item-5" class="list list-5">Contact</a>
                                </li>
        
                                <li class="item">
                                    <a href="login.php" class="list list-6">Account</a>
                                </li>
        
                            </div>
                        </div>
                    </div>


            </div>

            <div class="logo">
                <a href="index.php">
                    <img src="./img/shopping-cart.png" alt="logo">
                    <h1 class="head-1">MAUJ</h1>
                </a>
            </div>

            <div class="srch-contain">
                <i class="fa fa-search srch-btn"></i>

            </div>
        </div>
    </nav>

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

    <!-- Creating Slider -->
    <header id="slider" class="slider">
        <div class="slider-box">
            <div class="slide" style="background-image:url(./img/Compressed/brown-teddy-bear-on-brown-wooden-bench-outside-207891-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals!!!</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url(./img/Compressed/model-vehicle-classic-oldtimer-35619-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide active" style="background-image:url(./img/Compressed/photo-of-nike-shoes-1598505-min.jpg);">
                <div class="container">
                    <div class="caption">
                        <h2 class="head-1 light">Trending Deals</h2>
                        <p class="lead-1 light">Grab the deal right now.</p>
                        <a href="#" class="btn btn-unique">SHOP NOW</a>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url(./img/Compressed/apple-earphones-iphone-iphone-x-805922-min.jpg);">
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

            <div class="slide" style="background-image:url(./img/Compressed/woman-in-gray-sweater-holding-white-headphones-3756948-min.jpg);">
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
                    <div class="img card-1" style="background:url('./img/Small_img/selective-focus-photography-of-classic-car-die-cast-models-2691478.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/selective-focus-photography-of-classic-car-die-cast-models-2691478.jpg" alt="deal1"> -->
                    </div>
                    
                    <div class="overlay-content">
                        
                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-2" style="background:url('./img/Small_img/photo-of-nike-shoes-1598505.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/photo-of-nike-shoes-1598505.jpg" alt="deal2"> -->
                    </div>
                    
                    <div class="overlay-content">
                        
                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-3" style="background:url('./img/Small_img/photo-of-woman-wearing-denim-jacket-3250718.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/photo-of-woman-wearing-denim-jacket-3250718.jpg" alt="deal3"> -->
                    </div>
                    
                    <div class="overlay-content">
                        
                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-4" style="background:url('./img/Small_img/close-up-photo-of-wristwatch-2113994.jpg') no-repeat center center/cover;">
                        <!-- <img src="../img/close-up-photo-of-wristwatch-2113994.jpg" alt="deal4"> -->
                    </div>
                    
                    <div class="overlay-content">
                        
                        <p class="head-2 light">upto <span class="head-1">20% off*</span></p>
                    </div>
                </div>

                <div class="card">
                    <div class="img card-5" style="background:url('./img/Small_img/work-nature-blossom-growth-plant-house-883784-pxhere.com.jpg') no-repeat center center/cover;">
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
                    <img src="./img/Illustrations/image-from-rawpixel-id-2297809-png.png" alt="">
                </div>
            </div>
        </section>

       <!-- Section C  -->
       <section id="home-c" class="py-3 bg-semi-med">
           <div class="container">
                <h2 class="head-line-2">NEW COLLECTIONS</h2>
                <p class="lead-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore error cum ratione possimus culpa! Eius!</p>

                <div class="product ">
                    <div class="box product-1">
                        <div class="upper-tab">
                            <div class="img-contain">
                                <img src="./img/Clothes/Women-Download-Free-PNG.png" alt="">
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="far fa-star main"></i>
                            </div>
                            <div class="content-pc">
                                <h3 class="head-3">Women's Sweater</h3>
                                <p class="lead-3 med">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <div class="content-m">
                                <h3 class="head-3">Women's Sweater</h3>
                            </div>
                        </div>
                        <div class="bottom-tab">
                            <div class="price-tab">
                                <p class="lead-1 main">₹599</p>
                                <p class="lead-3">₹999</p>
                                
                            </div>
                            <div class="btn-tab">
                                <!-- <a href="#" class="btn btn-light btn-pc">ADD TO CART</a> -->
                                <a class="btn btn-primary cart"><i class="fa fa-cart-plus"></i></a>
                                <a  class="btn btn-light fav"><i class="far fa-heart main fav-1"></i></a>

                            </div>
                        </div>
                       
                    </div>

                    <div class="box product-2">
                        <div class="upper-tab">
                            <div class="img-contain">
                                <img src="./img/Clothes/cloth2.png" alt="">
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="far fa-star main"></i>
                                <i class="far fa-star main"></i>
                            </div>
                            <div class="content-pc">
                                <h3 class="head-3">Women's Sweater</h3>
                                <p class="lead-3 med">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <div class="content-m">
                                <h3 class="head-3">Women's Sweater</h3>
                            </div>
                        </div>

                        <div class="bottom-tab">
                            <div class="price-tab">
                                <p class="lead-1 main">₹599</p>
                                <p class="lead-3">₹999</p>
                                
                            </div>
                            <div class="btn-tab">
                                <!-- <a href="#" class="btn btn-light">ADD TO CART</a> -->
                                <a class="btn btn-primary cart"><i class="fa fa-cart-plus"></i></a>
                                <a  class="btn btn-light fav"><i class="far fa-heart main fav-2"></i></a>

                            </div>
                        </div>
                        
                    </div>

                    <div class="box product-3">
                        <div class="upper-tab">
                            <div class="img-contain">
                                <img src="./img/Clothes/cloth3.png" alt="">
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="far fa-star main"></i>
                                <i class="far fa-star main"></i>
                                <i class="far fa-star main"></i>
                            </div>
                            <div class="content-pc">
                                <h3 class="head-3">Women's Gown</h3>
                                <p class="lead-3 med">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <div class="content-m">
                                <h3 class="head-3">Women's Sweater</h3>
                            </div>
                        </div>
                        <div class="bottom-tab">
                            <div class="price-tab">
                                <p class="lead-1 main">₹999</p>
                                <p class="lead-3">₹1999</p>
                                
                            </div>
                            <div class="btn-tab">
                                <!-- <a href="#" class="btn btn-light">ADD TO CART</a> -->
                                <a class="btn btn-primary cart"><i class="fa fa-cart-plus"></i></a>
                                <a  class="btn btn-light fav"><i class="far fa-heart main fav-3"></i></a>

                            </div>
                        </div>
                        
                    </div>
                </div>
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
                <h2 class="head-line-2">DEALS OF THE DAY</h2>
                <p class="lead-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, est architecto ut quas culpa doloremque?</p>

                <div class="product">
                    <div class="box product-4">
                        <div class="upper-tab">
                            <div class="img-contain">
                                <img src="./img/Bags/bag1.png" alt="">
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                            </div>
                            <div class="content-pc">
                                <h3 class="head-3">Leather Hand Bag</h3>
                                <p class="lead-3 med">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <div class="content-m">
                                <h3 class="head-3">Leather Hand Bag</h3>
                            </div>
                        </div>
                        <div class="bottom-tab">
                            <div class="price-tab">
                                <p class="lead-1 main">₹459</p>
                                <p class="lead-3">₹559</p>
                                
                            </div>
                            <div class="btn-tab">
                                <a class="btn btn-primary cart"><i class="fa fa-cart-plus"></i></a>
                                <a  class="btn btn-light fav"><i class="far fa-heart main fav-4"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box product-5">
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
                                <a  class="btn btn-light fav"><i class="far fa-heart main fav-5"></i></a>

                            </div>
                        </div>
                            
                    </div>
        
                    <div class="box product-6">
                        <div class="upper-tab">
                            <div class="img-contain">
                                <img src="./img/Shoes/shoes1.png" alt="">
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                                <i class="fa fa-star main"></i>
                            </div>
                            <div class="content-pc">
                                <h3 class="head-3">Women's Shoes</h3>
                                <p class="lead-3 med">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <div class="content-m">
                                <h3 class="head-3">Leather Hand Bag</h3>
                            </div>
                        </div>
                        <div class="bottom-tab">
                            <div class="price-tab">
                                <p class="lead-1 main">₹899</p>
                                <p class="lead-3">₹1099</p>
                                
                            </div>
                            <div class="btn-tab">
                                <a class="btn btn-primary cart"><i class="fa fa-cart-plus"></i></a>
                                <a  class="btn btn-light fav"><i class="far fa-heart main fav-6"></i></a>

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
                   <h2 class="head-2">OUR SERVICES</h2>
                   <ul>
                       <li>
                           <div class="icon-tab">
                               <div class="icon-contain">
                                   <i class="fa fa-user"></i>
                                </div>

                           </div>
                           <span class="content">
                               <h3 class="head-3">24/7 online free support</h3>
                               <p class="lead-2 med">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id ratione sequi at sapiente excepturi, animi earum minus atque iste iure!</p>
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
                               <p class="lead-2 med">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id ratione sequi at sapiente excepturi, animi earum minus atque iste iure!</p>
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
                               <p class="lead-2 med">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id ratione sequi at sapiente excepturi, animi earum minus atque iste iure!</p>
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
                               <p class="lead-2 med">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique voluptatem voluptatum laudantium voluptates excepturi earum praesentium ab pariatur explicabo asperiores odit, saepe dolore maiores, beatae veritatis possimus incidunt illo temporibus esse inventore aliquid odio repellendus accusamus. Nobis dolorum sint sed neque? Minima, dicta! Aut aliquam numquam vero eligendi dicta.</p>
                               <p class="name lead-2">- User1</p>
                           </div>
                        </div>

                        <div class="slide">
                            <div class="feedback-content">
                                <div class="image">
                                    <img src="./img/Faces/Untitled design (1).png" alt="">

                                </div>
                                <p class="lead-2 med">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique voluptatem voluptatum laudantium voluptates excepturi earum praesentium ab pariatur explicabo asperiores odit, saepe dolore maiores, beatae veritatis possimus incidunt illo temporibus esse inventore aliquid odio repellendus accusamus. Nobis dolorum sint sed neque? Minima, dicta! Aut aliquam numquam vero eligendi dicta.</p>
                                <p class="name lead-2">- User2</p>
                            </div>
                        </div>

                         <div class="slide">
                            <div class="feedback-content">
                                <div class="image">
                                    <img src="./img/Faces/Untitled design (2).png" alt="">

                                </div>
                                <p class="lead-2 med">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique voluptatem voluptatum laudantium voluptates excepturi earum praesentium ab pariatur explicabo asperiores odit, saepe dolore maiores, beatae veritatis possimus incidunt illo temporibus esse inventore aliquid odio repellendus accusamus. Nobis dolorum sint sed neque? Minima, dicta! Aut aliquam numquam vero eligendi dicta.</p>
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
    <footer class="main-footer bg-light py-3">
        <div class="container">
            <div class="footer">

                <div class="footer-1">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./img/shopping-cart.png" alt="logo">
                            <h2 class="head-1">Mauj</h2>
                        </a>
                    </div>
                    <div class="address">
                        <ul>
                            <li><i class="fa fa-home"></i><p>Kya kroge Jaan kar</p> </li>
                            <li><i class="fa fa-phone"></i><p>+91-942567389</p> </li>
                            <li><i class="fa fa-envelope"></i><p>bazaarhaat@gmail.com</p> </li>
                        </ul>
                        <div class="logos">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="footer-2">
                    <h2 class="head-2">INFORMATION</h2>
                    <ul>
                        <li>
                            <a href="">Contact Us</a>
                        </li>
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="">FAQ's</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-3">
                    <h2 class="head-2">SHOP</h2>
                    <ul>
                        <li>
                            <a href="">Women's Fashion</a>
                        </li>
                        <li>
                            <a href="">Groceries</a>
                        </li>
                        <li>
                            <a href="">Electronics & Gadgets</a>
                        </li>
                        <li>
                            <a href="">Stationary</a>
                        </li>
                        <li>
                            <a href="">Mauj's Nursery</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-4">
                    <h2 class="head-2">MY ACCOUNT</h2>
                    <ul>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a href="sign_up.php">Register</a>
                        </li>
                        <li>
                            <a href="">Recommended</a>
                        </li>
                        <li>
                            <a href="">Payments</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-6">
                    <div class="address">
                        <ul>
                            <li><i class="fa fa-home"></i><p>Kya kroge Jaan kar</p> </li>
                            <li><i class="fa fa-phone"></i><p>+91-942567389</p> </li>
                            <li><i class="fa fa-envelope"></i><p>bazaarhaat@gmail.com</p> </li>
                        </ul>
                        <div class="logos">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-5">
                    <p class="lead-4">Copyright &copy; BazaarHaat 2020, All Rights Reserved</p>
                </div>

            </div>
        </div>
    </footer>
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
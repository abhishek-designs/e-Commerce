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
                        <a href="index.php">Home</a>
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
                <a href="login.php"><i class="fa fa-user current"></i></a>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
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
                        <div>
                            <div class="menu-box bg-light">
                                <li class="item" id="item-1">
                                    <a href="index.html" class="list list-1">Home</a>
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
        
                                <li class="item" id="item-6">
                                    <a href="#/item-6" class="list list-6">Account</a>
                                </li>
        
                            </div>
                        </div>
                    </div>


            </div>

            <div class="logo">
                <a href="">
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

    <!-- Sign In Box -->
    <section id="sign-in" class="my-2">
        <div class="container">
            <div class="card card-1 bg-semi-med">
                <h2 class="head-3">NEW CUSTOMERS</h2>
                <p class="lead-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nihil harum tenetur quam excepturi, magnam odit libero maxime illo cupiditate velit id ab quos iure dolorum itaque amet, vel ratione unde voluptatem provident ut! Laudantium quod tempore velit voluptatum eaque veritatis cupiditate ipsa odit vitae! Modi ducimus dolore nostrum ratione?</p>
                <a href="sign_up.php" class="btn btn-unique">Create Account</a>
            </div>
            <div class="card card-2 bg-semi-med">
                <h2 class="head-3">REGISTERED CUSTOMERS</h2>
                <div class="form-grp">
                    <label for="mail">Email</label>
                    <input type="text" name="mail" id="mail">
                </div>
                <div class="form-grp">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd">
                </div>

                <div class="bottom-space">
                    <a href="#" class="lead-3">Forgot Your Password?</a>
                    <a href="#" class="btn btn-unique">login</a>
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

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
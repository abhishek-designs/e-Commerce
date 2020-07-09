<?php
    echo '<!-- Navigation Bar (PC/Laptop) -->
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
                <a href="login.php"><i class="fa fa-user"></i></a>
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
    </nav>';
?>
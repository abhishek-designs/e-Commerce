<?php
    session_start();
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
                <i class="fa fa-search srch-btn"></i>'; ?>
                
            <?php 

            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
            {
                echo '<!-- this to be shown when logged out -->
                   <a href="login.php">
                       <i class="fa fa-user"></i>
                   </a>';

            }
            else
            {
                echo '<!-- this to be shown when logged in -->
                <div class="user">
                    <i class="fa fa-user"></i>
                    <div class="user-card bg-light my-4">
                        <div class="upper-tab">
                            <div class="ico">
                                <i class="fa fa-user-alt"></i>
                            </div>
                            <h2 class="head-2 main">Hello, '.$_SESSION['username'].'</h2> 
                        </div>
                        <ul>
                            <li>
                                <a href="#" class="">
                                    <div class="option option1">
                                        <div class="ico">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <p class="lead-3">Manage Account</p> 
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <div class="option option2">
                                        <div class="ico">
                                            <i class="fa fa-crown"></i>
                                        </div>
                                        <p class="lead-3">Become a member</p> 
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <div class="option option3">
                                        <div class="ico">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                        <p class="lead-3">Settings</p> 
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" class="">
                                    <div class="option option4">
                                        <div class="ico">
                                            <i class="fa fa-door-open"></i>
                                        </div>
                                        <p class="lead-3">Sign Out</p> 
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>';
            }
            ?>

            


                <?php 
                echo '<a href="#" class="shopping"><i class="fa fa-shopping-cart"></i>
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
                    
                        <div>
                            <div class="menu-box bg-light">
                                <span class="user-name">
                                    <i class="fa fa-user-alt"></i>'; ?>

                                    <?php
                                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                                    {
                                        echo  '<h2 class="lead-2">Hello, Guest</h2>';

                                    }
                                    else
                                    {
                                        echo  '<h2 class="lead-2">Hello, '.$_SESSION['username'].'</h2>';
                                    }
                                    ?>

                                <?php    
                                  echo '</span>
                                <div class="sub-contain">
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
                                    </li>';
                                    ?>

                                    <?php
                                        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                                        {
                                            echo '<li class="item">
                                                <a href="login.php" class="list list-6">Sign In</a>
                                            </li>';

                                        }
                                        else
                                        {
                                            echo '<li class="item">
                                                    <a href="logout.php" class="list list-6">Sign Out</a>
                                                </li>';

                                        }
                                    ?>

                                <?php
                                echo '</div>
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
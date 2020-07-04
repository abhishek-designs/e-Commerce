<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sign_up.css">
    <title>Create Account | eCommerce</title>
</head>
<body>
    <!-- Navigation Bar (PC/Laptop) -->
    <nav class="navbar py-1">
        <div class="container">
            <div class="logo">
                <a href="index.html">
                    <img src="./img/shopping-cart.png" alt="logo">
                    <h1 class="head-2">MAUJ</h1>
                </a>
                
            </div>

            <div class="menu-list">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
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
                <a href="login.html"><i class="fa fa-user current"></i></a>
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
                                <li class="item">
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
    
    <!-- Sign Up Box -->
    <section id="sign-up" class="my-2">
        <div class="container">
                <h2 class="head-3">CREATE ACCOUNT</h2>
                <div class="sign-box my-1">
                    <div class="card card1 active">
                        <div class="card-contain bg-semi-med">
                            <div class="controls">
                                <h2 class="head-2">CREATE ACCOUNT</h2>
                            </div>


                                <div class="form-grp">
                                    <label for="name">Name <span class="red">*</span></label>
                                    <input type="text" name="name" id="name" class="name">
                                    <span class="err-msg">
                                        <i class="fa fa-info"></i>
                                        <div class="content name-pop-up">
                                            <p class="lead-3">Name is Required</p>
                                        </div>
                                    </span>
                                </div>
                                <div class="form-grp">
                                    <label for="mail">Email <span class="red">*</span></label>
                                    <input type="text" name="mail" id="mail" class="mail">
                                    <span class="err-msg">
                                        <i class="fa fa-info"></i>
                                        <div class="content mail-pop-up">
                                            <p class="lead-3">Email is Required</p>
                                        </div>
                                    </span>
                                    <span class="error-ball"><i class="fa fa-close"></i></span>
                                    <span class="correct-ball"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="form-grp">
                                    <label for="pwd" class="pwd">Password <span class="red">*</span></label>
                                    <span class="condition">
                                        <i class="fa fa-info"></i>
                                        <div class="content">
                                            <ul>
                                                <li>Password should have min. 8 characters.</li>
                                                <li>Password should consist of atleast one special character.</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </span>
                                    <input type="password" name="pwd" id="pwd" class="pwd-field" >
                                    <span class="err-msg">
                                        <i class="fa fa-info"></i>
                                        <div class="content pwd-pop-up">
                                            <p class="lead-3">Password is Required</p>
                                        </div>
                                    </span>
                                    <span class="error-ball"><i class="fa fa-close"></i></span>
                                    <span class="correct-ball"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="form-grp">
                                    <label for="cpwd">Confirm Password <span class="red">*</span></label>
                                    <input type="password" name="cpwd" id="cpwd" class="cpwd-field">
                                    <span class="err-msg">
                                        <i class="fa fa-info"></i>
                                        <div class="content pwd-pop-up">
                                            <p class="lead-3">Password is Required</p>
                                        </div>
                                    </span>
                                    <span class="correct-ball"><i class="fa fa-check"></i></span>
                                </div>

                                <div class="bottom-space-m">
                                    <a href="#" class="btn btn-unique next">Next</a>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="card card2">
                        <div class="card-contain bg-semi-med">
                            <div class="controls">
                                <a href="#" class="btn btn-primary prev"><i class="fa fa-chevron-left"></i></a>
                                <h2 class="head-2">CREATE ACCOUNT</h2>
                            </div>
                            <div class="form-grp">
                                <label for="state">State <span class="red">*</span></label>
                                <select name="state" id="state" class="list-box">
                                        <option value="select" selected="true" disabled>Select State</option>
                                        <option value="Andra Pradesh">Andra Pradesh</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dehradun">Dehradun</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Gujurat">Gujurat</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                </select>
                            </div>
                            <div class="form-grp">
                                <label for="city">City <span class="red">*</span></label>
                                <select name="city" id="city" class="list-box">
                                    <option value="select" selected="true" disabled>Select City</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Sehore">Sehore</option>
                                    <option value="Bhopal">Bhopal</option>
                                    <option value="Indore">Indore</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Banglore">Banglore</option>
                                </select>
                                <!-- <input type="text" name="city" id="city"> -->
                            </div>
                            <div class="form-grp">
                                <label for="address">Address <span class="red">*</span></label>
                                <input type="text" name="address" id="address">
                            </div>
                            <div class="form-grp">
                                <label for="code">Phone Number <span class="red">*</span></label>
                                <input type="number" name="code" id="phone" class="code field-padd">
                                &dash;
                                <input type="number" name="number" id="phone" class="number field-padd">
                                <p class="lead-3">Country code + Phone number</p>
                            </div>

                            <div class="bottom-space-m">
                                <a href="#" class="btn btn-unique submit">Submit</a>
                                <p class="lead-4">By clicking 'Submit' you agree to the <a href="#" class="lead-4">Terms & Conditions</a>.</p>
                            </div>
                        </div>
                            
                    </div>
                        
                </div>
                    <div class="bottom-space">
                        <a href="#" class="btn btn-unique"></a>
                        <p class="lead-4">By clicking 'Submit' you agree to the <a href="#" class="lead-4">Terms & Conditions</a>.</p>
                    </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer bg-light py-3">
        <div class="container">
            <div class="footer">

                <div class="footer-1">
                    <div class="logo">
                        <a href="">
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
                            <a href="">Login</a>
                        </li>
                        <li>
                            <a href="">Register</a>
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
<script src="scripts/sign_up.js"></script>
<script src="scripts/request.js"></script>
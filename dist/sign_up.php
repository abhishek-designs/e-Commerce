<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = trimData($_POST['name']);
        $mail = trimData($_POST['mail']);
        $pwd = htmlspecialchars($_POST['pwd']);
        $cpwd = htmlspecialchars($_POST['cpwd']);
        $state = $_POST['state'];
        $city = $_POST['city'];
        $address = htmlspecialchars($_POST['address']);
        $code = htmlspecialchars($_POST['code']);
        $num = htmlspecialchars($_POST['number']);
        $pwdLen = strlen($pwd);
        
        // Validating Name
        $namePattern = '/[@#$%^&*0-9]/';

        if(!empty($name))
        {
            if(!preg_match($namePattern,$name))
            {
                $name_data = $name;
            }
            else
            {
                echo 'Name is invalid';
            }

        }
        else
        {
            echo 'Name is Required';
        }

        // Validating Email
        if(!empty($mail))
        {
            if(filter_input(INPUT_POST,'mail',FILTER_VALIDATE_EMAIL))
            {
                $mail_data = $mail;
            }
            else
            {
                echo 'Email is invalid';
            }
        }
        else
        {
            echo 'Email is Required';
        }

        // Validating Password
        $pwdPattern = '/[*@_$%&^]/';

        if(!empty($pwd) && !empty($cpwd))
        {
            if($pwdLen >= 8 && preg_match($pwdPattern,$pwd))
            {
                echo 'Strong Password';
                echo '<br>';
                if($cpwd == $pwd)
                {
                    $pwd_data = $pwd;
                }
                else
                {
                    echo'Try Again';
                }
            }
            else
            {
                echo 'Weak Password';
            }

        }
        else
        {
            echo 'Password is Required';
        }

        // Address
        if(!empty($address))
        {
            $address_data = $address;
        }
        else
        {
            echo 'Address is Required';
        }

        // Phone number
        if(!empty($code) && !empty($num))
        {
            $phone_data = $code.$num;
        }
        else
        {
            echo 'Phone number is Required';
        }

        // State
        if(!empty($state))
        {
            $state_data =$state;
        }
        else
        {
            echo 'Please select your state';
        }

        // City
        if(!empty($city))
        {
            $city_data = $city;
        }
        else
        {
            echo 'Please select your City';
        }

        // Mysql Connection
        if(!empty($name_data) && !empty($mail_data) && !empty($pwd_data) && !empty($address_data) && !empty($phone_data) && !empty($state_data) && !empty($city_data))
        {
            $username = 'abhi';
            $server = 'localhost';
            $password = 'abhi@368';
            $dbName = 'test';
    
            $con = mysqli_connect($server,$username,$password,$dbName);
            if($con)
            {
                $query = 'create table t2
                            (Cust_Id int(5) primary key auto_increment,
                             Cust_Name varchar(200) not null,
                             Cust_Email varchar(200) not null,
                             Cust_Pwd varchar(150) not null unique,
                             Address varchar(250) not null,
                             Phone_no long not null unique,
                             State varchar(200) not null,
                             City varchar(100) not null,
                             Reg_Date date default curdate(),
                             Reg_Time time default curtime())';

                $stmt = mysqli_query($con,$query);

                echo 'Table created';
                $query = 'insert into t2(Cust_Name,Cust_Email,Cust_Pwd,Address,Phone_no,State,City) values(?,?,?,?,?,?,?)';
                $chk = mysqli_prepare($con,$query);
    
                if($chk)
                {
                    mysqli_stmt_bind_param($chk,'ssssiss',$name_data,$mail_data,$pwd_data,$address_data,$phone_data,$state_data,$city_data);
                    mysqli_stmt_execute($chk);

                    echo 'Registration Successful '.mysqli_error($con);
                }
                else
                {
                    echo 'Registration Failed '.mysqli_error($con);
                }


            }
            else
            {
                echo 'Storing failed';
            }

        }
        else 
        {
            echo 'No values found';
        }

    }

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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <h2 class="head-3">CREATE ACCOUNT</h2>
                <div class="sign-box my-1">
                    <div class="card card1 active">
                        <div class="card-contain bg-semi-med">
                            <div class="controls">
                                <h2 class="head-2">CREATE ACCOUNT</h2>
                            </div>


                                <div class="form-grp">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" value=<?php echo $name; ?>>
                                </div>
                                <div class="form-grp">
                                    <label for="mail">Email</label>
                                    <input type="text" name="mail" id="mail" value=<?php echo $mail; ?>>
                                </div>
                                <div class="form-grp">
                                    <label for="pwd" class="pwd">Password</label>
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
                                    <input type="password" name="pwd" id="pwd" value=<?php echo $pwd; ?>>
                                </div>
                                <div class="form-grp">
                                    <label for="cpwd">Confirm Password</label>
                                    <input type="password" name="cpwd" id="cpwd" value=<?php echo $cpwd; ?>>
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
                                <label for="state">State</label>
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
                                <label for="city">City</label>
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
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" value=<?php echo $address; ?>>
                            </div>
                            <div class="form-grp">
                                <label for="code">Phone Number</label>
                                <input type="number" name="code" id="phone" class="code field-padd" value=<?php echo $code; ?>>
                                &dash;
                                <input type="number" name="number" id="phone" class="number field-padd" value=<?php echo $num; ?>>
                                <p class="lead-3">Country code + Phone number</p>
                            </div>

                            <div class="bottom-space-m">
                                <input type="submit" value="Submit" class="btn btn-unique">
                                <p class="lead-4">By clicking 'Submit' you agree to the <a href="#" class="lead-4">Terms & Conditions</a>.</p>
                            </div>
                        </div>
                            
                    </div>
                        
                </div>
                    <div class="bottom-space">
                        <input type="submit" value="Submit" class="btn btn-unique">
                        <p class="lead-4">By clicking 'Submit' you agree to the <a href="#" class="lead-4">Terms & Conditions</a>.</p>
                    </div>
            </form>
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
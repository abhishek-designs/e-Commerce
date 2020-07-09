<?php 
    $showError = false;
    $showAlert = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = trimData($_POST['name']);
        $mail = trimData($_POST['mail']);
        $pwd = htmlspecialchars($_POST['pwd']);
        $cpwd = htmlspecialchars($_POST['cpwd']);
        $state = trimData($_POST['state']);
        $city = trimData($_POST['city']);
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
                $ShowError = 'Check your Name first';
            }

        }
        else
        {
            $showError = 'Enter your Name Buddy';
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
                $failed = true;
            }
        }
        else
        {
            $failed = true;
        }

        // Validating Password
        $pwdPattern = '/[*@_$%&^]/';

        if(!empty($pwd) && !empty($cpwd))
        {
            if($pwdLen >= 8 && preg_match($pwdPattern,$pwd))
            {
                // echo 'Strong Password';
                // echo '<br>';
                if($cpwd == $pwd)
                {   
                    // Password Matched
                    $pwd_data = password_hash($pwd,PASSWORD_DEFAULT);
                    
                }
                else
                {
                    $showError = 'Password did not match';
                }
            }
            else
            {
                $showError = 'Invalid Password';
            }

        }
        else
        {
            $showError = 'Enter your Password Buddy';
        }

        // Address
        if(!empty($address))
        {
            $address_data = $address;
        }
        else
        {
            $showError = 'Enter your Address Buddy';
        }

        // Phone number
        if(!empty($code) && !empty($num))
        {
            $phone_data = $code.$num;
        }
        else
        {
            $showError = 'Enter your Phone number Buddy';
        }

        // State
        if(!empty($state))
        {
            $state_data =$state;
        }
        else
        {
            $showError = 'Select your State Buddy';
        }

        // City
        if(!empty($city))
        {
            $city_data = $city;
        }
        else
        {
            $showError = 'Select your City Buddy';
        }

        // Mysql Connection
        if(!empty($name_data) && !empty($mail_data) && !empty($pwd_data) && !empty($address_data) && !empty($phone_data) && !empty($state_data) && !empty($city_data))
        {
            // Connecting to database
            include 'partials/_mySQLConnect.php';

            // Verfying wether the data exists in the database or not
            $fetch = "select *from t2 where Cust_Email= '$mail_data' AND Phone_no= '$phone_data'";
            $res = mysqli_query($con,$fetch);
            $num = mysqli_num_rows($res);
            
            if($num > 0)
            {
                // data exists
                $showError = 'User already exists';
            }
            else
            {
                
                // Storing the data if the same data is not exists in the database
                $store = 'insert into t2 (Cust_Name, Cust_Email,Cust_Pwd,Address,Phone_no,State,City) VALUES ("'.$name_data.'","'.$mail_data.'","'.$pwd_data.'","'.$address_data.'",'.$phone_data.',"'.$state_data.'","'.$city_data.'")';
                $chk = mysqli_query($con,$store);
    
                if($chk)
                {
                    echo 'Registration Successful';
                    header('location:login.php');
                    // exit;
                }
                else
                {
                    $showError = 'Registration Failed try again later!!';
                }

            }


        }
        else
        {
            $showError = 'Please fill all the fields';
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
    <?php require 'partials/_navbar.php'; ?>
    
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
    
    <!-- Show Alert according to the condition -->
    <?php
        if($showError)
        {
            echo '<div class="error-tab py-1">
                <div class="container">
                    <p class="lead-3 light"><strong>Oops,</strong> '.$showError.'</p>
                    <a href="#" class="close-btn light"><i class="fa fa-close"></i></a>
                </div>
            </div>';

        }
    ?>
        
    

    <!-- Sign Up Box -->
    <section id="sign-up" class="my-2">
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
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
                                <select name="state" id="state" class="list-box state-field">
                                        <option value="" selected="true"></option>
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
                                <select name="city" id="city" class="list-box city-field">
                                    <option value="" selected="true"></option>
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
                                <input type="text" name="address" id="address" class="add-field">
                                <span class="err-msg">
                                    <i class="fa fa-info"></i>
                                    <div class="content add-pop-up">
                                        <p class="lead-3">Address is Required</p>
                                    </div>
                                </span>
                            </div>
                            <div class="form-grp">
                                <label for="code">Phone Number <span class="red">*</span></label>
                                <input type="number" name="code" id="phone" class="code field-padd phone-field" placeholder="Code">
                                &dash;
                                <input type="number" name="number" id="phone" class="number field-padd phone-field" placeholder="Number">
                                <span class="err-msg">
                                    <i class="fa fa-info"></i>
                                    <div class="content add-pop-up">
                                        <p class="lead-3">Phone number is Required</p>
                                    </div>
                                </span>
                            </div>

                            <div class="bottom-space-m">
                                <button type="submit" class="btn btn-unique">Submit</button>
                                <p class="lead-4">By clicking 'Submit' you agree to the <a href="#" class="lead-4">Terms & Conditions</a>.</p>
                            </div>
                        </div>
                            
                    </div>
                        
                </div>
                    <div class="bottom-space">
                        <a href="#" class="btn btn-unique"></a>
                        <p class="lead-4">By clicking 'Submit' you agree to the <a href="#" class="lead-4">Terms & Conditions</a>.</p>
                    </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
<script src="scripts/sign_up.js"></script>
<script src="scripts/request.js"></script>
<script src="scripts/alert_tab.js"></script>
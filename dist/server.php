<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = trimData($_POST['name']);
        $mail = trimData($_POST['mail']);
        $pwd = htmlspecialchars($_POST['pwd']);
        $cpwd = htmlspecialchars($_POST['cpwd']);
        // $state = $_POST['state'];
        // $city = $_POST['city'];
        // $address = htmlspecialchars($_POST['address']);
        // $code = htmlspecialchars($_POST['code']);
        // $num = htmlspecialchars($_POST['number']);
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
                echo '0';
            }

        }
        else
        {
            echo '0';
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
                echo '1';
            }
        }
        else
        {
            echo '1';
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
                    $pwd_data = $pwd;
                }
                else
                {
                    echo '2';
                }
            }
            else
            {
                echo '2';
            }

        }
        else
        {
            echo '2';
        }

        // Address
        // if(!empty($address))
        // {
        //     $address_data = $address;
        // }
        // else
        // {
        //     echo 'Address is Required';
        // }

        // // Phone number
        // if(!empty($code) && !empty($num))
        // {
        //     $phone_data = $code.$num;
        // }
        // else
        // {
        //     echo 'Phone number is Required';
        // }

        // // State
        // if(!empty($state))
        // {
        //     $state_data =$state;
        // }
        // else
        // {
        //     echo 'Please select your state';
        // }

        // // City
        // if(!empty($city))
        // {
        //     $city_data = $city;
        // }
        // else
        // {
        //     echo 'Please select your City';
        // }

        // Mysql Connection
        if(!empty($name_data) && !empty($mail_data) && !empty($pwd_data)) //&& !empty($address_data) && !empty($phone_data) && !empty($state_data) && !empty($city_data))
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
                             Cust_Pwd varchar(150) not null unique)';
                            //  Address varchar(250) not null,
                            //  Phone_no long not null unique,
                            //  State varchar(200) not null,
                            //  City varchar(100) not null,
                            //  Reg_Date date default curdate(),
                            //  Reg_Time time default curtime());

                $stmt = mysqli_query($con,$query);

                echo 'Table created';
                // $query = 'insert into t2(Cust_Name,Cust_Email,Cust_Pwd,Address,Phone_no,State,City) values(?,?,?,?,?,?,?)';
                $query = 'insert into t2(Cust_Name,Cust_Email,Cust_Pwd) values(?,?,?)';
                $chk = mysqli_prepare($con,$query);
    
                if($chk)
                {
                    // mysqli_stmt_bind_param($chk,'ssssiss',$name_data,$mail_data,$pwd_data,$address_data,$phone_data,$state_data,$city_data);
                    mysqli_stmt_bind_param($chk,'sss',$name_data,$mail_data,$pwd_data);
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

    }

    function trimData($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    
    
?>
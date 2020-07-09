<?php 
    // $username = 'abhi';
    // $server = 'localhost';
    // $password = 'abhi@368';
    // $dbName = 'test2';

    // $con = mysqli_connect($server,$username,$password,$dbName);
    // if(!$con)
    // {
    //     die('Connection Error: '.mysqli_connect_error($con));
    // }

    // $query = 'select*from product';
    // $res = mysqli_query($con,$query);

    // $num = mysqli_num_rows($res);
    
    // if($num > 0)
    // {
    //     while($row = mysqli_fetch_assoc($res))
    //     {
    //         echo $row['Name'];
    //     }
        
    // }
    // else
    // {
    //     echo 'No records found';
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Testing</title>
<style>
    *
    {
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    
    h1
    {
        text-align:center;
        padding-bottom:3rem;
    }

    .form-grp
    {
        text-align:center;
        margin-bottom:2rem;
    }

    label
    {
        display:block;
    }

    .name,.mail,.comment
    {
        border:2px solid
    }

    .msg
    {
        color:red;
    }

    .error
    {
        animation-name:shake;
        animation-duration: 0.3s;
        animation-direction: alternate;
        border-color:red;
    }


    @keyframes shake
    {
        from
        {
            transform:translateX(5px);
        }
        to
        {
            transform:translateX(-5px);
        }
    }
</style>
</head>
<body>
<h1>Testing PHP with mySQL</h1>

<form action="test2.php" method="post">
    <div class="form-grp">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="name">
        <div class="name-msg msg"></div>
    </div>
    <div class="form-grp">
        <label for="name">Email</label>
        <input type="text" name="mail" id="mail" class="mail">
        <div class="mail-msg msg"></div>
    </div>
    <div class="form-grp">
        <label for="name">Comment</label>
        <input type="text" name="comment" id="comment" class="comment">
        <div class="comment-msg msg"></div>
    </div>
    <input type="submit" value="Submit" class="submit">
    <div class="server"></div>
</form>
</body>
</html>

<!-- <script src="scripts/test.js" async></script> -->